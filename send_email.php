<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Check if fields are empty
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit; // Stop further execution
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit; // Stop further execution
    }

    $to = "shivanipednnekar2@gmail.com";
    $subject = "New Message from Contact Form";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Use additional headers for better email delivery
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n"; // Allow replies to the sender

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Failed to send message.";
    }
}
?>
