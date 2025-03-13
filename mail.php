<?php
$recepient = "info@Kassimnets.com";
$cc ="jenifer@itoi.org";
$sitename = "Kassim Nets";

// Get the JSON data from the request body
$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData, true);

$name = $data['name'];
$email = $data['email'];
$subject = $data['subject'];
$number = $data['number'];
$message = $data['message'];

$body = "Name: $name \nEmail: $email \nSubject: $subject \nNumber: $number \nMessage: $message ";

$pagetitle = "New message from the \"$sitename\"";

mail($recepient, $pagetitle, $body, "Content-type: text/plain; charset=\"utf-8\"\n From: $email\nCc: $cc");
?>