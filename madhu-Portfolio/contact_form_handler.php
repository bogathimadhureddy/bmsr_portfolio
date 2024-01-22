<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validation for required fields
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["subject"]) || empty($_POST["message"])) {
        echo '<script>document.getElementById("message-container").innerHTML = "All fields are required. Please fill out the form completely.";</script>';
    } else {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $to = "your_email@example.com"; // Replace with your email address
        $headers = "From: $email\r\nReply-To: $email";
        $message_body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

        // Send email
        if (mail($to, $subject, $message_body, $headers)) {
            echo '<script>document.getElementById("message-container").innerHTML = "Your message has been successfully sent!";</script>';
        } else {
            echo '<script>document.getElementById("message-container").innerHTML = "Sorry, there was an error sending your message. Please try again later.";</script>';
        }
    }
}
?>


