<?php
// Per-page vars: $title (<=60 chars), $desc (<=155 chars), $path ("" for home), $ld (optional extra JSON-LD array)
$base = 'https://www.acuratechglobal.com';
$url  = $base . '/' . $path;
$ogimg = $base . '/images/banner1.jpg'; // replace with a 1200x630 branded image
$GA4_ID = ''; // e.g. 'G-XXXXXXXXXX'. The old UA-160819949-1 tag no longer collects data.
$org = [
  '@context' => 'https://schema.org', '@type' => 'ProfessionalService',
  'name' => 'Acuratech Global', 'url' => $base . '/', 'logo' => $base . '/images/logo_acurated.png',
  'image' => $ogimg, 'telephone' => '+91 842 777 7775', 'email' => 'info@acuratechglobal.com',
  'foundingDate' => '2015', 'areaServed' => 'Worldwide',
  'description' => 'Custom mobile app, web and enterprise software development company based in Mohali, India.',
  'address' => ['@type' => 'PostalAddress', 'streetAddress' => 'STPI Incubation Building C-184, Phase 8A, Industrial Area',
                'addressLocality' => 'Mohali', 'addressRegion' => 'Punjab', 'addressCountry' => 'IN'],
  'sameAs' => ['https://www.facebook.com/acuratechglobal/', 'https://www.instagram.com/acuratechglobal/',
               'https://twitter.com/acuratechglobal', 'https://www.linkedin.com/company/acuratech-global/']
];
function e($s){ return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($title) ?></title>
<meta name="description" content="<?= e($desc) ?>">
<link rel="canonical" href="<?= e($url) ?>">
<meta name="robots" content="index, follow, max-image-preview:large">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Acuratech Global">
<meta property="og:url" content="<?= e($url) ?>">
<meta property="og:title" content="<?= e($title) ?>">
<meta property="og:description" content="<?= e($desc) ?>">
<meta property="og:image" content="<?= e($ogimg) ?>">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= e($title) ?>">
<meta name="twitter:description" content="<?= e($desc) ?>">
<meta name="twitter:image" content="<?= e($ogimg) ?>">
<link rel="icon" href="/images/favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&display=swap">
<link rel="stylesheet" href="/css/site.css?v=2026-10">
<script type="application/ld+json"><?= json_encode($org, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
<?php if (!empty($ld)): ?><script type="application/ld+json"><?= json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
<?php endif; if ($GA4_ID): ?><script async src="https://www.googletagmanager.com/gtag/js?id=<?= e($GA4_ID) ?>"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag('js',new Date());gtag('config','<?= e($GA4_ID) ?>');</script>
<?php endif; ?>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header class="top">
  <div class="wrap bar">
    <a href="/" class="brand"><img src="/images/logo_acurated.png" width="150" height="39" alt="Acuratech Global"></a>
    <nav aria-label="Main">
      <?php $nav = ['services'=>'Services','process'=>'Process','portfolio'=>'Portfolio','about'=>'About','blog'=>'Blog'];
      foreach ($nav as $k=>$v): ?><a href="/<?= $k ?>"<?= $path===$k ? ' aria-current="page"' : '' ?>><?= $v ?></a>
      <?php endforeach; ?><a class="btn sm" href="/contact">Start a project</a>
    </nav>
  </div>
</header>
<main id="main">
