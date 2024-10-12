<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'siriwara21820@gmail.com';
    $mail->Password = 'yuiw sxfb qcos rmbu';

    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';

    $mail->setFrom('siriwara21820@gmail.com', 'badminton SMTP');
    $mail->addAddress('siriwara21820@gmail.com', 'Test Send Email');

    $mail->isHTML(true);
    $mail->Subject = 'Forgot Password';
    $mail->Body = 'This is the HTML message body <b> in bold!</b>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    $mail->send();
    echo 'Meaaage has been sent';
} catch (Exception $e) {
    echo "Massage could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
