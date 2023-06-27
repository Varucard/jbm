<?php

  session_start();

  require_once './send_email.php';
  require_once './functions.php';

  /*--------- Variables ------------*/
  $asuntoMail = 'Consulta por asesoramiento profesional';
  $adjunto = '';

  // Datos a donde se enviara la data de los solicitantes
  $datosCliente = ['email' => 'arielmolus25@gmail.com', 'nombre' => 'JBM'];

  // variable que indica si se debe mostrar el mensaje emergente
  $mostrarMensaje = true;
  $_SESSION['mensaje'] = '';

  // Extraer las variables de entorno
  $email = getenv('USER_EMAIL');
  $password_email = getenv('PASSWORD_EMAIL');

  // Variables por POST
  $contacto = [
    'name' => checkInputText('name', '/^[a-z\' ]+$/ui'),
    'email' => checkInputEmail('email'),
    'number' => checkInputText('number', '/^(?:\+?\d{1,3}\s?)?(?:\(?0?\d{2,3}\)?[\s.-]?)?\d{7,10}$/'),
    'message' => checkInputText('message'),
  ];

  // Verifico que lo contenido dentro de Contacto no sea falso, si es falso arrojo un error al Usuario
  foreach($contacto as $dato) {
    if ($dato === false) {
      $_SESSION['mensaje'] = 'Se ingresaron valores incorrectos';
      header('Location: ../index.php#contacto');
      exit;
    }
  }

  // Invoco a las vistas una vez obtenido los valores
  require_once './views/barrel.php';

  if (enviarMail($contacto, $email, $password_email, $mensajeAsesor, $asuntoMail, $adjunto)) {

    $_SESSION['mensaje'] = '¡Mensaje enviado correctamente! A la brevedad nos comunicaremos con usted';
    header('Location: ../index.php');
    exit;

  } else {

    $_SESSION['mensaje'] = '¡Ocurrio un error, por favor vuelva a intentarlo!';
    header('Location: ../#contacto');
    exit;

  }

?>