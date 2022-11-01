<?php
$name = $_POST['name'];
$visitor_email = $POST['email'];    
$subject = $POST['subject'];    
$message = $POST['message'];

$email_from = 'iam@professornobody.in';

$email_subject = 'new form submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                 "User Message: $message.\n";
$to = 'ashharimam9@gmail.com';

$headers = "From $email_from \r\n";

$headers .= "Reply-To: $visitor_email"
    
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>