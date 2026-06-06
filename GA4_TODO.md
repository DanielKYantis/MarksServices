# GA4 TODO

## Purpose

Set up Google Analytics 4 for website measurement without disrupting page performance or privacy/legal copy.

## Tasks

- Create/confirm GA4 property.
- Create web data stream for `https://SunCityHomeRepair.com`.
- Install measurement tag once, ideally through shared header/config.
- Exclude test/staging if appropriate.
- Track key events:
  - quote form submit
  - contact form submit
  - phone link click
  - email link click
  - service page view
  - service-area page view
- Confirm privacy policy discloses analytics use if tracking is installed.

## Rules

- Do not duplicate GA tags.
- Do not add unrelated ad/remarketing scripts unless requested.
- Keep performance impact low.
- Keep implementation centralized.

## Data To Gather

- Measurement ID
- Property name
- Admin access details, not stored in repo
- Consent/privacy requirements
- Events to mark as conversions

## Official Source

- GA4 setup: https://support.google.com/analytics/answer/9304153
