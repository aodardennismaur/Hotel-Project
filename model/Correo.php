<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';
require_once 'Parametros.php';

class Correo {
    public function enviarCorreo($nombre, $correo, $asunto, $mensaje, $premensaje){
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        try {

            $objP = new Parametros();
            $resp = $objP->getParametro();

            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = $resp[1]['valor'];                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = $resp[2]['valor'];                     // SMTP username
            $mail->Password   = $resp[3]['valor'];                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
            //Recipients
            $mail->setFrom($resp[2]['valor'], 'Administrador');
            $mail->addAddress($correo, $nombre);     // Add a recipient

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $asunto;
            $mail->Body    = $mensaje;
            $mail->AltBody = $premensaje;
        
            $mail->send();
            return 'Mensaje enviado con existo';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }
}