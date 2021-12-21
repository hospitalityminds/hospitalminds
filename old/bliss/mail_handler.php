<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
    $country = $_POST['country'];

    $to = 'thetradershotel@gmail.com'; // Receiver Email ID, Replace with your email ID
    $subject = 'Website Visitor: Hotel Parklane';
    $message = "Name :" . $name . "\n" .
               "Email :" . $email . "\n" .
                "Phone :" . $phone . "\n" . 
                "Country :" . $country . "\n" .
                "Following Message is sent By Guest :" . "\n\n" . $msg;
    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "<h1>Sent Successfully! Thank you" . " " . $name . ", We will stay in touch!</h1>";
    } else {
        echo "Something went wrong!";
    }
}
?>