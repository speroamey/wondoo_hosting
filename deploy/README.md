# CI/CD and secrets

## Repository model

The source repository must not contain:

- `config.php` or `config.old.php`
- database credentials
- ISPConfig Remote User credentials
- `.env` files
- `data/uploads`, `data/cache`, `data/log`
- `stats`, local debug output, IDE folders

Runtime state and release files are kept outside the public web root, in ISPConfig's `private` directory:

- `$DEPLOY_PATH/../private/data`
- `$DEPLOY_PATH/../private/wondoo-deploy/shared/config/config.php`

For ISPConfig, set `DEPLOY_PATH` to the website's existing `web` directory (for example, `/var/www/clients/client0/web11/web`). ISPConfig keeps that document root fixed. **The workflow leaves the existing root `.htaccess` untouched.** It stores releases in `private/wondoo-deploy` and exposes the application files through symlinks in `web`, with `current` as the active-release pointer. Ensure any custom files in `web` whose names collide with application files are backed up; deployment replaces those paths with symlinks.

Each release is immutable and linked through `$DEPLOY_PATH/../private/wondoo-deploy/current`.

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

For ISPConfig, the deployment account must be able to write to the website's `web` and `private` directories. Ensure `private/wondoo-deploy/shared/config` has the PHP-FPM group (`client0` for this site) and the setgid bit so the installed config inherits that group. The workflow installs `config.php` with mode `640` and does not attempt a privileged group change. Ensure PHP-FPM can write to `private/data` as required by the application. The workflow migrates an existing `web/shared/config/config.php` and copies existing data from `web/shared/data` or `web/data` to `private/data` on first deployment.

Create `$DEPLOY_PATH/../private/wondoo-deploy/shared/config/config.php` from `config-sample.php`, with production database credentials and absolute runtime paths. Alternatively, add the complete PHP config file contents as the GitHub Environment secret `DEPLOY_CONFIG_PHP`; the workflow validates and installs it on first deploy and never overwrites an existing file.

- `path_data` → `$DEPLOY_PATH/../private/data`
- Twig cache → `$DEPLOY_PATH/../private/data/cache`
- `url` → the public HTTPS URL
- `force_https` → `true`
- `debug` → `false`

Never commit this file.

Keep the ISPConfig document root unchanged at the website's `web` directory and leave its existing root `.htaccess` as it is. Do not add a browser redirect to `/current/`; the active release is outside the public web root.

The application data directory must remain shared between releases; only source code rotates.

## Deploy

Push to `main` or `master`, or use **Actions → Deploy → Run workflow**.

The workflow:

1. validates all PHP files
2. creates a release archive
3. uploads it through SSH
4. extracts it into a timestamped release
5. links private `data` and `config.php` into the release
6. atomically switches `$DEPLOY_PATH/../private/wondoo-deploy/current`
7. retains recent releases for manual rollback

## Rollback

```bash
readlink -f /opt/wondoo/current
ls -1 /opt/wondoo/releases
ln -sfn /opt/wondoo/releases/RELEASE_ID /opt/wondoo/current
```

Then reload PHP-FPM and verify the public URL.
