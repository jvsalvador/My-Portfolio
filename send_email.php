<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : '';
    $project = isset($_POST['project']) ? htmlspecialchars(trim($_POST['project'])) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all required fields.";
        exit;
    }
    
    $to = "jema.salvador.up@phinmaed.com"; 
    
    $subject = "New Form Submission";

    $body = "Name: $name\nEmail: $email\nProject: $project\nMessage:\n$message";

    $headers = "From: $name <$email>";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
}
?>
