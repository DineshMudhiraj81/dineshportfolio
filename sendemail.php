<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form data and sanitize
    $name = htmlspecialchars($_POST['fullname']);
    $subject = htmlspecialchars($_POST['subject']);
    $email = htmlspecialchars($_POST['email']);

    $adminEmail = 'nanidinesh965@gmail.com'; 

    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'nanidinesh965@gmail.com'; 
        $mail->Password   = 'pfyoeswcqtjdqjtc';   
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Email settings
        $mail->setFrom('your-email@gmail.com', 'Admin Name'); 
        $mail->addAddress($adminEmail);
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "New Job Interview Request from Portfolio";

$mail->Body = "
    <p>Dear Admin,</p>
    <p>A new person has submitted their details through your Portfolio website for a job interview. The details are as follows:</p>
    
    <p><strong>Full Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Message / Cover Letter:</strong></p>
    <blockquote>$subject</blockquote>
    
    <p>Please review the application and contact the candidate for further process.</p>
    <p>Regards,<br>
    <strong>Portfolio Job Application System</strong></p>
";

        // Send email
        if ($mail->send()) {
            echo '<script>alert("Your message has been sent successfully and you will get the response soon."); window.location.href = "https://klblawfirm.in/";</script>';
        } else {
            echo '<script>alert("Failed to send message. Please try again later."); window.location.href = "contact-us";</script>'; 
        }
    } catch (Exception $e) {
        echo '<script>alert("Mailer Error: ' . $e->getMessage() . '"); window.location.href = "contact-us";</script>'; 
    }
}
?>
