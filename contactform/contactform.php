<?php
    $name = $_POST['name'];
    $lastName = $_POST['lastname'];
    $client_email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];

    $email_from = 'milton@miltonlearn.org';
    $email_subject = 'New Tutor Request';
    $email_body = "Client Name:  $name  $lastName.\n".
                  "Client Email: $client_email.\n".
                  "Client Message: $message.\n";

    $to = "miltonlearn@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: miltonlearn.org");
?>
