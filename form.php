<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Perform basic validation
    if (empty($name) || empty($email) || empty($message)) {
        // Handle validation error (e.g., redirect to an error page)
        header("Location: error_page.php");
        exit();
    }

    $to = "ashfu154@gmail.com";
    $subject = "New Form Submission";
    $messageBody = "Name: $name\nEmail: $email\nSubject:$subject\nMessage: $message";
    $headers = "From: $email";

    // Use the mail() function to send the email
    mail($to, $subject, $messageBody, $headers);

    // Redirect to a thank you page
    header("Location: thank_you_page.php");
    exit();
// }
?>
