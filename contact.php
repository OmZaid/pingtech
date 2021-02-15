<?php
$to      = 'baytalaman1111@gmail.com';
$subject = $_POST['email'];
$message = $_POST['message'];
$headers = 'From: $subject' . "\r\n" .
    'Reply-To: $subject' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>