<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Retrieve form data
    $name = htmlspecialchars(trim($_GET['name']));
    $email = htmlspecialchars(trim($_GET['email']));
    $subject = htmlspecialchars(trim($_GET['subject']));
    $phone = htmlspecialchars(trim($_GET['phone']));
    $message = htmlspecialchars(trim($_GET['message']));

    // Set the recipient email address
    $to = "rgnrvr30@gmail.com"; // Replace with your email address
    $email_subject = "New Contact Form Submission: $subject";

    // Email content
    $email_body = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Message:</strong><br>$message</p>
    ";

    // Email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<script>alert('Thank you for getting in touch! Your message has been sent successfully.'); window.location = '/';</script>";
    } else {
        echo "<script>alert('Sorry, there was an error sending your message. Please try again later.'); window.history.back();</script>";
    }
} else {
    // Redirect to the homepage if accessed directly
    header("https://xjinri.github.io/zxcasdkjasd/");
    exit();
}
?>
