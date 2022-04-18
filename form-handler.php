<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'no-reply@skygames.fr';

$email_subject = '$subject';

$email_body = "Nom: $name.\n".
              "Email: $visitor_email.\n".
              "Sujet: $subject.\n".
              "Message: $message .\n";

$to = 'fullgreen.sky66@gmail.com';

$headers = "De: $email_from \r\n";

$headers = "Repond a: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>