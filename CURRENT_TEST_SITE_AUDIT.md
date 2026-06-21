# Archived Migration Prototype Audit

Observed date: 2026-06-06. This file describes the PHP migration prototype, not the current Wix production site at https://www.marksservices.com.

## High-Level Finding

The current test site still appears to contain substantial stock construction-template content. It should be treated as a visual/layout starting point, not as approved Mark's Services content.

## Must Replace Immediately

### Header / Brand

Current issues:
- Brand appears as “Constructo” / “ConstructoPro.”
- Top contact uses placeholder `contact@example.com` and fake phone.
- Navigation includes generic template pages and dropdown examples.

Required:
- Replace with Mark's Services branding.
- Use verified phone/email only.
- Remove generic dropdown examples.
- Navigation should support SEO pages and quote/contact path.

Recommended nav:
- Home
- Services
  - Electrical
  - EV Chargers
  - Lighting & Security
  - Plumbing
  - Water Heaters
  - Water Softeners & Filtration
  - Handyman & Home Maintenance
- Service Areas
  - Sun City
  - Berry Creek
  - Georgetown
- About
- Contact / Quote

### Homepage Hero

Current issues:
- Headline: “Building Tomorrow's Landmarks Today.”
- Subheadline is lorem ipsum.
- Stats include generic construction metrics.
- Imagery appears construction-template oriented.

Required:
- Replace with local home-service positioning.
- Focus on Sun City / Berry Creek / Georgetown homeowners.
- Remove large construction, industrial, landmark, architecture, and commercial build language.

Candidate hero direction:
- “Reliable Home Repairs & Maintenance in Georgetown, Sun City & Berry Creek”
- “Electrical, plumbing, water treatment, lighting, security, EV charger, and handyman services at your home.”

### About Section

Current issues:
- Lorem ipsum.
- Generic “Building Excellence Since 1995.”
- Generic certification/partnership badges.
- “48 team members” appears unsupported.

Required:
- Replace with Mark Walbert/local trust copy.
- Add verified team/license facts only after verification.
- Avoid fake badges/unsupported certifications.

### Services Section

Current issues:
- Commercial Construction
- Residential Construction
- Industrial Construction
- Architectural Design
- Project Management
- Renovation & Remodeling

These are wrong for the project’s current scope.

Replace with:
- Electrical Repairs
- EV Charger Installation
- Lighting Installation & Upgrades
- Video Doorbells & Security Cameras
- Residential Plumbing
- Water Heaters
- Water Softeners & Whole-House Filtration
- Handyman & Home Maintenance
- Punch-List Repairs

### Projects Section

Current issues:
- Fake/stock projects in New York, Portland, Dallas, Boston, San Francisco, Denver.
- This does not support local Georgetown SEO and may undermine trust.

Required:
- Remove until real local projects/photos are approved.
- Replace with “Common Home Services” cards or “Recent Types of Work” without fake addresses/photos.
- Do not fabricate portfolio items.

### Testimonials

Current issues:
- Fake-sounding testimonials with unrelated corporate job titles.

Required:
- Remove until approved real testimonials exist.
- Do not create fake reviews or ratings.
- Add `REVIEWS_TESTIMONIALS_TODO.md` workflow first.

### Certifications / Trust

Current issues:
- “ISO 9001:2015,” “OSHA 30-Hour,” “LEED Certified,” “Premier Contractor Status,” “15+ awards,” “Zero Safety Incidents,” etc. appear unsupported.

Required:
- Remove all unsupported badges/claims.
- Replace with verified license/team facts only.
- Use “licensed trade partners” only if verified and accurate.

### Team Section

Current issues:
- Stock names and roles unrelated to Mark's Services.

Required:
- Replace with verified people:
  - Mark Walbert
  - Jim Bradford, M-38601, if verified/approved
  - Larry Kizer, TECL 20547, if verified/approved
- Do not invent bios, roles, portraits, or credentials.

### Quote Form

Current issues:
- Generic construction project options.
- Fake quote email/phone.
- Project timeline options are construction-oriented.

Required service-type options:
- Electrical repair
- EV charger
- Lighting
- Doorbell / security camera
- Smart security panel
- Plumbing repair
- Water heater
- Water softener / filtration
- Handyman / home maintenance
- Punch-list repairs
- Other approved home-service request

Suggested fields:
- Name
- Phone
- Email
- Service address ZIP or service area
- Service type
- Brief description
- Photos upload later if supported
- Preferred contact method
- Consent/anti-spam field

### Footer

Current issues:
- “MyWebsite” branding.
- Web design/development/marketing services.
- New York address.
- Fake phone/email.

Required:
- Mark's Services branding.
- Service-area statement, not public storefront.
- Verified phone/email only.
- Links to Services, Service Areas, About, Contact, Privacy, Terms.
- Remove unrelated web/graphic services.

## Missing Items To Gather Or Build

- Final logo source SVG/PNG
- Favicon / touch icon
- Mark Walbert approved reference photos
- Real service photos approved for web use
- Verified public phone and email
- Business hours / appointment policy
- Google Business Profile details
- Search Console property
- GA4 property
- sitemap.xml
- robots.txt
- Real reviews/testimonials with permission
- License verification screenshots or official links
- Confirmed insurance/bonding language, if used
- Service page copy for each approved service
- Service-area page copy for Sun City, Berry Creek, Georgetown
- Privacy/Terms content matching form data collection
- Quote form handling/privacy/spam rules

## First Rewrite Priority

1. Header/footer branding and fake contact cleanup.
2. Homepage hero and services replacement.
3. Remove fake projects/testimonials/certifications/team.
4. Add local service-area copy.
5. Add correct LocalBusiness schema.
6. Build quote form options around approved services.
7. Add sitemap/robots/canonical/OG cleanup.
