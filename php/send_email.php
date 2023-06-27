<?php

  //Import PHPMailer classes into the global namespace
  use PHPMailer\PHPMailer\PHPMailer;

  require 'vendor/autoload.php';

  /**
   * Funcion encargada de enviar un Email
   * 
   * Params
   * @param string[] $contacto Contiene datos del contacto
   * @param string $email Contiene la direccion de correo de donde se envia el Email
   * @param string $clave Contiene el codigo unico de aplicacion
   * @param string $mensaje Contiene codigo HTML para el cuerpo del Email
   * @param string $asuntoMail Contiene el asunto del Email
   * @param string $adjunto Se pueden enviar adjuntos en el mensaje - Este parametro es opcional y su valor por defecto es ''
   * 
   * @return boolean Devuelve true si el envio fue exitoso, de lo contrario devuelve un false
   */
  function enviarMail($contacto, $email, $clave, $mensaje, $asuntoMail, $adjunto = '')
  {
    //Create a new PHPMailer instance
    $mail = new PHPMailer();

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    //SMTP::DEBUG_OFF = off (for production use)
    //SMTP::DEBUG_CLIENT = client messages
    //SMTP::DEBUG_SERVER = client and server messages
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    //Use `$mail->Host = gethostbyname('smtp.gmail.com');`
    //if your network does not support SMTP over IPv6,
    //though this may cause issues with TLS

    //Set the SMTP port number:
    $mail->Port = 465;

    //Set the encryption mechanism to use:
    // - SMTPS (implicit TLS on port 465) or
    // - STARTTLS (explicit TLS on port 587)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = $email;

    //Password to use for SMTP authentication
    $mail->Password = $clave;

    //Set who the message is to be sent from
    //Note that with gmail you can only use your account address (same as `Username`)
    //or predefined aliases that you have configured within your account.
    //Do not use user-submitted addresses in here
    $mail->setFrom($email, 'JBM');

    //Set an alternative reply-to address
    //This is a good place to put user-submitted addresses
    $mail->addReplyTo($contacto['email'], $contacto['name']);

    //Set who the message is to be sent to
    $mail->addAddress($contacto['email'], $contacto['name']);

    //Set the subject line
    $mail->Subject = $asuntoMail;

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $mail->msgHTML($mensaje);

    //Replace the plain text body with one created manually
    $mail->AltBody = 'Si visualiza esto por favor desestime el mensaje';

    //send the message, check for errors
    if (!$mail->send()) {
        //echo 'Mailer Error: ' . $mail->ErrorInfo;
        return false;
    } else {
        //echo 'Message sent!';
        return true;
    }
  }

?>