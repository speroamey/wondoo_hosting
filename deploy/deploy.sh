#!/usr/bin/env bash
set -euo pipefail

DEPLOY_PATH="${DEPLOY_PATH:?DEPLOY_PATH is required}"
RELEASE_ID="${1:-manual}"
HEALTH_URL="${HEALTH_URL:-}"

mkdir -p "$DEPLOY_PATH/releases" "$DEPLOY_PATH/shared/data" "$DEPLOY_PATH/shared/config"
release="$DEPLOY_PATH/releases/$(date -u +%Y%m%d%H%M%S)-$RELEASE_ID"
mkdir -p "$release"
tar -xzf /tmp/fossbilling.tar.gz -C "$release"

if [ -L "$DEPLOY_PATH/current" ]; then
  previous="$(readlink -f "$DEPLOY_PATH/current")"
else
  previous=""
fi

rm -rf "$release/data"
ln -s "$DEPLOY_PATH/shared/data" "$release/data"

if [ ! -f "$DEPLOY_PATH/shared/config/config.php" ]; then
  echo "Missing $DEPLOY_PATH/shared/config/config.php" >&2
  exit 1
fi
ln -s "$DEPLOY_PATH/shared/config/config.php" "$release/config.php"

if ! php -l "$release/index.php" >/dev/null; then
  echo "PHP syntax validation failed" >&2
  exit 1
fi

ln -sfn "$release" "$DEPLOY_PATH/current.next"
mv -Tf "$DEPLOY_PATH/current.next" "$DEPLOY_PATH/current"

if [ -n "$HEALTH_URL" ]; then
  if ! curl --fail --silent --show-error --location --max-time 20 "$HEALTH_URL" >/dev/null; then
    if [ -n "$previous" ]; then
      ln -sfn "$previous" "$DEPLOY_PATH/current.next"
      mv -Tf "$DEPLOY_PATH/current.next" "$DEPLOY_PATH/current"
    fi
    echo "Health check failed; deployment was rolled back" >&2
    exit 1
  fi
fi

rm -f /tmp/fossbilling.tar.gz

# Keep five releases for manual rollback.
mapfile -t releases < <(find "$DEPLOY_PATH/releases" -mindepth 1 -maxdepth 1 -type d | sort)
count="${#releases[@]}"
if [ "$count" -gt 5 ]; then
  remove_count=$((count - 5))
  for ((i=0; i<remove_count; i++)); do
    rm -rf "${releases[$i]}"
  done
fi

echo "Deployed $release"
