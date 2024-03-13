<?php
include("../../conexion.php");

$idlpi = $_POST["idlpi"];
$idlph = $_POST["idlph"];

if (!empty($idlpi)) {
    $DB->query("UPDATE landingpage SET activo = '2' WHERE (id = '$idlpi')");
} elseif (!empty($idlph)) {
    $DB->query("UPDATE landingpage SET activo = '1' WHERE (id = '$idlph')");
}
