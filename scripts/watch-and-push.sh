#!/usr/bin/env bash
set -euo pipefail

cd "$(dirname "$0")/.."

BRANCH="$(git rev-parse --abbrev-ref HEAD)"
if [[ "$BRANCH" != "main" ]]; then
  echo "Not on main; current branch is $BRANCH. Exiting."
  exit 1
fi

echo "Watching MarksServices for local changes..."
echo "Press Ctrl+C to stop."

LAST_HASH=""

while true; do
  STATUS="$(git status --porcelain)"

  if [[ -n "$STATUS" ]]; then
    CURRENT_HASH="$(printf '%s' "$STATUS" | shasum -a 256 | awk '{print $1}')"

    if [[ "$CURRENT_HASH" != "$LAST_HASH" ]]; then
      LAST_HASH="$CURRENT_HASH"
      echo
      echo "Changes detected. Waiting 5 seconds for saves to finish..."
      sleep 5

      if [[ -n "$(git status --porcelain)" ]]; then
        echo "Pulling latest main..."
        git pull --rebase origin main

        echo "Staging changes..."
        git add -A

        if ! git diff --cached --quiet; then
          MESSAGE="Nova autosave update $(date '+%Y-%m-%d %H:%M:%S')"
          echo "Committing: $MESSAGE"
          git commit -m "$MESSAGE"

          echo "Pushing to GitHub main..."
          git push origin main

          echo "Pushed. GitHub Actions will deploy to IONOS."
        fi
      fi
    fi
  fi

  sleep 3
done

