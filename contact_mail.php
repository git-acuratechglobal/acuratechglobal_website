<?php
// Drop-in replacement: keeps the field names used by the old case-study pages (companyName, userEmail, phoneNumber, message).
require __DIR__ . '/includes/mailer.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); exit; }
$r = send_enquiry(['name' => $_POST['companyName'] ?? '', 'email' => $_POST['userEmail'] ?? '',
                   'phone' => $_POST['phoneNumber'] ?? '', 'message' => $_POST['message'] ?? '']);
if (!$r['ok']) http_response_code(400);
echo $r['ok'] ? 'Contact Mail Sent.' : htmlspecialchars($r['error']);
