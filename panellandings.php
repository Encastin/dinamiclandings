<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include "head.php";
    include "conexion.php";
    ?>

    <title>Mis Landing Pages | DinamicLandings</title>
</head>

<body>

    <?php
    if ($acceso != 0) {  // * El usuario ha iniciado sesión, permite el acceso a la página protegida

        // <!-- Header  -->
        $nav = 2;
        include "navbar.php";
    ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-content">

                        <!-- ***** Landing Pages Start ***** -->
                        <div class="gaming-library profile-library mt-0">
                            <div class="col-lg-12">
                                <?php
                                switch ($acceso) {
                                    case '1':
                                        $query = $DB->query("SELECT DISTINCT idPlantilla FROM rellanding WHERE idUsuario = '$SesionID' AND activo = 1 ORDER BY idPlantilla ASC");
                                        break;

                                    case '2':
                                        $query = $DB->query("SELECT DISTINCT idPlantilla FROM rellanding WHERE idEmpresa = '$EmpresaID' AND activo = 1 ORDER BY idPlantilla ASC");
                                        break;

                                    default:
                                        $query = 0;
                                        break;
                                }
                                if (mysqli_num_rows($query) > 0) {
                                    while ($dato = mysqli_fetch_array($query)) {
                                        $idPlantilla = $dato['idPlantilla'];

                                        $query1 = $DB->query("SELECT plantilla, nombreTabla FROM plantilla WHERE idPlantilla = '$idPlantilla' AND activo = 1");
                                        $dato = $query1->fetch_assoc();
                                        $plantilla = $dato['plantilla'];
                                        $nombreTabla = $dato['nombreTabla'];
                                ?>
                                        <div class="heading-section">
                                            <h4><em>Landing Pages</em> Activas</h4>
                                        </div>
                                        <div class="d-flex justify-content-between my-3">
                                            <a class="link-underline link-underline-opacity-0 link-underline-opacity-0-hover" href="landingpages/<?php echo $idPlantilla; ?>/original.html" target="_blank">
                                                <h3 class="subtitulo"><?php echo $plantilla; ?><i class="fa-solid fa-arrow-right fs-4 ms-2"></i></h3>
                                            </a>
                                            <div class="d-flex justify-content-end">
                                                <button class="btn btn-light rounded-4 me-2" onclick="location.reload();"><i class="fa-solid fa-rotate-right me-2"></i>ACTUALIZAR</button>
                                                <button class="btn btn-primary rounded-4" id="landing-form"><i class="fa-solid fa-plus me-2"></i>CREAR</button>
                                            </div>
                                        </div>
                                        <?php
                                        switch ($acceso) {
                                            case '1':
                                                $query2 = $DB->query("SELECT idLanding FROM rellanding WHERE idUsuario = '$SesionID' AND activo = 1 ORDER BY idLanding DESC");
                                                break;

                                            case '2':
                                                $query2 = $DB->query("SELECT idLanding FROM rellanding WHERE idEmpresa = '$EmpresaID' AND activo = 1 ORDER BY idLanding DESC");
                                                break;

                                            default:
                                                $query2 = 0;
                                                break;
                                        }
                                        while ($dato = mysqli_fetch_array($query2)) {
                                            $idLanding = $dato['idLanding'];

                                            $query3 = $DB->query("SELECT * FROM $nombreTabla WHERE id = '$idLanding' AND activo = 1");
                                            if (mysqli_num_rows($query3) != 0) {
                                                while ($dato = mysqli_fetch_array($query3)) {
                                                    $id = $dato['id'];
                                                    $copy = $dato['copy'];
                                                    $nombre = $dato['nombre'];
                                                    $logo = $dato['logo'];

                                                    if (empty($logo)) {
                                                        $logo = "assets/img/null.png";
                                                    } else {
                                                        if (file_exists("landingpages/$idPlantilla/img/$id/" . $logo)) {
                                                            $logo = "landingpages/$idPlantilla/img/$id/" . $logo;
                                                        } else {
                                                            $logo = "assets/img/null.png";
                                                        }
                                                    }

                                                    if (empty($nombre)) {
                                                        $nombre = "NO REGISTRADO";
                                                    }
                                                    if (empty($copy)) {
                                                        $copy = "NO REGISTRADO";
                                                    }

                                                    echo ("
                                                    <div class='item text-center'>
                                                    <ul>
                                                    <li><img src='$logo' alt='$nombre' class='templatemo-item'></li>
                                                    <li><h4>$nombre</h4><span>$copy</span></li>
                                                    <li><a class='btn btn-info rounded-4' href='landingpages/$idPlantilla/index.php?id=$id' target=_BLANK><i class='fa-solid fa-eye me-2'></i>Ver</a></li>
                                                    <li><button class='btn btn-primary rounded-4' portapapeles='https://netrabbit.online/dinamiclandings/landingpages/$idPlantilla/?id=$id' onclick='copiar(this)'><i class='fa-solid fa-link me-2'></i>Compartir</button></li>
                                                    <li><a class='btn btn-warning rounded-4' href='landingpages/$idPlantilla/landing-form-edit.php?id=$id' target=_BLANK><i class='fa-solid fa-pen me-2'></i>Editar</a></li>
                                                    <li style='width: unset;'><button class='btn btn-danger rounded-4' value='$id' onclick='confirmarInhabilitar(this.value)'><i class='fa-solid fa-ban me-2'></i>Inhabilitar</button></li>
                                                    </ul>
                                                    </div>
                                                    ");
                                                    unset($logo);
                                                }
                                            }
                                        }

                                        $lpInactivas = 0; // ? Conteo de Landing Pages Inctivas
                                        switch ($acceso) {
                                            case '1':
                                                $query1 = $DB->query("SELECT DISTINCT idPlantilla FROM rellanding WHERE idUsuario = '$SesionID' AND activo = 1");
                                                break;

                                            case '2':
                                                $query1 = $DB->query("SELECT DISTINCT idPlantilla FROM rellanding WHERE idEmpresa = '$EmpresaID' AND activo = 1");
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
                                                    $query3 = $DB->query("SELECT idLanding FROM rellanding WHERE idUsuario = '$SesionID' AND activo = 1");
                                                    break;

                                                case '2':
                                                    $query3 = $DB->query("SELECT idLanding FROM rellanding WHERE idEmpresa = '$EmpresaID' AND activo = 1");
                                                    break;

                                                default:
                                                    $query = 0;
                                                    break;
                                            }
                                            while ($dato = mysqli_fetch_array($query3)) {
                                                $idLanding = $dato['idLanding'];

                                                $query4 = $DB->query("SELECT id FROM $nombreTabla WHERE id = '$idLanding' AND activo = 2");
                                                if (mysqli_num_rows($query4) != 0) {
                                                    while ($dato = mysqli_fetch_array($query4)) {

                                                        $lpInactivas = $lpInactivas + 1;
                                                    }
                                                }
                                            }
                                        }

                                        if ($lpInactivas > 0) {
                                        ?>

                                            <div data-bs-theme="dark">
                                                <div class="accordion" id="inhabilitadasaccord">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#inhabilitadas" aria-expanded="false" aria-controls="inhabilitadas">
                                                                Landing Pages Inhabilitadas
                                                            </button>
                                                        </h2>
                                                        <div id="inhabilitadas" class="accordion-collapse collapse" data-bs-parent="#inhabilitadasaccord">
                                                            <div class="accordion-body">

                                                                <table class="table align-middle table-striped text-center table-dark">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col"></th>
                                                                            <th scope="col">NOMBRE</th>
                                                                            <th scope="col">PROPIETARIO</th>
                                                                            <th scope="col">ACTIVAR</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        // ? Conteo de Landing Pages Inactivas
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
                                                                                    $query3 = $DB->query("SELECT idLanding FROM rellanding WHERE idUsuario = '$SesionID' AND activo = 1 ORDER BY idLanding DESC");
                                                                                    break;

                                                                                case '2':
                                                                                    $query3 = $DB->query("SELECT idLanding FROM rellanding WHERE idEmpresa = '$EmpresaID' AND activo = 1 ORDER BY idLanding DESC");
                                                                                    break;

                                                                                default:
                                                                                    $query = 0;
                                                                                    break;
                                                                            }
                                                                            while ($dato = mysqli_fetch_array($query3)) {
                                                                                $idLanding = $dato['idLanding'];

                                                                                $query4 = $DB->query("SELECT * FROM $nombreTabla WHERE id = '$idLanding' AND activo = 2");

                                                                                if (mysqli_num_rows($query4) != 0) {
                                                                                    while ($dato = mysqli_fetch_array($query4)) {
                                                                                        $idm = $dato['id'];
                                                                                        $copym = $dato['copy'];
                                                                                        $nombrem = $dato['nombre'];
                                                                                        $logom = $dato['logo'];

                                                                                        if (empty($logom)) {
                                                                                            $logom = "assets/img/null.png";
                                                                                        } else {
                                                                                            if (file_exists("landingpages/$idPlantilla/img/$idm/" . $logom)) {
                                                                                                $logom = "landingpages/$idPlantilla/img/$idm/" . $logom;
                                                                                            } else {
                                                                                                $logom = "assets/img/null.png";
                                                                                            }
                                                                                        }

                                                                                        if (empty($nombrem)) {
                                                                                            $nombrem = "NO REGISTRADO";
                                                                                        }
                                                                                        if (empty($copym)) {
                                                                                            $copym = "NO REGISTRADO";
                                                                                        }

                                                                                        echo ("
                                                                                        <tr>
                                                                                        <td><img src='$logom' alt='$nombrem' style='max-height: 40px; max-width: 40px; height: auto; width: auto;'></td>
                                                                                            <td>$nombrem</td>
                                                                                            <td>$copym</td>
                                                                                            <td><button class='btn btn-success rounded-4' value='$idm' onclick='confirmarHabilitar(this.value)'><i class='fa-solid fa-arrow-rotate-left me-2'></i>Reactivar</button></td>
                                                                                        </tr>
                                                                                    ");
                                                                                        $logom = '';
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                } else {
                                    ?>
                                    <div class="row justify-content-center align-items-center g-2 text-light vacio">
                                        <div class="col-md-2"><img src="assets/img/404.png" alt="404" class="rounded-4"></div>
                                        <div class="col">
                                            <div class="row justify-content-center align-items-center g-2">
                                                <div class="col ms-5">
                                                    <h2 class="mb-4">¡VACÍO!</h2>
                                                    <p class="fs-5">Cuando crees una landing page aparecerá aquí</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- ***** Creaciones Start ***** -->
                                    <div class="live-stream m-0">
                                        <div class="col-lg-12">
                                            <div class="heading-section">
                                                <h4><em>Empezar a</em> Crear</h4>
                                            </div>
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
                                                    <div class="item text-center mb-0" style="border-bottom: unset; padding-bottom: 0">
                                                        <h4 class="mb-2"><?php echo $plantilla ?><br><span><?php echo $categoria ?></span></h4>
                                                        <a href="<?php echo "landingpages/$idPlantilla/original.html" ?>" target="_blank"><img src="<?php echo "assets/landingpages/$idPlantilla.jpg" ?>" class="rounded-4" alt="Landing Page"></a>
                                                        <div class="text-center">
                                                            <ul mt-0>
                                                                <li><a href="<?php echo "landingpages/$idPlantilla/original.html" ?>" target="_blank" class="btn btn-light btn-sm rounded-4" style="width: 100%;"><i class="fa-solid fa-eye text-dark me-2"></i>Ver</a></li>
                                                                <li class="mb-1"><a href="<?php echo "landingpages/$idPlantilla/landing-form.php" ?>" target="_blank" class="btn btn-primary btn-sm rounded-4" style="width: 100%;"><i class="fa-solid fa-plus text-light me-2"></i>Crear</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <!-- ***** Creaciones End ***** -->
                                <?php } ?>
                            </div>
                        </div>
                        <!-- ***** Landing Pages End ***** -->
                    </div>
                </div>
            </div>
        </div>

        <!-------------- SCRIPTS -------------->

        <!-- // Función para copiar enlace al portapapeles -->
        <script>
            function copiar(boton) {
                var atributo = boton.getAttribute("portapapeles"); // Obtener el atributo deseado (en este caso, portapapeles)
                var elementoTemporal = document.createElement("textarea"); // Crear un elemento de texto oculto
                elementoTemporal.value = atributo;
                document.body.appendChild(elementoTemporal); // Añadir el elemento temporal al DOM
                elementoTemporal.select(); // Seleccionar y copiar el atributo al portapapeles
                document.execCommand("copy");
                document.body.removeChild(elementoTemporal); // Eliminar el elemento temporal
                alert("Enlace copiado al portapapeles"); // Mostrar un mensaje o realizar cualquier otra acción después de copiar
            }

            function confirmarInhabilitar(idlp) { // Mostrar una ventana de confirmación
                const confirmacion = window.confirm('¿Está seguro de inhabilitar esta landing page?');
                if (confirmacion) { // Si el usuario confirmó, ejecutar la función inhabilitar
                    inhabilitar(idlp);
                }
            }

            function inhabilitar(idlp) {
                fetch('landingpages/<?php echo "$idPlantilla"; ?>/inhabilitar.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: 'idlpi=' + idlp
                    })
                    .then(response => {
                        if (response.ok) { // Se pueden realizar acciones adicionales aquí si es necesario
                            // alert('Landing Page inhabilitada correctamente.');
                            location.reload()
                        } else {
                            alert('Error al inhabilitar la Landing Page, vuelva a intentarlo.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }

            function confirmarHabilitar(idlp) { // Mostrar una ventana de confirmación
                const confirmacion = window.confirm('¿Está seguro de habilitar esta landing page?');
                if (confirmacion) { // Si el usuario confirmó, ejecutar la función habilitar
                    habilitar(idlp);
                }
            }

            function habilitar(idlp) {
                fetch('landingpages/<?php echo "$idPlantilla"; ?>/inhabilitar.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: 'idlph=' + idlp
                    })
                    .then(response => {
                        if (response.ok) { // Se pueden realizar acciones adicionales aquí si es necesario
                            // alert('Landing Page habilitada correctamente.');
                            location.reload()
                        } else {
                            alert('Error al habilitar la Landing Page, vuelva a intentarlo.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
        </script>
        <script>
            document.getElementById('landing-form').addEventListener('click', function() {
                window.open('landingpages/1/landing-form.php', 'formularioPopup', 'width=400,height=400');
            });
        </script>

    <?php
    } else {
        header("Location: login.php");
    }

    include "footer.php"; ?>
</body>

</html>