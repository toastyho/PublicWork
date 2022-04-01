<?php
$vistor_name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$email_message = $_POST['message'];

$email_from = 'contact@froggy.com';
$email_subject = 'Froggy Form Submission';
$email_body = "Visitor Name: $visitor_name\nEmail: $visitor_email\n
Subject: $subject\n$email_message";

$to = 't.sain23@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: froggyContact.html");
?>