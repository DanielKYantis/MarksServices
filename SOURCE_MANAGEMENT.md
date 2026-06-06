# Source Management Rules

## What Goes In ChatGPT Project Sources

Use Project Sources for stable, slow-changing context:

- Project instructions
- Handoff notes
- Git/deployment rules
- Website data and service-area facts
- Source URLs
- SEO keyword matrix
- Service page plan
- Schema rules
- Brand/image rules
- TODO placeholders
- Current site audit notes

## What Does Not Belong In Permanent Project Sources

Do not permanently upload frequently edited live-code files as Project Sources:

- `index.php`
- `contact.php`
- `includes/*.php`
- `forms/*.php`
- `assets/*.css`
- `assets/*.js`
- `.github/workflows/*.yml`

Reason: these files will become stale. Codex should read/edit the current repo directly.

## Repo Source Of Truth

The Git repo is the source of truth for deployment and website changes.

Rules:

- Do not treat uploaded Project Sources as current live code.
- When code changes are needed, use Codex/local repo/GitHub workflow.
- Every website change must end as a Git commit pushed to `main`, unless explicitly requested otherwise.

## GitHub / Codex

Use GitHub/Codex for:

- Reading current repo files
- Editing live code
- Running lint/checks
- Creating commits
- Pushing to `main`
- Verifying GitHub Actions deployments

## Snapshot Exception

Only upload current repo files to Project Sources when intentionally freezing a dated snapshot for reference. Name it clearly, for example:

`repo_snapshot_2026-06-06_index_contact_config.zip`
