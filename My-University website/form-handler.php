<?php
$name = $_POST['name'];

$visitor_email = $_POST['email'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$email_form = 'unversity@gmail.com';

$email_subject = 'New form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $vistior_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'hrgaming1719@gmail.com';

$headers = "From: $email_from \r\n";

$headers.= "Reply-To: $visitors-email \r\n";

mail($to, $email_subject,$email_body,$headers);

header("Location: contact.html")
?>