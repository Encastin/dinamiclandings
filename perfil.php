<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  include("head.php");
  include("conexion.php");
  ?>

  <title>Mi Perfil | DinamicLandings</title>

  <style>
    @media (max-width: 767px) {
      .fotoper {
        width: 60%;
      }
    }
  </style>
</head>

<body>

  <?php
  if ($acceso != 0) {  // * El usuario ha iniciado sesión, permite el acceso a la página protegida

    // <!-- Header  -->
    $nav = 4;
    include("navbar.php");
    // <!-- Header End -->

    $query = $DB->query("SELECT tipoCuenta, nombre, pApellido, sApellido, genero, fNacimiento, telefono, avatar, descripcion, fecha FROM usuario WHERE idUsuario = '$SesionID'");
    $dato = $query->fetch_assoc();
    $tipoCuenta = $dato['tipoCuenta'];
    $nombreU = $dato['nombre'];
    $pApellido = $dato['pApellido'];
    $sApellido = $dato['sApellido'];
    $nombreC = "$nombreU $pApellido $sApellido";
    $genero = $dato['genero'];
    $fNacimiento = date("Y-m-d", strtotime($dato['fNacimiento']));
    $telefonoU = $dato['telefono'];
    $avatarU = $dato['avatar'];
    $descripcionU = $dato['descripcion'];
    $fecha = date("d/m/Y", strtotime($dato['fecha']));

    if ($tipoCuenta == "E") {
      $query = $DB->query("SELECT nombre, telefono, estado, municipio, colonia, calle, numExt, numInt, referencias, avatar, descripcion, fecha FROM empresa WHERE idEmpresa = '$EmpresaID'");
      $dato = $query->fetch_assoc();
      $nombreE = $dato['nombre'];
      $telefonoE = $dato['telefono'];
      $estado = $dato['estado'];
      $municipio = $dato['municipio'];
      $colonia = $dato['colonia'];
      $calle = $dato['calle'];
      $numExt = $dato['numExt'];
      $numInt = $dato['numInt'];
      $referencias = $dato['referencias'];
      $avatarE = $dato['avatar'];
      $descripcionE = $dato['descripcion'];
      $fecha = date("d/m/Y", strtotime($dato['fecha']));
    }

    switch ($tipoCuenta) {
      case 'P':
        $avatarM = $avatarU;
        if ($avatarU == "N/A") {
          $avatarM = "img/usuario.png";
        }
        $cuenta = "<i class='fa-solid fa-user me-2'></i>Personal";
        $nombreM = $nombreC;
        $descripcionM = $descripcionU;
        $descripcionEdit = $descripcionU;
        if ($descripcionU == "N/A") {
          $descripcionM = "Sin descripción";
          $descripcionEdit = "";
        }
        break;

      case 'E':
        $avatarM = $avatarE;
        if ($avatarE == "N/A") {
          $avatarM = "img/empresa.png";
        }
        $cuenta = "<i class='fa-solid fa-building me-2'></i>Empresarial";
        $nombreM = $nombreE;
        $descripcionM = $descripcionE;
        $descripcionEdit = $descripcionE;
        if ($descripcionE == "N/A") {
          $descripcionM = "Sin descripción";
          $descripcionEdit = "";
        }
        break;

      default:
        $cuenta = "$cuenta";
        $nombreM = "Sin registro";
        $descripcionM = "Sin registro";
        $avatarM = "img/usuario.png";
        break;
    }

    $lpCreadas = 0; // ? Conteo de Landing Pages creadas
    switch ($acceso) {
      case '1':
        $query = $DB->query("SELECT idPlantilla FROM rellanding WHERE idUsuario = '$SesionID' AND activo = 1 ORDER BY idPlantilla ASC");
        break;

      case '2':
        $query = $DB->query("SELECT idPlantilla FROM rellanding WHERE idEmpresa = '$EmpresaID' AND activo = 1 ORDER BY idPlantilla ASC");
        break;

      default:
        $query = 0;
        break;
    }
    $lpCreadas = mysqli_num_rows($query);

    $lpActivas = 0; // ? Conteo de Landing Pages Activas
    switch ($acceso) {
      case '1':
        $query1 = $DB->query("SELECT DISTINCT idPlantilla FROM rellanding WHERE idUsuario = '$SesionID' AND activo = 1 ORDER BY idPlantilla ASC");
        break;

      case '2':
        $query1 = $DB->query("SELECT DISTINCT idPlantilla FROM rellanding WHERE idEmpresa = '$EmpresaID' AND activo = 1 ORDER BY idPlantilla ASC");
        break;

      default:
        $query = 0;
        break;
    }
    while ($dato = mysqli_fetch_array($query1)) {
      $idPlantilla = $dato['idPlantilla'];

      $query2 = $DB->query("SELECT nombreTabla FROM plantilla WHERE idPlantilla = '$idPlantilla' AND activo = 1");
      $dato = $query2->fetch_assoc();
      $nombreTabla = $dato['nombreTabla'];

      switch ($acceso) {
        case '1':
          $query3 = $DB->query("SELECT idLanding FROM rellanding WHERE idUsuario = '$SesionID' AND activo = 1 ORDER BY idLanding ASC");
          break;

        case '2':
          $query3 = $DB->query("SELECT idLanding FROM rellanding WHERE idEmpresa = '$EmpresaID' AND activo = 1 ORDER BY idLanding ASC");
          break;

        default:
          $query = 0;
          break;
      }
      while ($dato = mysqli_fetch_array($query3)) {
        $idLanding = $dato['idLanding'];

        $query4 = $DB->query("SELECT id FROM $nombreTabla WHERE id = '$idLanding' AND activo = 1 ORDER BY nombre ASC");
        if (mysqli_num_rows($query4) != 0) {
          while ($dato = mysqli_fetch_array($query4)) {

            $lpActivas = $lpActivas + 1;
          }
        }
      }
    }

    // * Actualización de registro relacionado de USUARIO y EMPRESA
    $query = $DB->query("SELECT rol FROM relempresa WHERE (idUsuario = '$SesionID' AND idEmpresa = '$EmpresaID' AND activo = '1');");
    $dato = $query->fetch_assoc();
    $rol = $dato['rol'];

    $publicidad = 0; // ? Conteo de Publicidad creada (! Todavía no existe el módulo)
    $expLic = date("d/m/Y", strtotime($hoy)); // ? Fecha de expiración de licencia (! Todavía no existe el módulo)

  ?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="page-content">

            <!-- ***** Perfil Start ***** -->
            <div class="row">
              <div class="col-lg-12">
                <div class="main-profile">
                  <div class="row">
                    <div class="col-lg-4">
                      <img src="assets/<?php echo $avatarM; ?>" alt="Avatar" style="border-radius: 23px;">
                    </div>
                    <div class="col-lg-4 align-self-center">
                      <div class="main-info header-text">
                        <span style="background-color: #27292a;"><?php echo $cuenta; ?></span>
                        <h4><?php echo $nombreM; ?></h4>
                        <p><?php echo $descripcionM; ?></p>
                        <div class="main-border-button">
                          <button type="button" class="btn btn-outline-info rounded-4" data-bs-toggle="modal" data-bs-target="#actdatos"><i class="fa-solid fa-pen me-2"></i>Actualizar Información</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 align-self-center">
                      <ul>
                        <li>Landing Pages Creadas <span><?php echo $lpCreadas; ?></span></li>
                        <li>Landing Pages Activas <span><?php echo $lpActivas; ?></span></li>
                        <li>Publicidad Creada <span><?php echo $publicidad; ?></span></li>
                        <li>Registrado <span><?php echo $fecha; ?></span></li>
                        <li>Expiración de Licencia <span class="badge text-bg-warning" style="font-size: 14px;"><?php echo $expLic; ?></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Perfil End ***** -->

            <!-- ***** Creaciones Start ***** -->
            <div class="live-stream">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Tus Últimas</em> Creaciones</h4>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <div class="thumb">
                      <img src="assets/img/flyer/imagenesflyer/publi132.png" alt="">
                      <div class="hover-effect">
                        <div class="content">
                          <div class="live">
                            <a href="#"><i class="fa-solid fa-cloud-arrow-down"></i> Descargar</a>
                          </div>
                          <ul>
                            <li><a href="#"><i class="fa fa-eye"></i> Ver</a></li>
                            <li><a href="#"><i class="fa-solid fa-pen"></i> Editar</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="down-content text-center">
                      <span><i class="fa-solid fa-calendar-days"></i> 14/02/2024</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <div class="thumb">
                      <img src="assets/img/flyer/imagenesflyer/publi74.png" alt="">
                      <div class="hover-effect">
                        <div class="content">
                          <div class="live">
                            <a href="#"><i class="fa-solid fa-cloud-arrow-down"></i> Descargar</a>
                          </div>
                          <ul>
                            <li><a href="#"><i class="fa fa-eye"></i> Ver</a></li>
                            <li><a href="#"><i class="fa-solid fa-pen"></i> Editar</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="down-content text-center">
                      <span><i class="fa-solid fa-calendar-days"></i> 11/02/2024</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <div class="thumb">
                      <img src="assets/img/flyer/imagenesflyer/publi20.png" alt="">
                      <div class="hover-effect">
                        <div class="content">
                          <div class="live">
                            <a href="#"><i class="fa-solid fa-cloud-arrow-down"></i> Descargar</a>
                          </div>
                          <ul>
                            <li><a href="#"><i class="fa fa-eye"></i> Ver</a></li>
                            <li><a href="#"><i class="fa-solid fa-pen"></i> Editar</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="down-content text-center">
                      <span><i class="fa-solid fa-calendar-days"></i> 09/02/2024</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="item">
                    <div class="thumb">
                      <img src="assets/img/flyer/imagenesflyer/publi2.png" alt="">
                      <div class="hover-effect">
                        <div class="content">
                          <div class="live">
                            <a href="#"><i class="fa-solid fa-cloud-arrow-down"></i> Descargar</a>
                          </div>
                          <ul>
                            <li><a href="#"><i class="fa fa-eye"></i> Ver</a></li>
                            <li><a href="#"><i class="fa-solid fa-pen"></i> Editar</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="down-content text-center">
                      <span><i class="fa-solid fa-calendar-days"></i> 06/02/2024</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="panelpublicidad.php">Ver Todas<i class="fa-solid fa-arrow-right ms-2"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- ***** Creaciones End ***** -->
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div data-bs-theme="dark">
      <div class="modal fade" id="actdatos" tabindex="-1" aria-labelledby="actualizacion" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="actualizacion">Actualizar información</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="update-account.php" method="post" class="row g-3" enctype="multipart/form-data">

                <h5>Datos personales</h5>

                <!-- Datos personales -->
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <div class="form-floating">
                      <input type="text" class="form-control" name="nombreU" id="nombreU" value="<?php echo $nombreU; ?>" placeholder="Nombre(s)" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                      <label for="nombreU">Nombre(s)</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <div class="form-floating">
                      <input type="text" class="form-control" name="pApellido" id="pApellido" value="<?php echo $pApellido; ?>" placeholder="Primer Apellido" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                      <label for="pApellido">Primer Apellido</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <div class="form-floating">
                      <input type="text" class="form-control" name="sApellido" id="sApellido" value="<?php echo $sApellido; ?>" placeholder="Segundo Apellido" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                      <label for="sApellido">Segundo Apellido</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-person-half-dress"></i></span>
                    <div class="form-floating">
                      <select class="form-select" id="tipocuenta" name="genero" aria-label="Género" required>
                        <option selected="" disabled="" value="">Selecciona un género</option>
                        <?php if ($genero == "M") { ?>
                          <option value="M" selected>Masculino</option>
                        <?php } else { ?>
                          <option value="M">Masculino</option>
                        <?php }
                        if ($genero == "F") { ?>
                          <option value="F" selected>Femenino</option>
                        <?php } else { ?>
                          <option value="F">Femenino</option>
                        <?php }
                        if ($genero == "O") { ?>
                          <option value="O" selected>Otro</option>
                        <?php } else { ?>
                          <option value="O">Otro</option>
                        <?php } ?>
                      </select>
                      <label for="tipocuenta">Género</label>
                      <div class="ms-2 invalid-feedback">
                        Seleciona un género
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-calendar-day"></i></span>
                    <div class="form-floating">
                      <input type="date" class="form-control" name="fNacimiento" id="fNacimiento" value="<?php echo $fNacimiento; ?>" placeholder="Fecha de Nacimiento" required>
                      <label for="fNacimiento">Fecha de Nacimiento</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                    <div class="form-floating">
                      <input type="tel" class="form-control" name="telefonoU" id="telefonoU" value="<?php echo $telefonoU; ?>" placeholder="Teléfono" maxlength="10" minlength="10" required>
                      <label for="telefonoU">Teléfono</label>
                      <div class="ms-2 invalid-feedback">
                        Escribe un número de teléfono
                      </div>
                    </div>
                  </div>
                </div>

                <?php if ($tipoCuenta == "E") { ?>
                  <h5>Datos empresariales</h5>

                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-user-tie"></i></span>
                      <div class="form-floating">
                        <input type="text" class="form-control" name="rol" id="rol" value="<?php echo $rol; ?>" placeholder="Rol de Trabajo" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                        <label for="rol">Rol de Trabajo</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
                      <div class="form-floating">
                        <input type="text" class="form-control" name="nombreE" id="nombreE" value="<?php echo $nombreE; ?>" placeholder="Nombre de la Empresa" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                        <label for="nombreE">Nombre de la Empresa</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                      <div class="form-floating">
                        <input type="tel" class="form-control" name="telefonoE" id="telefonoE" value="<?php echo $telefonoE; ?>" placeholder="Teléfono" maxlength="10" minlength="10" required>
                        <label for="telefonoE">Teléfono de la Empresa</label>
                      </div>
                    </div>
                  </div>

                  <!-- DIRECCIÓN -->
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                      <div class="form-floating">
                        <input type="text" class="form-control" name="estado" id="estado" value="<?php echo $estado; ?>" placeholder="Estado" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                        <label for="estado">Estado</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                      <div class="form-floating">
                        <input type="text" class="form-control" name="municipio" id="municipio" value="<?php echo $municipio; ?>" placeholder="Municipio" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                        <label for="municipio">Municipio</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                      <div class="form-floating">
                        <input type="text" class="form-control" name="colonia" id="colonia" value="<?php echo $colonia; ?>" placeholder="Colonia" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                        <label for="colonia">Colonia</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-road"></i></span>
                      <div class="form-floating">
                        <input type="text" class="form-control" name="calle" id="calle" value="<?php echo $calle; ?>" placeholder="Calle" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                        <label for="calle">Calle</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                      <div class="form-floating">
                        <input type="number" min="1" class="form-control" name="numext" id="numext" value="<?php echo $numExt; ?>" placeholder="Número Exterior" required>
                        <label for="numext">Número Exterior</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                      <div class="form-floating">
                        <input type="text" class="form-control" name="numint" id="numint" onkeyup="javascript:this.value=this.value.toUpperCase();" value="<?php echo $numInt; ?>" placeholder="Número Interior">
                        <label for="numint">Número Interior</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="input-group">
                      <span class="input-group-text"><i class="fa-solid fa-signs-post"></i></span>
                      <div class="form-floating">
                        <textarea class="form-control" placeholder="Referencias" name="referencias" id="referencias" style="height: 80px" onkeyup="javascript:this.value=this.value.toUpperCase();" required><?php echo $referencias; ?></textarea>
                        <label for="referencias">Referencias</label>
                      </div>
                    </div>
                  </div>
                <?php } ?>

                <div class="col-md-3">
                  <div class="row">
                    <div class="col-md-12 mb-3 text-center">
                      <label for="foto" class="form-label">Foto de perfil</label>
                      <div id="preview">
                        <img class="fotoper" id="imagePreview" src="assets/<?php echo $avatarM; ?>" alt="Avatar" style="border-radius: 23px;">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="input-group">
                        <label class="input-group-text" for="inputFile"><i class="fa-solid fa-image"></i></label>
                        <input type="file" class="form-control" name="avatar" id="inputFile" accept="image/*">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 d-flex align-items-center">
                  <div class="input-group" style="height: 100%">
                    <span class="input-group-text"><i class="fa-solid fa-message"></i></span>
                    <div class="form-floating">
                      <textarea class="form-control" placeholder="Descripción" name="descripcion" id="descripcion" style="height: 100%"><?php echo $descripcionEdit; ?></textarea>
                      <label for="descripcion">Descripción</label>
                    </div>
                  </div>
                </div>

                <div class="d-flex justify-content-end">
                  <button type="button" class="btn btn-secondary rounded-3 me-3" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-success rounded-3">Guardar cambios</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      const myModal = document.getElementById('myModal')
      const myInput = document.getElementById('myInput')

      myModal.addEventListener('shown.bs.modal', () => {
        myInput.focus()
      })
    </script>

    <script>
      document.getElementById('inputFile').addEventListener('change', function(event) {
        var preview = document.getElementById('imagePreview');
        var file = event.target.files[0];
        var reader = new FileReader();

        reader.onload = function(event) {
          preview.src = event.target.result;
        };

        reader.readAsDataURL(file);
      });
    </script>

  <?php
  } else {
    header("Location: login.php");
  }

  include("footer.php"); ?>
</body>

</html>