<?php

if(isset($_POST['send_message'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['message'];

    $to = "ilyassbenhadda@gmail.com";

    $body .= "\r\n" . "From: " . $email;
    $body .= "\r\n" . "Name: " . $name;
 
    if(mail($to, $subject, $body)) {
        echo "<script>alert('Your message was sent successfully!')</script>";
    }
    else {
        echo "<script>alert('Something Wrong!')</script>";
    }
}