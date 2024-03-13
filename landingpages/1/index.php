<?php
include("../../conexion.php");

$id = $_REQUEST['id'];
if (empty($id)) {
  $id = 0;
}

$query = $DB->query("SELECT * FROM landingpage WHERE id = $id AND activo = 1");

if (mysqli_num_rows($query) != 0) {

  while ($dato = mysqli_fetch_array($query)) {
    $id = $dato['id'];
    // $nombre = $dato['nombre'];
    $titulo1 = $dato['titulo1'];
    $logo = $dato['logo'];
    $titulo2 = $dato['titulo2'];
    $hiperv1 = $dato['hiperv1'];
    $hiperv2 = $dato['hiperv2'];
    $hiperv3 = $dato['hiperv3'];
    $hiperv4 = $dato['hiperv4'];
    $hiperv5 = $dato['hiperv5'];
    $background1 = $dato['background1'];
    $titulo3_1 = $dato['titulo3_1'];
    $titulo3_2 = $dato['titulo3_2'];
    $titulo3_3 = $dato['titulo3_3'];
    $titulo4 = $dato['titulo4'];
    $background2 = $dato['background2'];
    $contenido1 = $dato['contenido1'];
    $titulo5 = $dato['titulo5'];
    $imagenesc1 = $dato['imagenesc1'];
    $imagenesc2 = $dato['imagenesc2'];
    $imagenesc3 = $dato['imagenesc3'];
    $titulo6 = $dato['titulo6'];
    $contenido3 = $dato['contenido3'];
    $autor1 = $dato['autor1'];
    $cargo1 = $dato['cargo1'];
    $contenido2 = $dato['contenido2'];
    $autor2 = $dato['autor2'];
    $cargo2 = $dato['cargo2'];
    $contenido4 = $dato['contenido4'];
    $autor3 = $dato['autor3'];
    $cargo3 = $dato['cargo3'];
    $titulo7 = $dato['titulo7'];
    $descripcion = $dato['descripcion'];
    $copy = $dato['copy'];
    $disenado = $dato['disenado'];
    $link = $dato['link'];
    $borde1 = $dato['borde1'];
    $borde2 = $dato['borde2'];
    $author = $dato['author'];
    $description = $dato['description'];
    $keywords = $dato['keywords'];
    $lista = $dato['lista'];
    $boton = $dato['boton'];
    $btnletra = $dato['btnletra'];
    $colorT2 = $dato['colorT2'];
    $colorT3 = $dato['colorT3'];
    $colorT4 = $dato['colorT4'];
    $colorC1 = $dato['colorC1'];

    $whatsapp = $dato['whatsapp'];
    $mensajewhats = $dato['mensajewhats'];
    $facebook = $dato['facebook'];
    $instagram = $dato['instagram'];
    $twitter = $dato['twitter'];
    $youtube = $dato['youtube'];
  }

  if ($disenado == "") {
    $disenado = "NET RABBIT S.A. DE C.V.";
  }

  // Reemplazar los dos asteriscos por $span
  $span = '<span class="deco">$1</span>';

  $titulo3_1 = preg_replace('/\*\*(.*?)\*\*/',  "$span", $titulo3_1);
  $titulo3_2 = preg_replace('/\*\*(.*?)\*\*/',  "$span", $titulo3_2);
  $titulo3_3 = preg_replace('/\*\*(.*?)\*\*/',  "$span", $titulo3_3);
  $titulo4 = preg_replace('/\*\*(.*?)\*\*/',  "$span", $titulo4);
  $titulo5 = preg_replace('/\*\*(.*?)\*\*/',  "$span", $titulo5);
  $titulo6 = preg_replace('/\*\*(.*?)\*\*/',  "$span", $titulo6);
  $titulo7 = preg_replace('/\*\*(.*?)\*\*/',  "$span", $titulo7);

?>

  <!DOCTYPE html>
  <html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TÍTUTLO -->
    <title><?php echo $titulo1; ?></title>

    <!-- LOGO -->
    <link href="img/<?php echo $id . "/" . $logo; ?>" rel="icon">

    <!-- META -->
    <meta name="author" content="<?php echo $author; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- ESTILOS PERSONALIZADOS -->
    <style>
      /* Color de Fuente de Títulos */
      /* .navbar-brand a {
        NAVBAR
        color: <?php echo $colorT2; ?>;
      } */

      .banner-text {
        /* HERO */
        color: <?php echo $colorT3; ?>;
      }

      .title-text {
        /* TARJETA SECUNDARIA  */
        color: <?php echo $colorT4; ?>;
      }

      .about-text p,
      .abt-list {
        /* CONTENIDO */
        color: <?php echo $colorC1; ?>;
      }

      .borde1 {
        border-left: 5px solid <?php echo $borde1; ?>;
      }

      .borde2 {
        border-right: 5px solid <?php echo $borde2; ?>;
      }

      .boton,
      .boton:hover {
        color: <?php echo $btnletra; ?>;
      }

      #contact .btn-primary {
        background: <?php echo $boton; ?>;
        border: 1px solid <?php echo $boton; ?>;
      }

      .header {
        background: url('img/<?php echo $id . "/" . $background1; ?>') no-repeat fixed;
        background-size: cover;
        min-height: 630px;
        position: relative;
      }

      #about {
        background: url('img/<?php echo $id . "/" . $background2; ?>') no-repeat;
        background-size: cover;
        margin-bottom: -3px;
      }
    </style>

  </head>

  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">

    <!-- NAVBAR -->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lauraMenu">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <img class="navbar-brand" src="img/<?php echo $id . "/" . $logo; ?>" alt="Laura" style="padding: 0 20px 0 0;">
                <a class="navbar-brand" href="<?php echo $link; ?>" target="_blank" style="color: <?php echo $colorT2; ?>;"><?php echo $titulo2; ?></a>
              </div>
              <div class="collapse navbar-collapse" id="lauraMenu">
                <ul class="nav navbar-nav navbar-right navbar-border">
                  <li class="active"><a href="#main-header"><?php echo $hiperv1; ?></a></li>
                  <li><a href="#about"><?php echo $hiperv2; ?></a></li>
                  <li><a href="#portfolio"><?php echo $hiperv3; ?></a></li>
                  <li><a href="#testimonial"><?php echo $hiperv4; ?></a></li>
                  <li><a href="#contact"><?php echo $hiperv5; ?></a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-12 wow fadeIn delay-05s">
                <div class="banner-text borde1">
                  <h2><?php echo $titulo3_1; ?></h2>
                  <p><?php echo $titulo3_2; ?> <br><?php echo $titulo3_3; ?></p>
                </div>
                <div class="overlay-detail text-center">
                  <a href="#about"><i class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section id="about" class="section-padding wow fadeIn delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-right">
            <h2 class="title-text borde2">
              <?php echo $titulo4; ?>
            </h2>
          </div>
          <div class="col-md-6 text-left">
            <div class="about-text">
              <p><?php echo $contenido1; ?></p>
              <p>&nbsp;</p>
              <ul class="abt-list">
                <li><?php echo $lista; ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="title text-center"><?php echo $titulo5; ?></h2>
          </div>
          <div class="col-md-12">
            <div id="myGrid" class="grid-padding">
              <div class="col-md-4 col-sm-4 padding-right-zero">
                <?php
                // Dividir la cadena en partes usando la coma como delimitador
                $partes = explode(",", $imagenesc1);
                // Eliminar el primer elemento (vacío) si existe
                if (count($partes) > 0 && empty($partes[0])) {
                  array_shift($partes);
                }
                // Iterar sobre las partes y construir las etiquetas <img>
                foreach ($partes as $imagen) {
                  echo "<img src='img/$id/$imagen' class='img-responsive'>";
                } ?>
              </div>
              <div class="col-md-4 col-sm-4 padding-right-zero">
                <?php
                $partes = explode(",", $imagenesc2);
                if (count($partes) > 0 && empty($partes[0])) {
                  array_shift($partes);
                }
                foreach ($partes as $imagen) {
                  echo "<img src='img/$id/$imagen' class='img-responsive'>";
                } ?>
              </div>
              <div class="col-md-4 col-sm-4 padding-right-zero">
                <?php
                $partes = explode(",", $imagenesc3);
                if (count($partes) > 0 && empty($partes[0])) {
                  array_shift($partes);
                }
                foreach ($partes as $imagen) {
                  echo "<img src='img/$id/$imagen' class='img-responsive'>";
                } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="testimonial" class="section-padding wow fadeInUp">
      <div class="container">
        <div class="row">
          <h2 class="title text-center"><?php echo $titulo6; ?></h2>
          <div class="test-sec">
            <div class="col-sm-4">
              <blockquote>
                <p><?php echo $contenido2; ?></p>
              </blockquote>
              <div class="carousel-info">
                <div class="pull-left"> <span class="testimonials-name"><?php echo $autor1; ?></span> <span class="testimonials-post"><?php echo $cargo1; ?></span> </div>
              </div>
            </div>
            <div class="col-sm-4">
              <blockquote>
                <p><?php echo $contenido3; ?> </p>
              </blockquote>
              <div class="carousel-info">
                <div class="pull-left"> <span class="testimonials-name"><?php echo $autor2; ?></span> <span class="testimonials-post"><?php echo $cargo2; ?></span> </div>
              </div>
            </div>
            <div class="col-sm-4">
              <blockquote>
                <p><?php echo $contenido4; ?></p>
              </blockquote>
              <div class="carousel-info">
                <div class="pull-left"> <span class="testimonials-name"><?php echo $autor3; ?></span> <span class="testimonials-post"><?php echo $cargo3; ?></span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="section-padding wow fadeIn delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="contact-sec text-center">
              <h2><?php echo $titulo7; ?></h2>
              <p><?php echo $descripcion; ?></p>
            </div>
          </div>

          <div class="col-md-8 col-md-push-2">
            <div id="sendmessage">Tu mensaje se ha enviado. Gracias!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Por favor ingrese un E-Mail válido" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><button type="submit" class="btn btn-primary btn-lg boton">Enviar Mensaje</button></div>
            </form>
          </div>

        </div>
      </div>
    </section>
    <footer class="footer-2 text-center-xs bg--white">
      <div class="container">
        <!--end row-->
        <div class="row">
          <div class="col-md-6">
            <div class="footer">
              © Copyright <?php echo $copy; ?>. Todos los Derechos Reservados.
              <div class="credits">
                Diseñado por <a href="<?php echo $link; ?>" target="_blank"><?php echo $disenado; ?></a><br>
              </div>
            </div>
          </div>
          <div class="col-md-6 text-right">
            <ul class="social-list">
              <?php if (!empty($whatsapp) && $whatsapp != 'N/A' && $whatsapp != '') { ?>
                <li>
                  <a href="<?php echo "https://api.whatsapp.com/send?phone=52$whatsapp&text=$mensajewhats"; ?>" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                </li>
              <?php }
              if (!empty($facebook) && $facebook != 'N/A' && $facebook != '') { ?>
                <li>
                  <a href="<?php echo $facebook; ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                </li>
              <?php }
              if (!empty($instagram) && $instagram != 'N/A' && $instagram != '') { ?>
                <li>
                  <a href="<?php echo $instagram; ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </li>
              <?php }
              if (!empty($twitter) && $twitter != 'N/A' && $twitter != '') { ?>
                <li>
                  <a href="<?php echo $twitter; ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                </li>
              <?php }
              if (!empty($youtube) && $youtube != 'N/A' && $youtube != '') { ?>
                <li>
                  <a href="<?php echo $youtube; ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                </li>
              <?php } ?>
            </ul>
          </div>

        </div>
        <!--end row-->
      </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/2c40838614.js" crossorigin="anonymous"></script>

  </body>

  </html>

<?php
} else {
?>

  <!DOCTYPE html>
  <html lang="es">

  <head>

    <?php include("head.php"); ?>

    <title>No Encontrado</title>

    <!-- CSS -->
    <style>
      /* BACKGROUND PÁGINA */
      .bg {
        background: #f0f1e9;
      }

      /* NAVBAR DE TÍTULO */
      .tituloSup,
      .navbar-brand:hover {
        text-align: center;
        font-weight: bold;
        color: #FFFF;
      }

      /* TÍTULO DE SECTOR Y LÍNEA DIVISORA */
      .hr,
      .titulosector {
        color: #be2525;
      }

      /* ETIQUETA DE INPUT */
      .tituloimput {
        color: #333333;
      }

      /* NOTA DE INPUT */
      .nota {
        font-size: small;
      }

      /* FUENTE CURSIVA */
      .laura {
        font-family: Satisfy;
        font-size: larger;
      }

      /* BORDE AL SELECCIONAR UN INPUT */
      .form-control:focus {
        border-color: #5c6974;
        box-shadow: 0 0 0 0.2rem #454e5640;
      }

      /* BOTÓN GUARDAR */
      .btn-form {
        background: #BE2525;
        border: 1px solid #BE2525;
        color: #FFFF;
      }

      .btn-form:hover {
        background: #8b1b1b;
        border: 1px solid #BE2525;
        color: #FFFF;
      }

      /* -------------- */
    </style>

  </head>

  <body>
    <div class="container">
      <div class="page-content bg-light">
        <div style="text-align: center;">
          <h2 class="titulosector">La landing page a la que intentas acceder no existe o no está disponible</h2>
          <hr class="hr">
          <h4 class="tituloimput">Por favor verifica la dirección.</h4>
        </div>
      </div>
    </div>
  </body>

  </html>

<?php
}
?>