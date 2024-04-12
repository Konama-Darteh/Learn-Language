<?php
// Check if the form fields are set and not empty
if (isset($_POST['email']) && isset($_POST['language']) && isset($_POST['message'])) {
    // Sanitize input data to prevent injection
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $language = filter_var($_POST['language'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // Validate email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set up the email parameters
        $to = 'konamashulammite2@gmail.com'; // Your email address
        $subject = 'New Message from Language Learning Website';
        $body = "Language: $language\n\nMessage: $message";

        // Set up additional email headers
        $headers = "From: $email" . "\r\n" .
                   "Reply-To: $email" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        // Attempt to send the email
        if (mail($to, $subject, $body, $headers)) {
            // Email sent successfully
            echo "Thank you! Your message has been sent.";
        } else {
            // Failed to send email
            echo "Sorry, there was an error sending your message. Please try again later.";
        }
    } else {
        // Invalid email address
        echo "Invalid email address. Please enter a valid email address.";
    }
} else {
    // Form fields are not set or empty
    echo "Please fill out all required fields.";
}
?>
