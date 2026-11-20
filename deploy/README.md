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

- `$DEPLOY_PATH/shared/data`
- `$DEPLOY_PATH/shared/config/config.php`

For ISPConfig, set `DEPLOY_PATH` to the website's existing `web` directory (for example, `/var/www/clients/client0/web11/web`). ISPConfig keeps that document root fixed. The workflow installs a root `.htaccess` that internally routes requests to `current` and denies HTTP access to `releases` and `shared`; each release keeps FOSSBilling's own `.htaccess`.

Each release is immutable and linked through `$DEPLOY_PATH/current`.

## GitHub Environment: production

Create these secrets:

- `DEPLOY_HOST`: SSH hostname or IP
- `DEPLOY_USER`: non-root deployment user
- `DEPLOY_PORT`: SSH port, default `22`
- `DEPLOY_PATH`: deployment root; for this ISPConfig site, `/var/www/clients/client0/web11/web`
- `DEPLOY_SSH_KEY`: private key for the deployment user
- `DEPLOY_CONFIG_PHP`: full contents of the production `config.php`, needed only for the first deployment when the server does not already have the shared config file
- `DEPLOY_WEB_GROUP`: PHP-FPM/web-server group name; defaults to `www-data`, and the workflow verifies the installed config belongs to it

Recommended optional variables:

- `HEALTH_URL`: public HTTPS URL used after deployment

The public key must be in `~/.ssh/authorized_keys` on the server. For this ISPConfig site, use the SSH deployment account that owns the website files (typically `web11`) and set `DEPLOY_WEB_GROUP` to `client0`.

## Server preparation

For ISPConfig, the deployment account must be able to write to the website's `web` directory and its `releases` and `shared` subdirectories. Ensure `shared/config` has the PHP-FPM group (`client0` for this site) and the setgid bit so the installed config inherits that group. The workflow installs `config.php` with mode `640` and does not attempt a privileged group change.

Create `$DEPLOY_PATH/shared/config/config.php` from `config-sample.php`, with production database credentials and absolute runtime paths. Alternatively, add the complete PHP config file contents as the GitHub Environment secret `DEPLOY_CONFIG_PHP`; the workflow validates and installs it on first deploy and never overwrites an existing file.

- `path_data` → `$DEPLOY_PATH/shared/data`
- Twig cache → `$DEPLOY_PATH/shared/data/cache`
- `url` → the public HTTPS URL
- `force_https` → `true`
- `debug` → `false`

Never commit this file.

Keep the ISPConfig document root unchanged at the website's `web` directory. The deployment workflow routes requests to the `current` release through the root `.htaccess`. Do not add a browser redirect to `/current/` or expose `releases` and `shared` over HTTP.

The application data directory must remain shared between releases; only source code rotates.

## Deploy

Push to `main` or `master`, or use **Actions → Deploy → Run workflow**.

The workflow:

1. validates all PHP files
2. creates a release archive
3. uploads it through SSH
4. extracts it into a timestamped release
5. links shared `data` and `config.php`
6. atomically switches `$DEPLOY_PATH/current`
7. retains recent releases for manual rollback

## Rollback

```bash
readlink -f /opt/wondoo/current
ls -1 /opt/wondoo/releases
ln -sfn /opt/wondoo/releases/RELEASE_ID /opt/wondoo/current
```

Then reload PHP-FPM and verify the public URL.
