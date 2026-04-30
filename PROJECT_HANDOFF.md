# Mark's Services Project Handoff

This file is for future Codex chats. Read it first before changing the site.

## Current Site

- Repo: `/Users/dky/Projects/MarksServices`
- Branch: `main`
- Remote: `https://github.com/DanielKYantis/MarksServices.git`
- Live test site: `https://webtestkit.com/mark/`
- Deploy target: GitHub Actions workflow `Deploy to IONOS` runs on pushes to `main`.
- CI: GitHub Actions PHP lint workflow runs on pushes to `main`.
- Local check: run `composer lint` before committing.

## Deployment And Backups

- Pushes to `main` deploy the PHP site to IONOS.
- Deploy workflow builds a deploy directory with root `*.php`, `assets/`, `forms/`, and `includes/`.
- Root Markdown files are not deployed to the web root.
- Deploy workflow creates compressed backups and keeps the latest 10 archives in a hidden sibling directory on IONOS.
- Backup change commit: `1bb47cc keep deploy backups`.

## Completed Changes

- Quote endpoint was renamed from `forms/get-a-quote.php` to `forms/quote.php`.
- `AGENTS.md` and `CLAUDE.md` were removed.
- Atlas-inspired navigation was integrated:
  - `Services` uses the extended dropdown style.
  - `Explore` uses the megamenu style.
  - Commit: `c84aebb Integrate Atlas-style navigation menus`.
- Service-area SEO update was completed and deployed:
  - Commit: `bdeea06 Update service area SEO structure`.
  - Live site was verified after deploy.

## Location And SEO Rules

- Do not market the business broadly as working in Georgetown. It is OK to identify Sun City `78633` as Sun City, Georgetown, TX / Williamson County when needed for accurate ZIP or map context.
- Do not use `78626`.
- Primary SEO focus is **Sun City, TX 78633**.
- Secondary service-area focus is **Berry Creek Estates 78628**.
- Mark lives in Georgetown, but the site should describe client-location service work only.
- Avoid broad phrases like "Central Texas", "nearby communities", or "Georgetown property owners".
- Contact/location copy should say service area or client-location appointments, not workplace.
- Current schema is generated in `includes/config.php` and rendered in `includes/header.php`.
- JSON-LD includes:
  - `HomeAndConstructionBusiness`, `Electrician`, and `Plumber`
  - Sun City `PostalAddress` with ZIP `78633`
  - Berry Creek Estates `PostalAddress` with ZIP `78628`
  - `areaServed` for Sun City and Berry Creek Estates
  - `OfferCatalog` for electrical, plumbing, handyman/home repair, water softener, and maintenance/punch lists
- Visible page content and JSON-LD must stay aligned.
- Mark does not do full remodeling, heater / AC / HVAC, or roofing work.

## Current Important Files

- Shared config/schema helpers: `includes/config.php`
- Shared head/canonical/OG/schema output: `includes/header.php`
- Shared nav: `includes/nav.php`
- Shared footer/service-area copy: `includes/footer.php`
- Page metadata: `includes/pages.php`
- Homepage location/SEO content: `index.php`
- Contact service-area/map copy: `contact.php`

## Verification Pattern

Before pushing meaningful changes:

```bash
composer lint
git diff --check
```

After pushing:

```bash
gh run list --branch main --limit 5
gh run watch <deploy-run-id> --exit-status
curl -fsSL https://webtestkit.com/mark/ | rg -n "Sun City|78633|Berry Creek Estates|78628|78626|areaServed"
```

The current expected live result has Sun City 78633 and Berry Creek Estates 78628, with no 78626 matches. Georgetown may appear only as accurate ZIP/map context for Sun City 78633.
