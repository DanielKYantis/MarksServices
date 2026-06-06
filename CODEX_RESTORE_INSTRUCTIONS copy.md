# Codex Tooling Restore Instructions

Use this file if a future Codex chat does not have the same access or behavior that worked in this session.

## Goal

Restore a Codex Desktop session that can:

- Read and edit the local Mark's Services repo.
- Run shell commands without repeated approval prompts.
- Use GitHub CLI to inspect Actions, commit, and push.
- Trigger the GitHub-to-IONOS deployment workflow.
- Verify the live test site at `https://webtestkit.com/mark/`.
- Use browser or computer-control tooling for visual checks.

Do not store secrets in this file. Keep API keys, SSH keys, GitHub tokens, and IONOS credentials in the appropriate app/keychain/GitHub secrets only.

## Known Working Environment

- App used: Codex Desktop on macOS.
- Workspace path: `/Users/dky/Projects/MarksServices`
- Shell: `zsh`
- Repo remote: `https://github.com/DanielKYantis/MarksServices.git`
- Primary branch: `main`
- Live test site: `https://webtestkit.com/mark/`
- Deployment: GitHub Actions workflow `Deploy to IONOS`, triggered by pushes to `main`.
- GitHub CLI auth account: `DanielKYantis`
- GitHub CLI version seen working: `gh 2.91.0`
- PHP CLI seen working locally: PHP `8.5.5`
- Composer seen working locally: Composer `2.9.7`
- Deploy workflow uses PHP `8.4` in GitHub Actions.

Useful local binaries from the working session:

```bash
/opt/homebrew/bin/php
/opt/homebrew/bin/composer
/opt/homebrew/bin/gh
/usr/bin/git
/opt/homebrew/bin/node
/opt/homebrew/bin/npm
/Applications/Codex.app/Contents/Resources/rg
/usr/bin/curl
/usr/sbin/lsof
```

## Codex Session Settings To Request

When starting a future chat, ask for these capabilities/settings:

- Workspace: `/Users/dky/Projects/MarksServices`
- Shell: `zsh`
- Filesystem access: full access to the workspace, ideally `danger-full-access` if available.
- Network access: enabled.
- Approval mode: allow command execution without per-command approval when possible.
- Enabled plugins/connectors:
  - GitHub
  - Computer Use
  - Browser Use, if available
  - Build Web Apps, if available
- Ask Codex to read these two files first:
  - `PROJECT_HANDOFF.md`
  - `CODEX_RESTORE_INSTRUCTIONS.md`

Suggested first message for a new chat:

```text
We are working in /Users/dky/Projects/MarksServices. Please read PROJECT_HANDOFF.md and CODEX_RESTORE_INSTRUCTIONS.md first. I want you to use the same workflow as the prior session: edit locally, run checks, commit/push to main when I approve, watch GitHub Actions, and verify https://webtestkit.com/mark/.
```

## Verify Local Access

Run these from the repo root:

```bash
cd /Users/dky/Projects/MarksServices
pwd
git status -sb
git remote -v
git branch --show-current
composer lint
```

Expected:

- Current directory is `/Users/dky/Projects/MarksServices`.
- Branch is `main`.
- Remote points to `DanielKYantis/MarksServices`.
- `composer lint` reports no PHP syntax errors.

## Verify GitHub Access

Run:

```bash
gh --version
gh auth status
gh run list --branch main --limit 5
```

Expected:

- `gh auth status` shows logged in to `github.com` as `DanielKYantis`.
- Token scopes include `repo`.
- `gh run list` can see CI and `Deploy to IONOS` runs.

If GitHub auth is missing:

```bash
gh auth login
gh auth status
```

Use the account that owns or can push to `DanielKYantis/MarksServices`.

## Verify Deployment

The deploy workflow is `.github/workflows/deploy-ionos.yml`.

Important facts:

- Pushes to `main` deploy to IONOS.
- The deploy job creates a `deploy/` folder containing root `*.php`, `assets/`, `forms/`, and `includes/`.
- Root Markdown files are not deployed to the web root.
- Deploy backups are saved on IONOS and rotated to keep the latest 10 archives.

After pushing a commit:

```bash
gh run list --branch main --limit 5 --json databaseId,headSha,displayTitle,status,conclusion,workflowName,createdAt,url
gh run watch <deploy-run-id> --exit-status
```

Also check CI:

```bash
gh run view <ci-run-id> --json status,conclusion,url,jobs
```

## Verify The Live Site

Basic homepage check:

```bash
curl -fsSL https://webtestkit.com/mark/ | rg -n "Sun City|78633|Berry Creek Estates|78628|78626|areaServed|application/ld\\+json|canonical"
```

Expected:

- Sun City 78633 and Berry Creek Estates 78628 appear.
- `areaServed` appears in JSON-LD.
- `78626` should not appear.
- `Georgetown` should appear only when needed as accurate ZIP/map context for Sun City 78633.

Contact page check:

```bash
curl -fsSL https://webtestkit.com/mark/contact.php | rg -n "Service Area|Sun City|78633|Berry Creek Estates|78628|Client-location|78626|maps\\?q="
```

Expected:

- Service Area appears.
- Sun City 78633 and Berry Creek Estates 78628 appear.
- Client-location language appears.
- 78626 does not appear.

## Current Project Rules

- Do not market the business broadly as working in Georgetown. It is OK to identify Sun City `78633` as Sun City, Georgetown, TX / Williamson County when needed for accurate ZIP or map context.
- Do not use `78626`.
- Primary SEO focus is Sun City, TX `78633`.
- Secondary service-area focus is Berry Creek Estates `78628`.
- Mark lives in Georgetown, but the site should describe work at the client location.
- Mark does not do full remodeling, heater / AC / HVAC, or roofing work.
- Avoid broad service-area language:
  - Do not use "Central Texas".
  - Do not use "nearby communities".
  - Do not use "Georgetown property owners".
- Contact/location copy should say service area or client-location appointments, not workplace.
- Visible page content and JSON-LD schema must stay aligned.

## Current Important Files

- `PROJECT_HANDOFF.md`: project state and prior work.
- `CODEX_RESTORE_INSTRUCTIONS.md`: this restore guide.
- `includes/config.php`: business constants and JSON-LD schema helpers.
- `includes/header.php`: canonical, Open Graph, Twitter card, and JSON-LD output.
- `includes/nav.php`: shared navigation and Atlas-style dropdown/megamenu.
- `includes/footer.php`: shared footer and service-area copy.
- `includes/pages.php`: page title, description, keyword metadata.
- `index.php`: homepage content.
- `contact.php`: contact/service-area/map copy.
- `.github/workflows/deploy-ionos.yml`: deploy and backup workflow.

## Current Important Commits

- `71ebbd4`: quote forms and site placeholder fixes.
- `1bb47cc`: deploy backups, keep 10.
- `c84aebb`: Atlas-style navigation menus.
- `bdeea06`: Berry Creek/Sun City SEO structure.

## Standard Work Pattern

For content/code changes:

1. Inspect current files with `rg`, `sed`, and `git status -sb`.
2. Edit with `apply_patch`.
3. Run:

```bash
composer lint
git diff --check
```

4. If the change affects frontend behavior or layout, run a browser/visual check.
5. Commit with a concise message.
6. Push to `main` only when approved or when the user clearly asks to send it to GitHub.
7. Watch deploy and CI.
8. Verify the live test site with `curl` and, when needed, browser inspection.

## Browser/Visual Checks

In the prior working session:

- Computer Use could inspect Chrome Dev visually.
- Headless Chrome Dev could be driven through the Chrome DevTools Protocol.
- Chrome Dev executable path:

```bash
/Applications/Google Chrome Dev.app/Contents/MacOS/Google Chrome Dev
```

There was no standard Google Chrome app at:

```bash
/Applications/Google Chrome.app/Contents/MacOS/Google Chrome
```

If a Playwright wrapper fails because it expects standard Chrome, use Chrome Dev or Computer Use instead.

## Notes About Documentation Files

`PROJECT_HANDOFF.md` and `CODEX_RESTORE_INSTRUCTIONS.md` are root Markdown files. The deploy workflow does not copy root Markdown files into the live site, so keeping these files in the repo should not expose them at `webtestkit.com/mark/`.

If these docs are committed and pushed, GitHub Actions will still run and the deploy workflow will still create one backup archive, even though the live web files do not change.
