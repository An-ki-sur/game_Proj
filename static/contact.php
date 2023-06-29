<?php
$field_name = $_POST['name'];
$field_rate = $_POST['rate'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

//Specify the message recipient:
$mail_to = 'antonplay983@gmail.com';
$mail_from = 'antonplay983@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

//The email content:
$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;
$headers = 'From: '.$mail_from."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";
$mail_status = mail($mail_to, $subject, $body_message, $headers);

//Show a json message about the successful or unsuccessful sending a message
if ($mail_status) {
   $resArray= array('success' => true);
   header('Content-Type: application/json');
   echo json_encode($resArray);
} else {
   $resArray= array('success' => false);
   header('Content-Type: application/json');
   echo json_encode($resArray);
}
?>