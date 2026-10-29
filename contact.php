<?php
require __DIR__ . '/includes/mailer.php';
$title = 'Contact Acuratech Global | Start Your App or Web Project';
$desc  = 'Contact Acuratech Global in Mohali, India. Share your app or web idea, call +91 842 777 7775 or email info@acuratechglobal.com.';
$path  = 'contact';
$res = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') $res = send_enquiry($_POST);
include __DIR__ . '/includes/head.php'; ?>
<section class="page-hero"><div class="wrap">
  <h1>Tell us what you want to build</h1>
  <p>Share your idea and an expert will get back to you shortly. Prefer email? Write to <a href="mailto:info@acuratechglobal.com">info@acuratechglobal.com</a> or call <a href="tel:+918427777775">+91 842 777 7775</a>.</p>
</div></section>
<section class="s"><div class="wrap">
  <?php if ($res && $res['ok']): ?><p class="ok" role="status">Thank you. We have your message and will reply soon.</p>
  <?php else: if ($res): ?><p class="err" role="alert"><?= e($res['error']) ?></p><?php endif; ?>
  <form method="post" action="/contact">
    <div><label for="name">Full name</label><input id="name" name="name" required autocomplete="name" value="<?= e($_POST['name'] ?? '') ?>"></div>
    <div><label for="company">Company</label><input id="company" name="company" autocomplete="organization" value="<?= e($_POST['company'] ?? '') ?>"></div>
    <div><label for="email">Email address</label><input id="email" name="email" type="email" required autocomplete="email" value="<?= e($_POST['email'] ?? '') ?>"></div>
    <div><label for="phone">Phone</label><input id="phone" name="phone" type="tel" autocomplete="tel" value="<?= e($_POST['phone'] ?? '') ?>"></div>
    <div><label for="message">About your project</label><textarea id="message" name="message" rows="5"><?= e($_POST['message'] ?? '') ?></textarea></div>
    <div class="hp" aria-hidden="true"><label>Leave empty<input name="website" tabindex="-1" autocomplete="off"></label></div>
    <button class="btn" type="submit">Send message</button>
  </form>
  <?php endif; ?>
</div></section>
<?php include __DIR__ . '/includes/foot.php'; ?>
