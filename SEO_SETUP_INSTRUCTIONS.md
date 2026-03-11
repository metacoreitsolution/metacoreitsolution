# SEO Technical Setup Instructions

This document outlines the technical SEO improvements made and the steps you need to complete.

## Completed Improvements

### 1. robots.txt
- Created `robots.txt` in the site root
- Allows all crawlers
- References sitemap at `https://metacortexitsolution.com/sitemap.xml`

### 2. XML Sitemap
- Sitemap accessible at `/sitemap.xml` (submit this URL in Google Search Console)
- Updated URLs to use clean structure (e.g., `/ios-android-app-development`, `/retail-ecommerce-solution`)

### 3. URL Structure
- **Old → New redirects (301):**
  - `/iOS&androidAppDevelopment` → `/ios-android-app-development`
  - `/retaile-commercesolution` → `/retail-ecommerce-solution`
  - `/RetailE-Commercesolution` → `/retail-ecommerce-solution`
- Created `ios-android-app-development.php` for the new URL

### 4. Schema Markup
- **Organization** schema on all pages
- **Service** schema on service pages (e.g., ios-android-app-development)
- **FAQ** schema on pages with FAQ sections

### 5. Canonical URLs
- Dynamic canonical URLs on all pages
- Prevents duplicate content issues

### 6. Performance
- Preload for critical CSS
- Fixed script path typos
- Fixed font URL

---

## Actions Required (Manual Steps)

### 1. Google Search Console
1. Go to [Google Search Console](https://search.google.com/search-console)
2. Add your property: `https://metacortexitsolution.com`
3. Choose verification method (HTML meta tag recommended)
4. Copy the verification code (e.g., `content="abc123..."`)
5. Replace `YOUR_GOOGLE_VERIFICATION_CODE` in `A_Layout/Header/Header_Partials/A_HeaderMeta.php` (line ~22)

### 2. Google Analytics 4
1. Go to [Google Analytics](https://analytics.google.com)
2. Create a GA4 property if you haven't already
3. Get your Measurement ID (format: `G-XXXXXXXXXX`)
4. Replace both instances of `G-XXXXXXXXXX` in `A_Layout/Header/Header_Partials/B_HeaderLink.php` (lines 39 and 44)

### 3. Submit Sitemap in Google Search Console
1. In Search Console, go to **Sitemaps**
2. Enter: `sitemap.xml`
3. Click **Submit**

---

## Optional: Add Schema to More Pages

To add **Service** schema to other service pages, add this before the header include:

```php
$SchemaService = ['name' => 'Your Service Name', 'description' => $MetaDescription];
```

To add **FAQ** schema to pages with FAQ sections:

```php
$SchemaFAQ = [
    ['question' => 'Question 1?', 'answer' => 'Answer 1.'],
    ['question' => 'Question 2?', 'answer' => 'Answer 2.']
];
```

---

## Core Web Vitals Check

After deployment, verify your site:
- [PageSpeed Insights](https://pagespeed.web.dev/)
- [Google Search Console](https://search.google.com/search-console) → Core Web Vitals report

Target: < 2.5s load time for key pages.
