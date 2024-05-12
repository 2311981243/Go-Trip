<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "hitengarg918@gmail.com";
    $subject = "New Feedback from Customer";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";
    
    // Send email
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Thank you for your feedback! We have received your message.</p>";
    } else {
        echo "<p>Sorry, there was an error submitting your feedback. Please try again later.</p>";
    }
} else {
    // Redirect back to feedback form if accessed directly
    header("Location: feedback_form.html");
    exit();
}
?>
