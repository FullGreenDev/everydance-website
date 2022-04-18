<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'no-reply@everydance.fr';

$email_subject = $subject;

$email_body = "Nom: $name.\n".
              "Email: $visitor_email.\n".
              "Sujet: $subject.\n".
              "Message: $message .\n";

$to = 'fullgreen.sky66@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>
