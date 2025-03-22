<?php
// Initialize PHP variables
$projectId = 12345;
$name = "Project";
$message = "This is a message.";

// Send email using PHPMailer library
$mail = new PHPMailer();
$mail->IsSMTP(); // enable SMTP
$mail->Host = 'smtp.example.com'; // server for sending mail
$mail->Port = 587; // port for sending mail
$mail->SMTPAuth = true; // enable auth
$mail->Username = 'your_email@example.com'; // your email
$mail->Password = 'password'; // password
$mail->SetFrom('your_email@example.com', $name);
$mail->Subject = 'PHPMailer Test Email';
$mail->Body    = "Message for project with ID: {$projectId} and name: {$name}";
?>
