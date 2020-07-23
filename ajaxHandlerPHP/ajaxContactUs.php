<?php

// Extracting Post data
extract($_POST);

if (isset($_POST['submit'])) {

    if (isset($_POST['captcha'])) {

        $secretKey = "Enter Secret Key";

        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['captcha']);

        $response = json_decode($verifyResponse);

        if ($response->success) {

           /* Please Read official documentation on GitHUb Account 
           -->> https: //github.com/PHPMailer/ */

            date_default_timezone_set('Etc/UTC');
            require '../PHPMailer/PHPMailerAutoload.php';

            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Debugoutput = 'html';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPAuth = true;
            // Enter Your Email Username
            $mail->Username = "Enter Username";
            //Enter Your Email Password
            $mail->Password = "Enter Password";
            $mail->setFrom($email, $name);
            $mail->addReplyTo('non-reply@gmail.com', 'Viva Institute of Hotel Management');
            $mail->addAddress("Enter College Email Address", "Viva Institute of Hotel Management");
            $mail->Subject = $subject;
            $mail->msgHTML("<!doctype html><html><body>$message</body></html>");
            $mail->AltBody = $message;

            if (!$mail->send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;

            } else {
                echo "<script>Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Email Sent'
                    })</script>";
            }

        } else {
            echo "<script>Swal.fire({
                    icon: 'warning',
                    title: 'Google Recaptcha Error',
                    text: 'Please fill Google Recaptcha'
                })</script>";
        }

    }

}

// closing Database Connnection
$conn = null;
