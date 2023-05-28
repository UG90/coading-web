<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "atharvaagrawal8@gmail.com"; // Replace with your email address
    $subject = "New Message from Contact Form";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you for your message! We will get back to you shortly.";
    } else {
        echo "Oops! An error occurred while sending your message.";
    }
}
?>
