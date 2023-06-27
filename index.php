<?php
session_start();

// Trabajo con variables de sesión para mostrar mensajes en la pagina
// Verificar si hay un mensaje en la sesión
if (isset($_SESSION['mensaje'])) {
  $mensaje = $_SESSION['mensaje'];
  unset($_SESSION['mensaje']); // Eliminar el mensaje de la sesión
} else {
  $mensaje = '';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Logo del Cliente -->
  <link rel="icon" href="logo.ico">
  
  <!-- Estilos -->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="fonts/fonts.css">
  
  <title>JBM Mantenimiento Integral</title>
</head>

<body class="w3-black">

  <!-- Muestreo de mensajes emergentes -->
  <!-- Mostrar mensajes emergentes utilizando PHP y JS -->
  <?php if (!empty($mensaje)): ?>
    <script>
      alert("<?php echo $mensaje; ?>");
    </script>
  <?php endif; ?>
  <!-- Fin muestreo de mensajes emergentes -->

  <!-- Inicio Barra de Navegación -->
  <!-- Icon Bar (Sidebar - hidden on small screens) -->
  <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Avatar image in top left corner -->
    <img src="img/logo_recortado.jpeg" style="width:100%; margin-bottom: 5px">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-home w3-xxlarge"></i>
      <p >JBM</p>
    </a>
    <a href="#nosotros" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-user w3-xxlarge"></i>
      <p>NOSOTROS</p>
    </a>
    <a href="#trabajos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-eye w3-xxlarge"></i>
      <p>TRABAJOS</p>
    </a>
    <a href="#contacto" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <p>CONTACTO</p>
    </a>
  </nav>
  <!-- Cierre Barra de Navegación -->

  <!-- Inicio Barra de Navegación dispositivos moviles -->
  <!-- Navbar on small screens (Hidden on medium and large screens) -->
  <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
      <a href="#" class="w3-bar-item w3-button" style="width:25% !important">JBM</a>
      <a href="#nosotros" class="w3-bar-item w3-button" style="width:25% !important">NOSOTROS</a>
      <a href="#trabajos" class="w3-bar-item w3-button" style="width:25% !important">TRABAJOS</a>
      <a href="#contacto" class="w3-bar-item w3-button" style="width:25% !important">CONTACTO</a>
    </div>
  </div>
  <!-- Inicio Barra de Navegación dispositivos moviles -->


  <!-- Contenido de la Pagina -->
  <div class="w3-padding-large" id="main">

    <!-- Inicio Header -->
    <!-- Header/Casa -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
      <h1 class="w3-jumbo"><span class="w3-hide-small">Somos</span> JBM </h1>
      <p class="w3-text-purple">Mantenimiento Integral</p>
      <img src="img/logo_chico.jpeg" alt="boy" class="w3-image" width="992" height="1108">
    </header>
    <!-- Cierre Header -->

    <!-- Inicio Sección Sobre nosotros -->
    <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="nosotros">
      <!-- Inicio Quienes somos -->
      <h2 class="w3-text-light-grey">JBM ¿QUIENES SOMOS?</h2>
      <hr style="width:200px" class="w3-opacity">
      <h3 >SERVICIO PROFESIONAL DE MANTENIMIENTO INTEGRAL</h3>
      <h4 class="w3-text-purple">Planificamos, Elaboramos y Solucionamos.</h4>
      <h3 >NO TE COMPLIQUES LA VIDA, NOSOTROS TE LA SOLUCIONAMOS</h3>
      <h4 class="w3-text-purple">Somos un equipo de profesionales en el area. Podemos ayudarte en lo que necesites!</h4>
      <!-- Cierre Quienes somos -->

      <!-- Inicio que hacemos -->
      <hr style="width:200px" class="w3-opacity">
      <h3 class="w3-padding-16 w3-text-light-grey">¿PARA QUE COMPLICARTE LA VIDA?</h3>
      <h4 class="w3-padding-16 w3-text-light-grey">!NOSOTROS NOS DEDICAMOS A ESTO¡</h4>
      <p class="w3-wide">- Electricidad general (TGBT)</p>
      <p class="w3-wide">- Reparación y colocación de aires acondicionados</p>
      <p class="w3-wide">- Plomeria general</p>
      <p class="w3-wide">- Gas</p>
      <p class="w3-wide">- Camaras de seguridad</p>
      <p class="w3-wide">- Riego por aspersión</p>
      <p class="w3-wide">- Pintura</p>
      <p class="w3-wide">- Trabajos en altura con hidrogrua</p>
      <!-- Cierre que hacemos -->
      
      <!-- Start Grid for services tables -->
      <h3 class="w3-padding-16 w3-text-light-grey">Nuestros servicios son:</h3>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-dark-grey w3-xlarge w3-padding-32">Electricidad general</li>
            <li class="w3-padding-16">Transferencias de grupos electrógenos</li>
            <li class="w3-padding-16">Cableados</li>
            <li class="w3-padding-16">Colocación de artefactos</li>
            <li class="w3-padding-16">Montantes</li>
          </ul>
        </div>

        <div class="w3-half">
          <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-dark-grey w3-xlarge w3-padding-32">Reparación y colocación de aires acondicionados</li>
            <li class="w3-padding-16">Split, Vrv, Chilers</li>
            <li class="w3-padding-16">Piso techo, Cassette, Bajo silueta, Conductos por techo, Roof top</li>
            <li class="w3-padding-16">Pre instalación de cañeria</li>
            <li class="w3-padding-16">Desagues para todo tipo de equipo</li>
          </ul>
        </div>        
      </div>

      <br>

      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half">
          <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-dark-grey w3-xlarge w3-padding-32">Plomería general</li>
            <li class="w3-padding-16">Todo tipo de cañerias</li>
            <li class="w3-padding-16">Fluviales</li>
            <li class="w3-padding-16">Cloacales</li>
            <li class="w3-padding-16">Termofusión</li>
          </ul>
        </div>

        <div class="w3-half">
          <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-dark-grey w3-xlarge w3-padding-32">Gas</li>
            <li class="w3-padding-16">Instalación y mantenimiento de calderas</li>
            <li class="w3-padding-16">Loza radiante</li>
            <li class="w3-padding-16">Tiro balanceado</li>
          </ul>
        </div>
      </div>
      <!-- End Grid for services tables -->
      
      <!-- Inicio sección testimonios -->
      <h3 class="w3-padding-24 w3-text-light-grey">Nuestra reputación nos avala</h3>  
      <img src="img/edificio_uno.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
      <p><span class="w3-large w3-margin-right">Jorge Pinarello</span> YouTuber </p>
      <p>Lo recomiendo, rapidos y confiables</p><br>
      
      <img src="img/edificio_dos.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
      <p><span class="w3-large w3-margin-right">Pepe Grillo</span> Director tecnico de River </p>
      <p>Un buen equipo de trabajo</p>
      <!-- Inicio sección testimonios -->

    </div>
    <!-- Cierre seccion sobre nosotros -->
    
    <!-- Inicio sección Trabajos -->
    <div class="w3-padding-64 w3-content" id="trabajos">
      <h2 class="w3-text-light-grey">Nuestros Trabajos</h2>
      <hr style="width:200px" class="w3-opacity">

      <!-- Inicio grilla de fotos de trabajos -->
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half">
          <img src="img/edifico_tres.jpg" style="width:100%">
          <img src="img/edifico_cuatro.jpg" style="width:100%">
          <img src="img/edifico_cinco.jpg" style="width:100%">
        </div>

        <div class="w3-half">
          <img src="img/edifico_seis.jpg" style="width:100%">
          <img src="img/edifico_siete.jpg" style="width:100%">
          <img src="img/edifico_ocho.jpg" style="width:100%">
          <img src="img/edificio_nueve.jpg" style="width:100%">
        </div>
      <!-- Cierre grilla de fotos de trabajos -->
      </div>
    <!-- Cierre sección Trabajos -->
    </div>

    <!-- Inicio sección de contacto -->
    <div class="w3-padding-64 w3-content w3-text-grey" id="contacto">
      <h2 class="w3-text-light-grey">Contactanos</h2>
      <hr style="width:200px" class="w3-opacity">

      <div class="w3-section">
        <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>Argentina, AR</p>
        <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>(+54) 11 5664-9483 o al (+54) 11 2888-9296</p>
        <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i>jbmintegral@gmail.com</p>
      </div><br>
      <p>Podes enviarnos un mensajes y te contactaremos a la brevedad</p>

      <form action="php/back_jbm.php" method="POST">
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Nombre" required name="name"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="email"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Numero" required name="number"></p>
        <p><input class="w3-input w3-padding-16" type="text" placeholder="Mensaje" required name="message"></p>
        <p>
          <button class="w3-button w3-light-grey w3-padding-large" type="submit">
            <i class="fa fa-paper-plane"></i> Enviar mensaje
          </button>
        </p>
      </form>
    <!-- Cierre sección de contacto -->
    </div>
    
      <!-- Footer -->
    <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
      <p class="w3-medium">Desarrollado por <a href="#" target="_blank" class="w3-hover-text-green">PC Fighter</a></p>
    <!-- End footer -->
    </footer>

  <!-- END PAGE CONTENT -->
  </div>

  <!-- JavaScript -->
  <!-- Permite la utilización de Iconos dentro de la pagina -->
  <script src="js/icons.js" crossorigin="anonymous"></script>

</body>
</html>
