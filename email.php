<?php
$subject = 'You Got Message'; // Subject of your email
$to = 'akshaykant5006@gmail.com';  //Recipient's E-mail
$emailTo = $_REQUEST['email'];

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$msg = $_REQUEST['message'];

$email_from = $name . '<' . $email . '>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: " . $name . '<' . $email . '>' . "\r\n"; // Sender's E-mail
$headers .= "Return-Path:" . "From:" . $email;

$message = 'Name : ' . $name . "\n";
$message .= 'Email : ' . $email . "\n";
$message .= 'Phone : ' . $phone . "\n";
$message .= 'Message : ' . $msg;

if (mail($to, $subject, $message, $email_from)) {
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
} else {
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
