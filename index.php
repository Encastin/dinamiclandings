<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  include("head.php");
  include("conexion.php");
  ?>
  <title>DinamicLandings | Crea Landing Pages Al Instante</title>
</head>

<body>

  <?php
  if ($acceso != 0) {  // * El usuario ha iniciado sesión, permite el acceso a la página protegida

    // <!-- Header  -->
    $nav = 1;
    include("navbar.php");
    // <!-- Header End -->
  ?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">

            <!-- Banner Start -->
            <div class="main-banner">
              <div class="row">
                <div class="col-lg-7">
                  <div class="header-text">
                    <h6>Bienvenid@ a DinamicLandings</h6>
                    <h4>¡<em>Elige</em> y Empieza a Crear Landing Pages Al Instante!</h4>
                    <!-- <div class="main-button">
                    <a href="browse.html">Browse Now</a>
                  </div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- Banner End -->

            <!-- * Plantillas Start -->
            <div class="most-popular">
              <div class="row">
                <div class="col-lg-12">
                  <div class="heading-section">
                    <h4>Plantillas <em>Landing Pages</em></h4>
                  </div>
                  <div class="row">
                    <?php
                    $query = $DB->query("SELECT idPlantilla, plantilla, idCategoria FROM plantilla WHERE activo = 1 ORDER BY plantilla ASC");
                    while ($dato = mysqli_fetch_array($query)) {
                      $idPlantilla = $dato['idPlantilla'];
                      $plantilla = $dato['plantilla'];
                      $idCategoria = $dato['idCategoria'];

                      $query1 = $DB->query("SELECT categoria FROM categoria WHERE idCategoria = '$idCategoria' AND activo = 1");
                      $dato = $query1->fetch_assoc();
                      $categoria = $dato['categoria'];
                    ?>
                      <div class="col-lg-3 col-sm-6">
                        <div class="item">
                          <a href="<?php echo "landingpages/$idPlantilla/original.html" ?>" target="_blank"><img src="<?php echo "assets/landingpages/$idPlantilla.jpg" ?>" alt="Landing Page"></a>
                          <h4><?php echo $plantilla ?><br><span><?php echo $categoria ?></span></h4>
                          <ul>
                            <li class="mb-1"><a href="<?php echo "landingpages/$idPlantilla/landing-form.php" ?>" target="_blank" class="btn btn-primary btn-sm rounded-4" style="width: 100%;"><i class="fa-solid fa-plus text-light"></i> Crear</a></li>
                            <li><a href="<?php echo "landingpages/$idPlantilla/original.html" ?>" target="_blank" class="btn btn-light btn-sm rounded-4" style="width: 100%;"><i class="fa-solid fa-eye text-dark"></i> Ver</a></li>
                          </ul>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- * Plantillas End -->
          </div>
        </div>
      </div>
    </div>

  <?php
  } else {
    header("Location: login.php");
  }

  include("footer.php"); ?>
</body>

</html>