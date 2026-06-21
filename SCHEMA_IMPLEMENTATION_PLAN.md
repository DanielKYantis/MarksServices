# Schema Implementation Plan

## Current Repo Note

Schema is generated in `includes/config.php` and rendered in `includes/header.php`. Before changing schema, read the current repo version of both files.

## Business Entity

Base entity:
- `LocalBusiness`
- `HomeAndConstructionBusiness`

Service-specific nested or contextual types where appropriate:
- `Electrician`
- `Plumber`
- `Service`
- `OfferCatalog`

## Required Schema Principles

- Schema must describe visible page content.
- Do not include fake reviews, aggregateRating, awards, certifications, or unsupported credentials.
- Do not publish a storefront address if Mark's Services is operating as service-area only.
- Use `areaServed` for Sun City, Berry Creek, and Georgetown ZIP targets.
- Use service pages for specific service schema.
- Use `FAQPage` only if the page visibly displays the same questions/answers.

## Suggested Top-Level Fields To Evaluate

- `@context`
- `@type`
- `@id`
- `name`
- `legalName` only if verified
- `url`
- `telephone` only if verified
- `email` only if verified
- `description`
- `logo` only after final logo exists
- `image` only after approved image exists
- `areaServed`
- `makesOffer` / `hasOfferCatalog`
- `sameAs` only for verified listings/profiles
- `founder` or `employee` only if approved
- `openingHoursSpecification` only if verified

## Area Served Targets

Use place/postal-address objects or text consistently for:

- Sun City, Georgetown, TX 78633
- Berry Creek, Georgetown, TX 78628
- Georgetown, TX 78626
- Georgetown, TX 78627
- Williamson County, TX

## OfferCatalog Services

Include only approved services visible on the page. Recommended serviceType / OfferCatalog names:

- Handyman Services
- Plumbing Fixture Repair
- Faucet Repair and Replacement
- Sink Repair and Installation
- Toilet Repair
- Garbage Disposal Installation
- Dishwasher Installation
- Water Heater Installation
- Water Heater Replacement
- Water Softener Installation
- Whole-House Water Filter Installation
- Reverse Osmosis Filter Installation
- Light Fixture Installation
- Ceiling Fan Installation
- Switch and Outlet Replacement
- GFCI Outlet Replacement
- Video Doorbell Installation
- Security Camera Installation
- Smart Lock Installation
- EV Charger Coordination
- Grab Bar Installation
- Door Hardware Repair
- Cabinet Repair
- Trim Carpentry
- Drywall Repair
- Paint Touch-Up Repair
- Home Inspection Repairs
- Home Sale Punch List Repairs


## Validation Checklist

After implementation:

- View rendered page source.
- Confirm JSON-LD is valid JSON.
- Run Schema Markup Validator.
- Run Google Rich Results Test where applicable.
- Confirm visible page content matches schema.
- Confirm excluded services are not present except narrow approved overlaps such as drywall paint touch-ups and minor exterior maintenance.
- Confirm address visibility matches service-area policy.
