<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Save data or send an email
    $to = "your-email@yourdomain.com";
    $subject = "New Join Request from $fullName";
    $body = "Name: $fullName\nEmail: $email\nPhone: $phone\nMessage: $message";
    $headers = "From: no-reply@yourdomain.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for joining! We will contact you soon.";
    } else {
        echo "There was an error submitting your form. Please try again.";
    }
}
?>
