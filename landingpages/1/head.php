<?php
error_reporting(0); // Para que no sean visibles los errores en pantalla
session_start(); // Renovar la sesión
if (isset($_SESSION['usuario'])) {  // * El usuario ha iniciado sesión personal
    $acceso = 1; // El usuario inició sesión personal
    $SesionID = $_SESSION['usuario']; // OBTENCIÓN DE USUARIO DE SESIÓN
    if (isset($_SESSION['idEmpresa'])) {  // * El usuario ha iniciado sesión empresarial
        $acceso = 2; // El usuario inició sesión empresarial
        $EmpresaID = $_SESSION['idEmpresa']; // OBTENCIÓN DE EMPRESA
    }
}
date_default_timezone_set('America/Mexico_City'); // Zona Horarioa de PHP
$hoy = date("Y/m/d h:i:s"); // Fecha actual en formato estándar
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Descripción -->
<meta name="description" content="DinamicLandings | Crea Landing Pages y Publicidad al Instante!">

<!-- Imagen al compartir -->
<meta property="og:image" content="https://netrabbit.online/dinamiclandings/assets/img/preview.png" />

<!-- Favicons -->
<link href="../../assets/img/favicon.png" rel="icon">
<link href="../../assets/img/favicon.png" rel="apple-touch-icon">

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<!-- Bootstrap core CSS -->
<!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- ESTILOS PERSONALIZADOS NET RABBIT -->
<link rel="stylesheet" href="../../assets/css/netrabbit.css">
<link rel="stylesheet" href="../../assets/css/navbar.css">

<!-- Additional CSS Files -->
<link rel="stylesheet" href="../../assets/css/fontawesome.css">
<link rel="stylesheet" href="../../assets/css/templatemo-cyborg-gaming.css">
<link rel="stylesheet" href="../../assets/css/owl.css">
<link rel="stylesheet" href="../../assets/css/animate.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


<!-- FUENTE -->
<!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy"> -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- CSS -->
<style>
    /* BACKGROUND PÁGINA */
    /* .bg {
        background: #f0f1e9;
    } */

    /* NAVBAR DE TÍTULO */
    .tituloSup,
    .navbar-brand:hover {
        text-align: center;
        font-weight: bold;
        /* color: #FFFF; */
    }

    /* TÍTULO DE SECTOR Y LÍNEA DIVISORA */
    .hr,
    .titulosector {
        color: #f8f9fa;
    }

    /* ETIQUETA DE INPUT */
    /* .tituloimput {
        color: #333333;
    } */

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
        background: #f8f9fa;
        border: 1px solid #f8f9fa;
        color: #212529;
    }

    .btn-form:hover {
        background: #c5c6c6;
        border: 1px solid #f8f9fa;
        color: #212529;
    }

    /* -------------- */
</style>