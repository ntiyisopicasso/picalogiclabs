<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email information
    $to = 'ntiyisopicasso@icloud.com'; // Replace with your email address
    $subject = 'New Message from Contact Form';
    $headers = "From: $name <$email>";
    
    // Compose email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo 'Your message has been sent successfully.';
    } else {
        echo 'Error: Unable to send email.';
    }
} else {
    echo 'Error: Invalid request.';
}
?>
