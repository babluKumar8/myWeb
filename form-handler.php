<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_form = 'info@yourwebsite.com';
$email_subject ='New form Submision';
$email_body ="User Name: $name.\n".
             "User email: $visitor_email.\n".
             "Subject: $subject.\n".
             "User Message: $message.\n";

$to = 'abhinash5262@gmail.com';
$headers = "Form : $email_form \r\n";
$headers ="Replay-To: $visitor_email\r\n ";
email($to ,$email_subject,$email_body,$headers );
header("location: contact.html");


?>