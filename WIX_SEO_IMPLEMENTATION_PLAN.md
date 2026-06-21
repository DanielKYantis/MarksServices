# MarksServices.com Wix SEO Implementation Plan

Production site: https://www.marksservices.com  
Platform: Wix  
Primary market: Sun City, Georgetown, Williamson County, TX 78633  
Secondary market: Berry Creek, Georgetown, Williamson County, TX 78628  
Supporting market: Georgetown, Williamson County, TX 78626 and 78627

## Current Live-Site Baseline

Verified on 2026-06-21:

- Wix sitemap exposes only `/` and `/our-services`.
- Homepage title is `HOME | Mark's Services` and has no meta description.
- Services title is `OUR SERVICES | Mark's Services` and has no meta description.
- Homepage uses multiple generic H1 elements instead of one descriptive page H1.
- Visible copy still emphasizes remodeling, commercial work, the Austin area, painting, and 24/7 contact language.
- Current LocalBusiness JSON-LD publishes a street address even though the business is client-location/service-area only.
- Current navigation links repeatedly point to the homepage instead of distinct crawlable sections or pages.

## Immediate Wix Corrections

### Homepage `/`

- SEO title: `Handyman Services Sun City Georgetown | Mark's Services`
- Meta description: `Handyman repairs, plumbing fixtures, electrical devices, maintenance, and punch-list help for Sun City 78633 and Berry Creek 78628 homeowners.`
- Canonical: `https://www.marksservices.com/`
- One H1: `Handyman Services in Sun City Georgetown, TX`
- Hero support copy: `Mark's Services provides practical home repairs and maintenance at client locations in Sun City, Berry Creek, and Georgetown.`
- Primary CTA: `Request a Quote`
- Secondary CTA: `Call or Text 512-549-0322`

Remove or replace:

- `Remodeling and Facility Repair`
- `Specializing in Commercial`
- `serving the Austin area`
- `CONTACT US 24/7`
- Painting as a primary service
- Any implication of a public office or customer-facing address

### Services `/our-services`

- Preserve the existing URL to retain any accumulated search equity.
- SEO title: `Home Repair Services Sun City & Berry Creek | Mark's Services`
- Meta description: `Explore handyman, plumbing fixture, electrical device, water-system, grab-bar, door, drywall, and punch-list services in Georgetown, Texas.`
- Canonical: `https://www.marksservices.com/our-services`
- One H1: `Home Repair Services for Sun City and Berry Creek`
- Add short, crawlable descriptions for every approved service group.
- Link each priority service group to its dedicated page as those pages are published.

## Priority Location Pages

Create these as original, useful pages rather than duplicated city-name swaps:

1. `/sun-city-georgetown-tx`
   - Title: `Sun City Georgetown Handyman Services | Mark's Services`
   - H1: `Handyman Services for Sun City Georgetown Homeowners`
   - Focus: 78633 home maintenance, grab bars, lighting, plumbing fixtures, water systems, doors, locks, and punch lists.
   - Caution: confirm HOA, permit, utility, and manufacturer requirements for visible exterior or regulated work.

2. `/berry-creek-georgetown-tx`
   - Title: `Berry Creek Georgetown Home Repair | Mark's Services`
   - H1: `Home Repair Services in Berry Creek, Georgetown`
   - Focus: 78628 repairs, maintenance, fixtures, water systems, doors, drywall, and inspection punch lists.
   - Do not imply HOA endorsement or uniform Berry Creek rules.

3. `/georgetown-tx-handyman-services`
   - Title: `Georgetown TX Handyman Services | Mark's Services`
   - H1: `Handyman and Home Repair Services in Georgetown, TX`
   - Focus: Williamson County and ZIP codes 78626 and 78627, with internal links to Sun City and Berry Creek.

## Priority Service Pages

Publish in this order, based on local intent and approved scope:

1. `/handyman-services-sun-city-georgetown`
2. `/plumbing-fixture-repair-georgetown-tx`
3. `/water-softener-filter-service-georgetown-tx`
4. `/light-fan-switch-outlet-services-georgetown-tx`
5. `/grab-bar-installation-sun-city-georgetown`
6. `/door-lock-hardware-repair-georgetown-tx`
7. `/drywall-wall-repair-georgetown-tx`
8. `/home-inspection-punch-list-repairs-georgetown-tx`

Each page needs:

- One clear H1
- Unique title and 120–160 character meta description
- Canonical URL
- Useful service explanation and approved task list
- Local service-area section
- Relevant internal links
- Quote CTA
- Visible FAQ only when it answers real homeowner questions
- Matching Service schema only for services visibly described on the page

## Structured Data

Use a single consistent business entity:

- Public name: `Mark's Services`
- URL: `https://www.marksservices.com/`
- Phone: `+1-512-549-0322`
- Email: `office@marksservices.com`
- Verified plumbing credential approved for visible copy: `James Pote (Jim) Bradford, Responsible Master Plumber M-38601`
- Verified electrical credential approved for visible copy: `Larry Kizer, Electrical Contractor TECL 20547`
- Verified experience statement approved for visible copy: `Mark Walbert, Handyman & Home Repair Expert with 25+ years of contractor and home-repair experience, including 20 years previously licensed in electrical and plumbing. Those licenses are expired.` Never imply Mark currently holds either license; current regulated work must reference the verified current license holders.
- Types as appropriate: `LocalBusiness`, `HomeAndConstructionBusiness`, `Electrician`, `Plumber`
- Do not publish a street address or imply a storefront.
- Use `areaServed` for:
  - Sun City, Georgetown, Williamson County, TX 78633
  - Berry Creek, Georgetown, Williamson County, TX 78628
  - Georgetown, TX 78626
  - Georgetown, TX 78627
- Use `OfferCatalog` and `Service` only for approved services visible on the page.
- Use `FAQPage` only when the identical questions and answers are visible.
- Do not add ratings, reviews, guarantees, hours, legal name, insurance, or other license claims unless independently verified and approved.

In Wix, check Business Info and SEO settings for the source of the currently injected street-address schema. Configure the site as a service-area business and remove the public customer-location address from structured data.

## On-Page and Technical Checklist

- Use one descriptive H1 per page and logical H2/H3 hierarchy.
- Give every important image a specific, natural alt description.
- Do not use stock portraits as images of Mark Walbert, Larry Kizer, or James Pote (Jim) Bradford; use verified portraits or neutral branding.
- Use descriptive internal anchor text; avoid repeated `Learn More` links without context.
- Keep navigation links crawlable and pointed at real pages.
- Confirm one canonical hostname: `https://www.marksservices.com`.
- Keep robots.txt crawlable and submit the Wix sitemap in Search Console.
- Connect or verify Google Search Console for the `marksservices.com` domain property.
- Connect GA4 and record quote submissions, phone clicks, email clicks, and CTA clicks.
- Keep visible business information consistent with the Google Business Profile.
- Use service-area settings in Google Business Profile; do not expose a private home address.
- Review mobile layout, Core Web Vitals, broken links, and form delivery after each publication batch.

## Content Boundaries

Do not target roofing, HVAC, decks, fence contracting, full painting, full remodeling, large construction, commercial construction, architecture/design/build, or unverified gas work. Use cautious licensing language for plumbing, electrical, water-heater, EV-charger, and permit-sensitive tasks.

## Future Wix-to-IONOS Migration

- Keep `MarksServices.com`; do not introduce a replacement brand or domain.
- Crawl and export every Wix URL, title, description, heading, image, and canonical before cutover.
- Preserve `/` and `/our-services` exactly or provide tested one-hop 301 redirects.
- Build a complete old-to-new redirect map before changing DNS.
- Validate forms, analytics, schema, sitemap, robots, canonicals, mobile rendering, and 404 behavior on staging.
- Take a full Wix content/settings export and DNS record backup.
- Lower DNS TTL only when the tested cutover is approved.
- After cutover, submit the new sitemap, inspect priority URLs in Search Console, and monitor 404s, redirects, coverage, rankings, and leads.

## Completion Evidence

The Wix SEO phase is complete only when:

- All published pages have unique titles, descriptions, canonicals, and one useful H1.
- Sun City 78633, Berry Creek 78628, and Georgetown 78626/78627 have substantive landing pages.
- Approved priority services have substantive service pages and internal links.
- Visible copy and JSON-LD agree.
- No public street address, excluded service marketing, unsupported 24/7 claim, or unverified claim remains.
- Sitemap, Search Console, analytics events, mobile rendering, forms, and crawlability are verified.
