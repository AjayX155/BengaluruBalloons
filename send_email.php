<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = 'agarwalpackersmovers470@gmail.com'; // SMTP username
        $mail->Password = 'eemonuiosflqoxdp'; // SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('agarwalpackersmovers470@gmail.com', 'Mailer');
        $mail->addAddress('ajshivam80034@gmail.com', $name);

        $mail->isHTML(true);
        $mail->Subject = 'Bengaluru Balloons';
        $mail->Body    = "<h1>Message from $name</h1><p>$message</p>";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
