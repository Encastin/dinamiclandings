    <!-- Preloader Start -->
    <!-- <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <!-- Preloader End -->
    <?php
    if ($LP == 1) {
        $pre = "../../";
    }
    ?>

    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a href="<?php echo "$pre"; ?>index.php" class="logo">
                    <img src="<?php echo "$pre"; ?>assets/img/logo.png" alt="DinamicLandings">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse collapse-right" id="navbarNav">
                    <?php if ($nav != "LOGIN") { ?>
                        <ul class="navbar-nav ms-md-auto gap-2">
                            <li class="nav-item rounded">
                                <?php if ($nav == 1) { ?>
                                    <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-plus me-2"></i>Crear</a>
                                <?php } else { ?>
                                    <a class="nav-link" aria-current="page" href="<?php echo "$pre"; ?>index.php"><i class="fa-solid fa-plus me-2"></i>Crear</a>
                                <?php  } ?>
                            </li>
                            <li class="nav-item rounded">
                                <?php if ($nav == 2) { ?>
                                    <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-globe me-2"></i></i>Mis Landing Pages</a>
                                <?php } else { ?>
                                    <a class="nav-link" aria-current="page" href="<?php echo "$pre"; ?>panellandings.php"><i class="fa-solid fa-globe me-2"></i></i>Mis Landing Pages</a>
                                <?php  } ?>
                            </li>
                            <li class="nav-item rounded">
                                <?php if ($nav == 3) { ?>
                                    <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-bullhorn me-2"></i></i>Publicidad</a>
                                <?php } else { ?>
                                    <a class="nav-link" aria-current="page" href="<?php echo "$pre"; ?>panelpublicidad.php"><i class="fa-solid fa-bullhorn me-2"></i></i>Publicidad</a>
                                <?php
                                }

                                $query = $DB->query("SELECT tipoCuenta, avatar FROM usuario WHERE idUsuario = '$SesionID'");
                                $dato = $query->fetch_assoc();
                                $tipoCuenta = $dato['tipoCuenta'];
                                $avatar = $dato['avatar'];

                                if ($tipoCuenta == "E") {
                                    $query = $DB->query("SELECT avatar FROM empresa WHERE idEmpresa = '$EmpresaID'");
                                    $dato = $query->fetch_assoc();
                                    $avatar = $dato['avatar'];
                                }

                                switch ($tipoCuenta) {
                                    case 'P':
                                        $cuenta = "Personal";
                                        if ($avatar == "N/A") {
                                            $avatar = "img/usuario.png";
                                        }
                                        break;
                                    case 'E':
                                        $cuenta = "Empresarial";
                                        if ($avatar == "N/A") {
                                            $avatar = "img/empresa.png";
                                        }
                                        break;

                                    default:
                                        $cuenta = "$cuenta";
                                        break;
                                }
                                ?>
                            </li>
                            <li class="nav-item dropdown perfil-nav">
                                <?php if ($nav == 4) { ?>
                                    <a class="dropdown-toggle text-light active" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#"><img src="<?php echo "$pre"; ?>assets/<?php echo $avatar ?>" class="perfil me-1" alt="Perfil"></a>

                                <?php } else { ?>
                                    <a class="dropdown-toggle text-light" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#"><img src="<?php echo "$pre"; ?>assets/<?php echo $avatar ?>" class="perfil me-1" alt="Perfil"></a>
                                <?php } ?>

                                <ul class="dropdown-menu dropdown-menu-end background-dark" aria-labelledby="navbarDropdown">
                                    <?php
                                    if (isset($acceso)) {  // * El usuario ha iniciado sesión, muestra cierre de sesión
                                    ?>
                                        <li><a class="dropdown-item" href="<?php echo "$pre"; ?>perfil.php"><i class="fa-solid fa-user me-2"></i>Perfil</a></li>
                                        <li>
                                            <hr class="dropdown-divider m-0"> <!-- División -->
                                        </li>
                                        <li><a class="dropdown-item text-danger" href="<?php echo "$pre"; ?>logout.php"><i class="fa-solid fa-right-from-bracket me-2"></i>Cerrar Sesión</a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </nav>
    </div>