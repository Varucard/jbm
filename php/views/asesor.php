<?php

$mensajeAsesor = '
  <html>
      <head>

          <meta charset="UTF-8">
          <title></title>

      </head>
      <body>

        <div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 14px;">
          <h1>Hemos Recibido una solicitud de asesoramiento: </h1>

          <div align="left">
            <h3>Datos del solicitante</h3>

            <ul>
              <li>' . $contacto['name'] . '</li>
              <li>' . $contacto['email'] . '</li>
              <li>' . $contacto['number'] . '</li>
            </ul>

            <h3>Consulta del solicitante</h3>
            <p>' . $contacto['message'] . '</p>
          </div>

          </div>

      </body>

  </html>
  ';

?>