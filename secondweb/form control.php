<?<php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'infor@guavalife.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
               "User email: $visitor_email.\n".
               "subject: $subject.\n".
               " User message: $message.\n";



$to = 'olamidewrite@gmail.com';

$headers = "from: $email_from \r\n";
$headers . = "reply-to: $visitor_email \r\n";

mail ($to , $email_subject , $email_body , $headers);
header("location:contact.html");

?>
 








