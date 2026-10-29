<?php
$title = 'Portfolio: App & Software Case Studies | Acuratech Global';
$desc  = 'Case studies from Acuratech Global: security, healthcare billing, lending, property, travel, marketplace and e-commerce apps.';
$path  = 'portfolio';
$work = [
 ['sentinelduo_casestudy','Sentinel DUO','A phone security app that protects your device.'],
 ['MJH-Group','MJH Group','A digital customer experience for new home builders.'],
 ['Proper-T_casestudy','Proper-T','Adding care to your property.'],
 ['pecuniaus_casestudy','Pecuniaus','The evolution of peer-to-peer lending.'],
 ['alternative_galaxy_casestudy','Alternative Galaxy','Alternate travel: share your experience and passion.'],
 ['rippleit_casestudy','RippleItt','List, shop and refer: a marketplace that builds community.'],
 ['joinme_casestudy','Join Me Tonight','Connecting people and creating moments.'],
 ['gmp_casestudy','Game Meat Processing','Empowering harvesters and business productivity.'],
 ['biscotts_casestudy','Biscotts','A one-stop shop for sweet treats.'],
 ['my-bulk-billing_casestudy','My Bulk Billing','Connecting patients and doctors.'],
];
include __DIR__ . '/includes/head.php'; ?>
<section class="page-hero"><div class="wrap">
  <h1>Products we have built with our clients</h1>
  <p>Ten case studies across security, healthcare, finance, property, travel and e-commerce.</p>
</div></section>
<section class="s"><div class="wrap"><div class="rows">
  <?php foreach ($work as $w): ?><a href="/<?= e($w[0]) ?>"><h3><?= e($w[1]) ?></h3><p><?= e($w[2]) ?> Read the case study.</p></a>
  <?php endforeach; ?></div>
  <p style="margin-top:32px"><a class="btn" href="/contact">Discuss your project</a></p>
</div></section>
<?php include __DIR__ . '/includes/foot.php'; ?>
