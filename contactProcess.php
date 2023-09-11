<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Replace with your email address
    $to = "robiultufan.dev@gmail.com";

    // Email subject and message
    $subject = "Contact Form Submission";
    $message = "Name: $name\nEmail: $email\nPhone Number: $phone\nMessage:\n$message";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    mail($to, $subject, $message, $headers);
}