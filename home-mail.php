<?php

$to = 'nilesh@hospitalityminds.com'; //<-----Put Your email address here.
$name = $email = $phone = "";

if (!empty($_POST['name']) && !empty($_POST['email'])) {


    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $subject = "Website Visitor: Hospitality Minds $name";
    $message = "You have received a new message. " .
            " Here are the details:\n Name: $name \n Email: $email \n phone: $phone";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: Hospitalityminds Website <info@hospitalityminds.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


    mail($to, $subject, $message, $headers);

    header('refresh:3; Location: http://hospitalityminds.com');

    echo "Thanks for showing your Interest in our services. We will get back to you shortly. You can call us at 9967333442";
} else {
    echo "Please enter your Name and Email ID properly";
}
?> 

