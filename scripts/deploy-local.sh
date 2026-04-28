#!/usr/bin/env bash
set -euo pipefail

cd "$(dirname "$0")/.."

BRANCH="$(git rev-parse --abbrev-ref HEAD)"
if [[ "$BRANCH" != "main" ]]; then
  echo "Not on main; current branch is $BRANCH."
  exit 1
fi

git pull --rebase origin main

find . -name '*.php' -not -path './vendor/*' -print0 | xargs -0 -n1 php -l

git add -A

if git diff --cached --quiet; then
  echo "No changes to commit."
  exit 0
fi

MESSAGE="${1:-Local update $(date '+%Y-%m-%d %H:%M:%S')}"

git commit -m "$MESSAGE"
git push origin main

echo "Pushed to GitHub main. GitHub Actions will deploy to IONOS."
