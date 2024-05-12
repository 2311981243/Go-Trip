<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    // Compose email message
    $to ="hitengarg918@gmail.com";
    $subject = 'Feedback from Travel Website';
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Feedback: $feedback\n";

    // Send email
    if (mail($to, $subject, $message)) {
        echo '<p>Thank you for your feedback!</p>';
    } else {
        echo '<p>Oops! Something went wrong. Please try again later.</p>';
    }
}
?>


