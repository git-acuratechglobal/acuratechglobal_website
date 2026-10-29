# Acuratech Global: update notes

## What is in this folder
index.php, services.php, process.php, about.php, portfolio.php, contact.php (new UI + content),
includes/ (shared head, footer, safe mailer), css/site.css, contact_mail.php (hardened drop-in),
sitemap.xml, robots.txt, .htaccess.
Upload on top of your existing site; old case-study, blog and careers pages keep working.
Requires PHP 7.4+ with mbstring. Not tested on a live PHP server here, so test on staging first and back up .htaccess.

## SEO fixes made
- Unique title/description/canonical/Open Graph per page (the old og:url and og:image pointed at metatags.io).
- Process page text was a single image; it is now real text with HowTo schema.
- Organization schema fixed (https, structured address); ItemList schema on Services.
- sitemap.xml: removed duplicate /index and /index.php URLs, refreshed dates, added contact and all case studies.
- .htaccess: 301 to https + www (was a 302), /index to /, .php/.html stripped, includes/ blocked.

## Security fixes
- Old forms put raw POST data into email HTML and headers (injection/spam risk). New mailer sanitises, escapes, validates and has a honeypot.
- The old handlers also Bcc'd a personal Gmail address (sachinminhas09@gmail.com). Removed; add it back only if intended.
- mail.php is no longer used by the new pages and can be deleted.

## Please check before going live
1. Google Analytics: tag UA-160819949-1 is Universal Analytics, which no longer collects data. Set $GA4_ID in includes/head.php.
2. Numbers conflict across the old site: 40 vs 50+ developers, 60+ vs 70+ clients, "5+ years" though founded 2015, 100+ enterprise solutions. I used the stats block (2015 / 50+ / 60+ / 150+). Confirm them.
3. Testimonial (Jacob C. Schwartz, ITS) was carried over unchanged. Confirm permission and that it is current.
4. Add a 1200x630 branded image and point $ogimg in head.php at it.
5. Delete from the live web root: error_log, "gmp_casestudy - Copy.php", portfolio-backup.php, ContatctUsForm1.php, RippleItt/*.zip, fqdispatch/, public_html/ (travel template), wp-acuratechglobal/. Backups and logs should not be public.
6. 404.php should send a real 404 status: add <?php http_response_code(404); ?> at its top.
7. Not redone: blog, careers, methodology and the 10 case-study pages still use the old design and the old footer (copyright 2019). Their meta tags need the same cleanup.
8. After upload: submit sitemap.xml in Google Search Console and use URL Inspection > Request indexing for the home page.
