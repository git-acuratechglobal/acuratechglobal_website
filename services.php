<?php
$title = 'Custom Software, Web & Mobile App Development Services';
$desc  = 'Mobile app, web, enterprise and cloud development services from Acuratech Global in Mohali, India: iOS, Android, cross-platform, UI/UX, AI/ML and more.';
$path  = 'services';
$ld = ['@context'=>'https://schema.org','@type'=>'ItemList','name'=>'Acuratech Global services','itemListElement'=>array_map(
  fn($i,$n)=>['@type'=>'ListItem','position'=>$i+1,'name'=>$n],
  range(0,7), ['Mobile app development','Cross-platform app development','Web development','ERP solutions','UI/UX design','Blockchain and IoT development','AI/ML, data warehousing and big data','Cloud computing services'])];
include __DIR__ . '/includes/head.php'; ?>
<section class="page-hero"><div class="wrap">
  <h1>Software development services, from idea to hypercare</h1>
  <p>One team for strategy, UI/UX, engineering, QA and post-launch support, for startups, SMEs and large enterprises.</p>
</div></section>

<section class="s"><div class="wrap">
  <h2>What we do</h2>
  <div class="rows">
    <div><h3>Mobile app development</h3><p>Native iOS and Android apps, or cross-platform builds, published to the App Store and Google Play. We choose native or cross-platform with you based on budget, speed and the experience you need.</p></div>
    <div><h3>Web development</h3><p>Web applications designed around architecture, performance, development speed and ease of maintenance, built to stay fast under heavy load.</p></div>
    <div><h3>ERP and enterprise solutions</h3><p>Custom business-process software that replaces spreadsheets and manual hand-offs with one system your teams can rely on.</p></div>
    <div><h3>UI/UX design</h3><p>Ideation, prototyping and final designs for mobile and web, with clear calls to action and screen interactions, tested before development begins.</p></div>
    <div><h3>Emerging technology</h3><p>Blockchain, IoT, AI/ML, data warehousing, big data and cloud computing services, added where they solve a real problem for your product.</p></div>
  </div>
</div></section>

<section class="s alt"><div class="wrap split">
  <div><h2>Our tech stack</h2></div>
  <div>
    <h3>iOS</h3><ul class="chips"><li>Swift</li><li>Xcode</li><li>XCTest</li><li>Fastlane</li></ul>
    <h3>Android</h3><ul class="chips"><li>Kotlin</li><li>Java</li><li>Espresso</li><li>Android Studio</li></ul>
    <h3>Backend</h3><ul class="chips"><li>Ruby on Rails</li><li>Node.js</li><li>Firebase</li></ul>
    <h3>Infrastructure and CI</h3><ul class="chips"><li>AWS</li><li>Google Cloud</li><li>Jenkins</li><li>Travis CI</li></ul>
  </div>
</div></section>

<section class="s"><div class="wrap">
  <h2>Industries we build for</h2>
  <div class="rows">
    <div><h3>Fintech</h3><p>Secure authorisation, recurring payments and scheduling, transaction processing and history.</p></div>
    <div><h3>Healthcare and fitness</h3><p>Video consultations, calendars, wearable and IoT integration, HealthKit and Google Fit, dashboards, activity tracking and workout plans.</p></div>
    <div><h3>Education</h3><p>Online tutoring, lesson planning and learning platforms for schools, universities and training centres.</p></div>
    <div><h3>Marketplace and on-demand</h3><p>Filters, ratings and reviews, ordering and tracking, payments, loyalty and referral programmes, and on-demand service apps.</p></div>
    <div><h3>Social and machine learning</h3><p>Community and event apps, plus object recognition, natural language processing and body-pose detection.</p></div>
  </div>
</div></section>

<section class="s alt"><div class="wrap"><h2>Plan your build with us</h2><p>Read <a href="/process">how we work</a>, browse <a href="/portfolio">our case studies</a>, or <a href="/contact">send us your brief</a>.</p></div></section>
<?php include __DIR__ . '/includes/foot.php'; ?>
