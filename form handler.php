<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$email_from = 'contact.html';
$email_subject = "New Form Submission";
$email_body = "user name: $name.\n".
              "user email: $email.\n".
              "user message: $message.\n".
$to = "buildneo.23@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>