# Sun City Home Repair Project Handoff

Read this before changing the site.

## Current Site

- Repo: `/Users/dky/Projects/MarksServices`
- Branch: `main`
- Remote: `https://github.com/DanielKYantis/MarksServices.git`
- Production domain: `https://SunCityHomeRepair.com`
- Live test site: `https://SunCityHomeRepair.com`
- Deploy target: GitHub Actions workflow `Deploy to IONOS` runs on pushes to `main`.
- CI: GitHub Actions PHP lint workflow runs on pushes to `main`.
- Local check: run `composer lint` before committing.

## Deployment And Backups

- Pushes to `main` deploy the PHP site to IONOS.
- Deploy workflow builds a deploy directory with root `*.php`, `assets/`, `forms/`, and `includes/`.
- Root Markdown files are not deployed to the web root.
- Deploy workflow creates compressed backups and keeps the latest 10 archives in a hidden sibling directory on IONOS.
- Known backup change commit: `1bb47cc keep deploy backups`.

## Completed Changes From Existing Project

- Quote endpoint renamed from `forms/get-a-quote.php` to `forms/quote.php`.
- `AGENTS.md` and `CLAUDE.md` were removed.
- Atlas-inspired navigation was integrated:
  - `Services` uses the extended dropdown style.
  - `Explore` uses the megamenu style.
  - Commit: `c84aebb Integrate Atlas-style navigation menus`.
- Service-area SEO update was completed and deployed:
  - Commit: `bdeea06 Update service area SEO structure`.
  - Live site was verified after deploy.

## Source-of-Truth Rules

- Do not treat ChatGPT Project Sources as the editable website repo.
- Current PHP/CSS/JS files should be read from Git/Codex/local repo when making code changes.
- Project Sources should contain stable instructions, business facts, rules, URLs, TODO lists, and handoff notes.

## Current Important Files In Repo

Read from the repo before changing them:

- Shared config/schema helpers: `includes/config.php`
- Shared head/canonical/OG/schema output: `includes/header.php`
- Shared nav: `includes/nav.php`
- Shared footer/service-area copy: `includes/footer.php`
- Page metadata: `includes/pages.php`
- Homepage location/SEO content: `index.php`
- Contact service-area/map copy: `contact.php`
- Quote form endpoint: `forms/quote.php`
- Composer/lint config: `composer.json`
- GitHub workflows: `.github/workflows/`

## Location And SEO Rules

Target service areas:

- Sun City, Georgetown, TX `78633`
- Berry Creek, Georgetown, TX `78628`
- Georgetown, Williamson County, TX `78626` and `78627`

Primary SEO focus:

- Sun City, TX 78633

Secondary SEO focus:

- Berry Creek, TX 78628
- Georgetown, TX 78626 and 78627

## Schema Rules

- Schema is generated in `includes/config.php` and rendered in `includes/header.php`.
- JSON-LD should include appropriate local-service types:
  - `HomeAndConstructionBusiness`
  - `Electrician`
  - `Plumber`
  - `Service`
  - `OfferCatalog`
- `areaServed` / service-area references should include:
  - Sun City `78633`
  - Berry Creek `78628`
  - Georgetown `78626`
  - Georgetown `78627`
- Visible page content and JSON-LD must stay aligned.
- Do not add service schema for excluded services.

## Manual Verification

```bash
composer lint
git diff --check
php -l index.php
php -l contact.php
php -l includes/config.php
php -l includes/header.php
```

After deploy:

```bash
curl -fsSL https://SunCityHomeRepair.com | rg -n "Sun City|78633|Berry Creek|78628|Georgetown|78626|78627|areaServed"
```

Use Google Rich Results Test / Schema Markup Validator after schema changes.
