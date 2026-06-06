# Forms And Leads TODO

## Purpose

Make the quote/contact flow fit Sun City Home Repair instead of a generic construction template.

## Required Form Changes

- Remove generic construction options.
- Add approved service categories.
- Use verified phone/email.
- Confirm form endpoint is `forms/quote.php` if current repo still uses that route.
- Add spam protection consistent with site constraints.
- Add privacy/consent language if form stores/sends personal data.

## Suggested Service Type Options

- Electrical repair
- EV charger installation
- Lighting installation / upgrade
- Video doorbell
- Security camera
- Smart security panel
- Plumbing repair
- Water heater
- Water softener / filtration
- Handyman / home maintenance
- Punch-list repairs
- Other approved home-service request

## Suggested Fields

- Name
- Phone
- Email
- Service address ZIP / service area
- Service type
- Brief description
- Preferred contact method
- Best time to contact
- Consent checkbox if needed

## Rules

- Do not ask for unnecessary sensitive information.
- Do not expose form recipient emails in frontend code if avoidable.
- Do not store secrets in repo.
- Avoid fake success claims like guaranteed 24-hour response unless approved.
