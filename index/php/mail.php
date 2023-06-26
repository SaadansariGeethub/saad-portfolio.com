<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$service= $_POST['service'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "nawab6388519@gmail.com";
$subject = "Mail From codeconia";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message. "
\r\n  Mobile number= " . $number."\r\n  subject = " . $subject;  
$headers = "From: noreply@codeconia.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>