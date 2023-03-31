<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['mobile'];
$message= $_POST['message'];
$to = "im@im.com";
$subject = "Mail From website sajid.eu.org";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ." \r\n\ Mobile number =". $number;

$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC:";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>