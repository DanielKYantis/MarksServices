# Sitemap / Robots TODO

## Purpose

Create crawlable production sitemap and safe robots.txt for MarksServices.com.

## Sitemap Rules

- Include only canonical production URLs.
- Do not include retired domains, staging URLs, duplicate Wix URLs, or noncanonical parameters.
- Do not include duplicate, parameter, form-handler, or thank-you-only URLs unless intentionally indexable.
- Update sitemap when page map changes.
- Submit sitemap in Search Console.

## Candidate Sitemap URLs

Replace with final actual URLs:

- https://www.marksservices.com/
- https://www.marksservices.com/services/
- https://www.marksservices.com/electrical/
- https://www.marksservices.com/ev-chargers/
- https://www.marksservices.com/lighting-security/
- https://www.marksservices.com/plumbing/
- https://www.marksservices.com/water-heaters/
- https://www.marksservices.com/water-softeners-filtration/
- https://www.marksservices.com/handyman-home-maintenance/
- https://www.marksservices.com/service-areas/
- https://www.marksservices.com/sun-city-tx/
- https://www.marksservices.com/berry-creek-tx/
- https://www.marksservices.com/georgetown-tx/
- https://www.marksservices.com/about/
- https://www.marksservices.com/contact/
- https://www.marksservices.com/privacy/
- https://www.marksservices.com/terms/

## Robots.txt Draft Intent

Basic production intent:

```txt
User-agent: *
Disallow:

Sitemap: https://www.marksservices.com/sitemap.xml
```

Do not block assets needed for rendering.

## Official Sources

- Build sitemap: https://developers.google.com/search/docs/crawling-indexing/sitemaps/build-sitemap
- Create robots.txt: https://developers.google.com/search/docs/crawling-indexing/robots/create-robots-txt
