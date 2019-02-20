<?php

$email_to = "birjupatel95@hotmail.com";
$email_subject = "Email test";

$firstName = $_POST['fName'];
$lastName = $_POST['lName'];
$email_from = $_POST['email'];
$description = $_POST['description'];


$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($email_to, $email_subject, $description, $headers);
?>
Thank you for contacting us!
