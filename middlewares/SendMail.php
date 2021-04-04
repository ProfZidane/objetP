<?php

$to      = 'madazada0@gmail.com';
$subject = 'le sujet';
$message = 'Bonjour !';
$headers = 'From: digitlab2020@gmail.com' . "\r\n" .
'Reply-To: webmaster@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

?>