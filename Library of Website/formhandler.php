<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$email_from='abc';
$email_subject='New Form Submission';
$email_body="User Name: $name.\n".
            "user Email: $visitor_email.\n".
            "Subject: $subject.\n". 
            "User Message: $message .\n";

$to='gokulprasath246@gmail.com';

$headers="From: $email_from\r\n";
$headers .="Reply-To: $vistor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: conatct.html")

?>
