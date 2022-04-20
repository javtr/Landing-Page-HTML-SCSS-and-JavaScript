<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/functions.php';
require_once __DIR__.'/config.php';

session_start();

// Basic check to make sure the form was submitted.
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    redirectWithError("");
}



// // Do some validation, check to make sure the name, email and message are valid.
// if (empty($_POST['g-recaptcha-response'])) {
//     redirectWithError("Por favor completa el CAPTCHA.");
// }

// $recaptcha = new \ReCaptcha\ReCaptcha(CONTACTFORM_RECAPTCHA_SECRET_KEY);
// $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_REQUEST['REMOTE_ADDR']);

// if (!$resp->isSuccess()) {
//     $errors = $resp->getErrorCodes();
//     $error = $errors[0];

//     $recaptchaErrorMapping = [
//         'missing-input-secret' => 'No reCAPTCHA secret key was submitted.',
//         'invalid-input-secret' => 'The submitted reCAPTCHA secret key was invalid.',
//         'missing-input-response' => 'No reCAPTCHA response was submitted.',
//         'invalid-input-response' => 'The submitted reCAPTCHA response was invalid.',
//         'bad-request' => 'An unknown error occurred while trying to validate your response.',
//         'timeout-or-duplicate' => 'The request is no longer valid. Please try again.',
//     ];

//     $errorMessage = $recaptchaErrorMapping[$error];
//     redirectWithError("Por favor completa el CAPTCHA: ".$errorMessage);
// }


if (empty($_POST['name'])) {
    redirectWithError("Por favor ingresa tu nombre.");
}

if (empty($_POST['email'])) {
    redirectWithError("Por favor ingresa tu email.");
}

if (empty($_POST['idmachine'])) {
    redirectWithError("Por favor ingresa tu idmachine.");
}


if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    redirectWithError("Por favor ingresa un email valido.");
}

if (strlen($_POST['message']) > 2000) {
    redirectWithError("Por favor ingresa menos de 2000 caracteres en el espacio de mensaje.");
}

// Everything seems OK, time to send the email.

$mail = new \PHPMailer\PHPMailer\PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = CONTACTFORM_PHPMAILER_DEBUG_LEVEL;
    $mail->isSMTP();
    $mail->Host = CONTACTFORM_SMTP_HOSTNAME;
    $mail->SMTPAuth = true;
    $mail->Username = CONTACTFORM_SMTP_USERNAME;
    $mail->Password = CONTACTFORM_SMTP_PASSWORD;
    $mail->SMTPSecure = CONTACTFORM_SMTP_ENCRYPTION;
    $mail->Port = CONTACTFORM_SMTP_PORT;

    // Recipients
    $mail->setFrom(CONTACTFORM_FROM_ADDRESS, CONTACTFORM_FROM_NAME);
    $mail->addAddress(CONTACTFORM_TO_ADDRESS, CONTACTFORM_TO_NAME);
    $mail->addReplyTo($_POST['email'], $_POST['name']);

    // Content
    $mail->Subject = "[ Licencia Logic ] ";
    $mail->Body    = <<<EOT

[Nombre]: {$_POST['name']}
[Email]: {$_POST['email']}
[Idmachine]: {$_POST['idmachine']}
...
[Mensaje]: {$_POST['message']}

EOT;




    $mail->send();
    redirectSuccess();
} catch (Exception $e) {
    redirectWithError("An error occurred while trying to send your message: ".$mail->ErrorInfo);
}
