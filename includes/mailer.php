<?php
// Safe enquiry mailer: strips header-injection characters, escapes HTML, validates email.
function send_enquiry(array $in): array {
  $clean = fn($v, $max) => mb_substr(trim(preg_replace('/[\r\n]+/', ' ', (string)$v)), 0, $max);
  $name = $clean($in['name'] ?? '', 120); $company = $clean($in['company'] ?? '', 120);
  $email = trim((string)($in['email'] ?? '')); $phone = $clean($in['phone'] ?? '', 40);
  $msg = mb_substr(trim((string)($in['message'] ?? '')), 0, 4000);
  if (!empty($in['website'])) return ['ok' => true];                       // honeypot: pretend success to bots
  if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) return ['ok' => false, 'error' => 'Please enter your name and a valid email address.'];
  $h = fn($s) => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
  $body = "<table cellpadding='6'><tr><th align='left'>Name</th><td>{$h($name)}</td></tr>"
        . "<tr><th align='left'>Company</th><td>{$h($company)}</td></tr>"
        . "<tr><th align='left'>Email</th><td>{$h($email)}</td></tr>"
        . "<tr><th align='left'>Phone</th><td>{$h($phone)}</td></tr>"
        . "<tr><th align='left' valign='top'>Message</th><td>" . nl2br($h($msg)) . "</td></tr></table>";
  $headers = "MIME-Version: 1.0\r\nContent-Type: text/html; charset=UTF-8\r\n"
           . "From: Acuratech Global <info@acuratechglobal.com>\r\nReply-To: {$email}\r\n";
  $to = 'info@acuratechglobal.com,bhavneet@acuratechglobal.com,ishwinder@acuratechglobal.com';
  $ok = mail($to, 'New enquiry from acuratechglobal.com', $body, $headers);
  return $ok ? ['ok' => true] : ['ok' => false, 'error' => 'We could not send your message. Please email info@acuratechglobal.com.'];
}
