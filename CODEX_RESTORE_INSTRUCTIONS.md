Codex Tooling Restore Instructions

Use this file if a future Codex Desktop chat does not have the same local repo access, shell behavior, GitHub access, deployment workflow access, or browser/computer-control behavior that worked previously.

This file is a restore/runbook document only. Do not store secrets here. Keep API keys, SSH keys, GitHub tokens, hosting credentials, FTP/SFTP credentials, and IONOS credentials in the appropriate app, keychain, local environment, or GitHub secrets.

Goal

Restore a Codex Desktop session that can:

- Read and edit the local Mark's Services repo.
- Run shell commands from the repo root.
- Use Git and GitHub CLI to inspect status, commits, branches, Actions, and deployment runs.
- Commit and push approved changes to GitHub.
- Maintain the GitHub-to-IONOS migration workflow without treating it as the current Wix production deployment.
- Verify the live website at https://www.marksservices.com.
- Use browser, screenshot, or computer-control tooling for visual checks when needed.

Current Project Identity

- Business/site name: Mark's Services
- Production site: https://www.marksservices.com
- Primary SEO focus: Sun City, Georgetown, TX 78633
- Secondary service area: Berry Creek / Berry Creek Estates, Georgetown, TX 78628
- Supporting local context: Georgetown, Williamson County, TX
- Business model: client-location home repair and handyman services only
- No work is done at a home office.

Known Working Environment

Update these paths if the local repo folder or GitHub repo name changes.

- App: Codex Desktop on macOS
- Workspace path: /Users/dky/Projects/SunCityHomeRepair
- Shell: zsh
- Primary branch: main
- Production site: https://www.marksservices.com
- Current production platform: Wix
- Migration deployment: GitHub Actions workflow Deploy to IONOS, triggered by pushes to main
- GitHub CLI auth account: DanielKYantis
- Deploy workflow uses PHP 8.4 in GitHub Actions

Useful local binaries from prior working sessions:

/opt/homebrew/bin/php
/opt/homebrew/bin/composer
/opt/homebrew/bin/gh
/usr/bin/git
/opt/homebrew/bin/node
/opt/homebrew/bin/npm
/Applications/Codex.app/Contents/Resources/rg
/usr/bin/curl
/usr/sbin/lsof

Codex Session Settings To Request

When starting a future Codex chat, request these capabilities/settings:

- Workspace: /Users/dky/Projects/SunCityHomeRepair
- Shell: zsh
- Filesystem access: full access to the workspace
- Network access: enabled
- Approval mode: allow command execution without repeated per-command approval when possible
- Enabled plugins/connectors when available:
  - GitHub
  - Computer Use
  - Browser Use
  - Build Web Apps

Ask Codex to read these files first:

- PROJECT_HANDOFF.md
- CODEX_RESTORE_INSTRUCTIONS.md
- GIT_RULES.md
- WEBSITE_DATA.md
- SERVICE_TAXONOMY_FROM_CALENDAR.md

Suggested first message for a new Codex chat:

We are working in /Users/dky/Projects/SunCityHomeRepair on the Mark's Services Wix SEO and future IONOS migration. Please read PROJECT_HANDOFF.md, CODEX_RESTORE_INSTRUCTIONS.md, GIT_RULES.md, WEBSITE_DATA.md, and SERVICE_TAXONOMY_FROM_CALENDAR.md first. Treat https://www.marksservices.com as Wix production and this repository as migration code until an approved cutover.

Verify Local Access

Run these from the repo root:

cd /Users/dky/Projects/SunCityHomeRepair
pwd
git status -sb
git remote -v
git branch --show-current
composer lint

Expected:

- Current directory is the local repo root.
- Branch is main, unless intentionally working on another branch.
- Remote points to the active Mark's Services repo.
- composer lint reports no PHP syntax errors.

If the repo has been renamed locally, update this file and PROJECT_HANDOFF.md with the current path.

Verify GitHub Access

Run:

gh --version
gh auth status
gh run list --branch main --limit 5

Expected:

- gh auth status shows logged in to github.com as the correct GitHub account.
- Token scopes include repo access.
- gh run list can see CI and Deploy to IONOS runs.

If GitHub auth is missing:

gh auth login
gh auth status

Use the account that owns or can push to the active Mark's Services repository.

Verify Deployment Workflow

The migration deploy workflow is expected at:

.github/workflows/deploy-ionos.yml

Important facts:

- Pushes to main deploy the migration code to IONOS, not the current Wix production site.
- The deploy job should create a deploy directory containing the public website files.
- Root Markdown files should not be deployed to the web root.
- Deploy backups should be saved on IONOS and rotated according to the workflow rule.

After pushing a commit:

gh run list --branch main --limit 5 --json databaseId,headSha,displayTitle,status,conclusion,workflowName,createdAt,url
gh run watch <deploy-run-id> --exit-status

Also check CI when available:

gh run view <ci-run-id> --json status,conclusion,url,jobs

Verify The Live Site

Basic homepage check:

curl -fsSL https://www.marksservices.com/ | rg -n "Sun City|78633|Berry Creek|78628|Home Repair|Handyman|areaServed|application/ld\\+json|canonical"

Expected:

- Sun City appears.
- 78633 appears where appropriate.
- Berry Creek or Berry Creek Estates appears where appropriate.
- 78628 appears where appropriate.
- Mark's Services appears.
- areaServed appears in JSON-LD.
- Canonical URL points to https://www.marksservices.com/.

Contact page check, if a contact page exists:

curl -fsSL https://www.marksservices.com/contact.php | rg -n "Service Area|Sun City|78633|Berry Creek|78628|Client-location|appointment|maps\\?q=|areaServed"

Expected:

- Service-area language appears.
- Client-location appointment language appears.
- Sun City 78633 appears where appropriate.
- Berry Creek / Berry Creek Estates 78628 appears where appropriate.
- No home-office workplace language appears.

Current Project Rules

- Primary website goal: create and maintain https://www.marksservices.com.
- SEO and structured data are primary goals.
- Main service-area target is Sun City, Georgetown, TX 78633.
- Secondary service-area target is Berry Creek / Berry Creek Estates, Georgetown, TX 78628.
- Georgetown and Williamson County may be used only when accurate context is needed.
- Do not describe the business as operating from a home office.
- Do not invite customers to a business address.
- Use client-location, service-area, or appointment-based wording.
- Visible page content and JSON-LD schema must stay aligned.
- Keep claims practical and accurate for handyman/home repair work.
- Use careful wording for plumbing, electrical, gas, water heater, EV charger, and permit-sensitive work:
  - “Minor repairs and fixture installations”
  - “Licensed trades coordinated when required”
  - “Where permitted”
  - “As allowed by local code and licensing requirements”

Approved Service Categories

Use the calendar-derived taxonomy as the primary service source, filtered through the current service-boundary rules.

Primary website categories:

- Handyman services in Sun City Georgetown
- Faucet, sink, toilet, and drain repairs
- Water heater, water softener, and filter services
- Light, fan, switch, and outlet services
- Door, lock, and hardware services
- Trim, cabinet, and small carpentry repairs
- Drywall, paint touch-up, and wall repair
- Grab bars, towel bars, and home safety installs
- Minor exterior maintenance and repair
- Home sale punch lists and inspection repairs

Permitted service examples:

- Faucet repair and replacement
- Kitchen faucet installation
- Bathroom faucet installation
- Sink repair and installation
- Garbage disposal replacement
- Dishwasher installation assistance
- Ice maker water line assistance
- Toilet repair
- Toilet fill valve and tank kit replacement
- Toilet wax ring replacement
- Bidet installation and leak repair
- Minor plumbing leak repair
- Water heater flushing
- Water heater replacement coordination where licensing/permit rules require
- Water softener installation and troubleshooting
- Whole-house water filter installation
- Reverse osmosis filter installation
- Light fixture installation
- LED light replacement
- Pendant light installation
- Wall sconce installation
- Ceiling fan installation
- Dimmer switch installation
- Light switch replacement
- Outlet replacement
- GFCI outlet replacement
- Doorbell installation and repair
- Smoke detector installation
- Smart lock installation
- EV charger coordination where licensing/permit rules require
- Storm door installation
- Sliding door repair
- Door hardware replacement
- Cabinet door repair
- Garage door opener installation
- Baseboard and shoe molding installation
- Trim replacement
- Interior millwork repair
- Cabinet repair
- Vanity installation
- Closet build-outs
- Shelf installation and repair
- Small custom wood repairs
- Drywall patching
- Sheetrock repair
- Wall texture repair
- Paint touch-ups
- Water-damage wall repair
- Grab bar installation
- Bathroom safety hardware
- Towel bar installation
- Curtain rod installation
- Mirror hanging
- Blind installation
- TV mounting
- High-reach light and smoke detector replacement
- Gutter repair
- Downspout repair
- Fascia repair
- Siding repair
- Exterior rot repair
- Mailbox repair
- Bird entry prevention
- Squirrel damage repair
- Exterior caulking and sealing
- Dryer vent assistance
- Home inspection repairs
- Home sale punch-list repairs

Excluded Or Restricted Services

Do not market or create primary service pages for:

- Decks
- Fencing or fence construction
- Full painting contractor services
- Roofing
- HVAC
- Air conditioning units
- Furnaces
- Ductwork
- Full remodeling
- Large construction projects

Use caution with:

- Gas work
- Major electrical work
- Breaker/panel work
- EV charger installation
- Water heater replacement
- Structural repairs
- Permit-required work
- Licensed plumbing or electrical work

Use phrasing such as:

Minor repairs and fixture installations; licensed trades coordinated when required.

Recommended Website Landing Pages

Use these as SEO landing-page targets unless the current site structure requires different slugs:

/services/handyman-services-sun-city-georgetown/
/services/water-softener-installation-georgetown-tx/
/services/water-heater-installation-georgetown-tx/
/services/faucet-sink-toilet-repair-georgetown-tx/
/services/garbage-disposal-installation-georgetown-tx/
/services/light-fan-switch-installation-georgetown-tx/
/services/grab-bar-installation-sun-city-georgetown/
/services/drywall-paint-repair-georgetown-tx/
/services/door-lock-hardware-repair-georgetown-tx/
/services/cabinet-trim-carpentry-georgetown-tx/
/services/home-inspection-repairs-georgetown-tx/
/services/home-sale-punch-list-georgetown-tx/

Preferred homepage H1:

Handyman Services in Sun City Georgetown, TX

Preferred short service intro:

Mark's Services provides reliable handyman repairs and small home improvement services for homeowners in Sun City Georgetown and nearby Berry Creek. Services include plumbing fixture repairs, water heater and softener work, light electrical fixture installs, grab bars, doors, locks, drywall, paint touch-ups, trim, cabinets, and home inspection punch lists.

Structured Data Rules

Recommended structured-data types:

- LocalBusiness
- HomeAndConstructionBusiness
- Service
- OfferCatalog
- FAQPage
- BreadcrumbList

Recommended serviceType values:

- Handyman Services
- Plumbing Fixture Repair
- Water Heater Service
- Water Softener Service
- Water Filter Installation
- Light Fixture Installation
- Ceiling Fan Installation
- Grab Bar Installation
- Drywall Repair
- Door Hardware Repair
- Cabinet Repair
- Trim Carpentry
- Home Inspection Repairs
- Home Sale Punch List Repairs

Recommended areaServed values:

- Sun City, Georgetown, TX
- Georgetown, TX 78633
- Berry Creek, Georgetown, TX 78628
- Williamson County, TX

Rules:

- Visible service copy and JSON-LD services must match.
- Do not list excluded services in schema.
- Do not imply customers visit a home office.
- Do not publish a home address unless intentionally approved.
- Do not invent license numbers, certifications, testimonials, reviews, or service guarantees.

Do Not Publish From Calendar Data

Do not publish or infer:

- Customer names
- Phone numbers
- Addresses
- Door codes
- Private notes
- Prices unless intentionally standardized
- Anything implying licensed plumbing, electrical, HVAC, or gas work unless properly verified for that scope

Calendar-derived services may be used only as normalized, anonymous service categories.

Current Important Files

- PROJECT_HANDOFF.md: current project state and prior work.
- CODEX_RESTORE_INSTRUCTIONS.md: this restore guide.
- GIT_RULES.md: commit, branch, push, and deploy rules.
- WEBSITE_DATA.md: business facts, service area, service boundaries, and SEO data.
- SERVICE_TAXONOMY_FROM_CALENDAR.md: normalized service taxonomy from calendar entries.
- SERVICE_PAGE_PLAN.md: SEO landing-page plan.
- SEO_KEYWORD_MATRIX.md: service and location keyword plan.
- SCHEMA_IMPLEMENTATION_PLAN.md: structured-data plan.
- includes/config.php: business constants and JSON-LD schema helpers.
- includes/header.php: canonical, Open Graph, Twitter card, and JSON-LD output.
- includes/nav.php: shared navigation.
- includes/footer.php: shared footer and service-area copy.
- includes/pages.php: page title, description, keyword metadata.
- index.php: homepage content.
- contact.php: contact/service-area/map copy.
- .github/workflows/deploy-ionos.yml: deploy and backup workflow.

Standard Work Pattern

For content/code changes:

1. Inspect current files with rg, sed, and git status -sb.
2. Confirm current project name/domain references before editing.
3. Edit with apply_patch or the safest available file-editing method.
4. Run:

composer lint
git diff --check

5. If the change affects frontend behavior or layout, run a browser/visual check.
6. Show the relevant diff summary.
7. Commit with a concise message only when requested or approved.
8. Push to main only when approved or when the user clearly asks to deploy.
9. Watch deploy and CI.
10. Verify the live site with curl and, when needed, browser inspection.

Browser/Visual Checks

In prior working sessions:

- Computer Use could inspect Chrome Dev visually.
- Headless Chrome Dev could be driven through the Chrome DevTools Protocol.
- Chrome Dev executable path:

/Applications/Google Chrome Dev.app/Contents/MacOS/Google Chrome Dev

There was no standard Google Chrome app at:

/Applications/Google Chrome.app/Contents/MacOS/Google Chrome

If a Playwright wrapper fails because it expects standard Chrome, use Chrome Dev or Computer Use instead.

Documentation Files

Root Markdown files such as these are for project operation and should not be deployed publicly:

- PROJECT_HANDOFF.md
- CODEX_RESTORE_INSTRUCTIONS.md
- GIT_RULES.md
- WEBSITE_DATA.md

The deploy workflow should exclude root Markdown files from the live web root. Confirm this in .github/workflows/deploy-ionos.yml if deployment behavior changes.

If these docs are committed and pushed, GitHub Actions may still run and the deploy workflow may still create a backup archive, even if live web files do not change.
