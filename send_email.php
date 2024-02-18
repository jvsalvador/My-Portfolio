<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $project = $_POST['project'];
    $message = $_POST['message'];

    
    $to = "jema.salvadoe.up@phinmaed.com"; 
    $subject = "New Form Submission";
    $body = "Name: $name\nEmail: $email\nProject: $project\nMessage:\n$message";

    
    if (mail($to, $subject, $body)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
}
?>