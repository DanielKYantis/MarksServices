# Sitemap / Robots TODO

## Purpose

Create crawlable production sitemap and safe robots.txt for SunCityHomeRepair.com.

## Sitemap Rules

- Include only canonical production URLs.
- Do not include test URLs from `SunCityHomeRepair.com`.
- Do not include duplicate, parameter, form-handler, or thank-you-only URLs unless intentionally indexable.
- Update sitemap when page map changes.
- Submit sitemap in Search Console.

## Candidate Sitemap URLs

Replace with final actual URLs:

- https://SunCityHomeRepair.com/
- https://SunCityHomeRepair.com/services/
- https://SunCityHomeRepair.com/electrical/
- https://SunCityHomeRepair.com/ev-chargers/
- https://SunCityHomeRepair.com/lighting-security/
- https://SunCityHomeRepair.com/plumbing/
- https://SunCityHomeRepair.com/water-heaters/
- https://SunCityHomeRepair.com/water-softeners-filtration/
- https://SunCityHomeRepair.com/handyman-home-maintenance/
- https://SunCityHomeRepair.com/service-areas/
- https://SunCityHomeRepair.com/sun-city-tx/
- https://SunCityHomeRepair.com/berry-creek-tx/
- https://SunCityHomeRepair.com/georgetown-tx/
- https://SunCityHomeRepair.com/about/
- https://SunCityHomeRepair.com/contact/
- https://SunCityHomeRepair.com/privacy/
- https://SunCityHomeRepair.com/terms/

## Robots.txt Draft Intent

Basic production intent:

```txt
User-agent: *
Disallow:

Sitemap: https://SunCityHomeRepair.com/sitemap.xml
```

Do not block assets needed for rendering.

## Official Sources

- Build sitemap: https://developers.google.com/search/docs/crawling-indexing/sitemaps/build-sitemap
- Create robots.txt: https://developers.google.com/search/docs/crawling-indexing/robots/create-robots-txt
