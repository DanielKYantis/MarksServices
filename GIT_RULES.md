# Git Rules - Mark's Services

## Branch / History

- Main branch: `main`
- Remote: `https://github.com/DanielKYantis/SunCityHomeRepair.git`
- Do not force-push `main`.
- Do not rewrite published history.
- Work from a clean tree.
- Keep changes small, reviewable, and scoped to the requested task.

## Before Editing

```bash
git status
git pull --ff-only
```

Stop if the tree is dirty unless the existing changes are intentionally part of the task.

## Before Commit

```bash
composer lint
git diff --check
git status
git diff --stat
git diff
```

Only commit after lint and whitespace checks pass.

## Commit Style

Use short, descriptive commit messages:

```bash
git commit -m "Update Sun City service-area SEO"
git commit -m "Refine LocalBusiness schema"
git commit -m "Improve quote form validation"
```

## Push / Deploy

Pushes to `main` trigger deployment of the migration codebase to IONOS through GitHub Actions. They do not update the current Wix production site while MarksServices.com DNS remains on Wix.

```bash
git push origin main
gh run list --branch main --limit 5
gh run watch <deploy-run-id> --exit-status
```

## Post-Deploy Verification

```bash
curl -fsSL https://www.marksservices.com | rg -n "Sun City|78633|Berry Creek|78628|Georgetown|78626|78627|areaServed"
```

Also verify:

- Page loads without PHP errors.
- Navigation works.
- Contact/quote form still renders.
- Canonical URL and metadata are correct.
- JSON-LD validates.
- Excluded services did not get introduced accidentally.

## Never Commit

- `.env`
- credentials
- API keys
- private home-office details
- local caches
- logs
- screenshots
- generated ZIPs
- temporary exports
- AI scratch files
- vendor or build artifacts unless deliberately required
