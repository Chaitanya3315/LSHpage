<?php
$name =$_POST[''];
$email =$_POST[''];
$phone =$_POST[''];
$query =$_POST[''];

$email_from ='lifespirng@gmail.com';
$email_subject='New Form submission';
$email_body="user name:$name.\n".
              "user Email:$email.\n".
              "user phone:$phone.\n".
              "user query:$query.\n";
$to ='subba@lifespring.in';

$headers ="From: $email_from\r\n";

$headers .="Reply To: $email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>