<?php
$title = 'Our App Development Process: 10 Steps from Idea to Launch';
$desc  = 'How Acuratech Global takes an idea to a launched product: NDA, scoping, design, agile development, growth, analytics and iteration.';
$path  = 'process';
$steps = [
 ['Idea protection and NDA','We respect the effort behind your idea. We sign an NDA so your concept stays protected.'],
 ['Concept discussion','Tell us your idea. Our business analysts discuss it with you, recommend the best options and build a clear picture of your vision.'],
 ['Consultation','We ask questions and answer yours, so requirements are precise and your expectations and concerns are addressed.'],
 ['Scope finalisation','The idea takes shape: we finalise the feature list and create the workflow.'],
 ['Development strategy','We agree a time-frame, project charter and resource plan, and define backend architecture, technology stack, database design and the pre- and post-launch strategy.'],
 ['UI/UX design','Users judge an app within seconds, so we start with wireframes, then UI and UX, to deliver a strong first impression.'],
 ['Development and coding','Lean and Agile development with continuous integration and regular, well-organised adjustments, so the product matches or exceeds your expectations.'],
 ['User acquisition and growth','Our job does not end at release. We use growth-hacking methods to find cost- and time-effective ways to attract users.'],
 ['Analytics','We analyse how the app is used and gather feedback, so you can decide which features to build and which to improve.'],
 ['Iterations','Markets move fast. We keep iterating so your product stays ahead of competitors.'],
];
$ld = ['@context'=>'https://schema.org','@type'=>'HowTo','name'=>'How Acuratech Global builds an app, from idea to launch',
  'step'=>array_map(fn($i,$s)=>['@type'=>'HowToStep','position'=>$i+1,'name'=>$s[0],'text'=>$s[1]], array_keys($steps), $steps)];
include __DIR__ . '/includes/head.php'; ?>
<section class="page-hero"><div class="wrap">
  <h1>Every project is different. Our process stays consistent.</h1>
  <p>Ten steps, agile at the core, from the first NDA to ongoing iteration. You see a working build every two weeks.</p>
</div></section>
<section class="s"><div class="wrap">
  <ol class="steps">
  <?php foreach ($steps as $s): ?><li><div><h3><?= e($s[0]) ?></h3><p><?= e($s[1]) ?></p></div></li>
  <?php endforeach; ?></ol>
  <p style="margin-top:32px"><a class="btn" href="/contact">Have an idea? Let&rsquo;s talk</a></p>
</div></section>
<?php include __DIR__ . '/includes/foot.php'; ?>
