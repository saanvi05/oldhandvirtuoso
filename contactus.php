<?php
$name = $_POST['name'];
$visitior_email = $_POST['email'];
$message = $_POST['message'];

$email_form = 'oldhandbegetter@gmail.com';

$email_subject = "New Form Submission";
$email_body = "User Name: $name.\n". 
                 "User Email: $visitior_email.\n". 
                     "User Message: $message.\n";
$to = "oldhandbegetter@gmail.com";

$headers = "Form:$email_from\r\n";

$headers = "Reply-To: $visitior_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>