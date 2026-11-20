# CI/CD and secrets

## Repository model

The source repository must not contain:

- `config.php` or `config.old.php`
- database credentials
- ISPConfig Remote User credentials
- `.env` files
- `data/uploads`, `data/cache`, `data/log`
- `stats`, local debug output, IDE folders

Runtime state is kept outside the release directory in:

- `/opt/wondoo/shared/data`
- `/opt/wondoo/shared/config/config.php`

Each release is immutable and linked through `/opt/wondoo/current`.

## GitHub Environment: production

Create these secrets:

- `DEPLOY_HOST`: SSH hostname or IP
- `DEPLOY_USER`: non-root deployment user
- `DEPLOY_PORT`: SSH port, default `22`
- `DEPLOY_PATH`: for example `/opt/wondoo`
- `DEPLOY_SSH_KEY`: private key for the deployment user
- `DEPLOY_CONFIG_PHP`: full contents of the production `config.php`, needed only for the first deployment when the server does not already have the shared config file
- `DEPLOY_WEB_GROUP`: PHP-FPM/web-server group allowed to read config; defaults to `www-data`

Recommended optional variables:

- `HEALTH_URL`: public HTTPS URL used after deployment

The public key must be in `~/.ssh/authorized_keys` on the server.

## Server preparation

```bash
sudo mkdir -p /opt/wondoo/shared/config /opt/wondoo/shared/data /opt/wondoo/releases
sudo chown -R deploy:deploy /opt/wondoo
sudo chmod 755 /opt/wondoo /opt/wondoo/releases
```

Create `/opt/wondoo/shared/config/config.php` from `config-sample.php`, with production database credentials and absolute runtime paths. Alternatively, add the complete PHP config file contents as the GitHub Environment secret `DEPLOY_CONFIG_PHP`; the workflow validates and installs it on first deploy and never overwrites an existing file. The file is installed with mode `640` and the `DEPLOY_WEB_GROUP` group (default `www-data`), so configure the deploy user to be a member of that group or set the secret to the actual PHP-FPM group.

- `path_data` → `/opt/wondoo/shared/data`
- Twig cache → `/opt/wondoo/shared/data/cache`
- `url` → the public HTTPS URL
- `force_https` → `true`
- `debug` → `false`

Never commit this file.

Configure the web server document root to:

- `/opt/wondoo/current`

The application data directory must remain shared between releases; only source code rotates.

## Deploy

Push to `main` or `master`, or use **Actions → Deploy → Run workflow**.

The workflow:

1. validates all PHP files
2. creates a release archive
3. uploads it through SSH
4. extracts it into a timestamped release
5. links shared `data` and `config.php`
6. atomically switches `/opt/wondoo/current`
5. retains recent releases for manual rollback

## Rollback

```bash
readlink -f /opt/wondoo/current
ls -1 /opt/wondoo/releases
ln -sfn /opt/wondoo/releases/RELEASE_ID /opt/wondoo/current
```

Then reload PHP-FPM and verify the public URL.
