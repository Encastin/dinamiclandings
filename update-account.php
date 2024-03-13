<!DOCTYPE html>
<html lang="es">

<head>
	<?php
	include("head.php");
	include("conexion.php");
	?>

	<title>Registro | DinamicLandings</title>
</head>

<body class="text-secondary">

	<!-- Header  -->
	<?php
	$nav = "LOGIN";
	include("navbar.php");
	// <!-- Header End -->

	if ($acceso != 0) {  // * El usuario ha iniciado sesión, permite el acceso a la página protegida

		// ? Verificar usuario existente
		$query = $DB->query("SELECT * FROM usuario WHERE idUsuario = '$SesionID' and activo = 1");

		if (mysqli_num_rows($query) > 0) { // * Usuario sí existe

			// Personales
			$nombreU = trim(strtoupper($_POST['nombreU']));
			$pApellido = trim(strtoupper($_POST['pApellido']));
			$sApellido = trim(strtoupper($_POST['sApellido']));
			$genero = $_POST['genero'];
			$fNacimiento = date("Y/m/d", strtotime($_POST['fNacimiento']));
			$telefonoU = $_POST['telefonoU'];
			// Empresariales
			$rol = trim(strtoupper($_POST['rol']));
			$nombreE = trim(strtoupper($_POST['nombreE']));
			$telefonoE = $_POST['telefonoE'];
			$estado = trim(strtoupper($_POST['estado']));
			$municipio = trim(strtoupper($_POST['municipio']));
			$colonia = trim(strtoupper($_POST['colonia']));
			$calle = trim(strtoupper($_POST['calle']));
			$numExt = trim($_POST['numext']);
			$numInt = trim($_POST['numint']);
			$referencias = trim(strtoupper($_POST['referencias']));
			// Ambos
			$descripcion = trim($_POST['descripcion']);

			// ? RECEPCIÓN DE AVATAR
			// Directorio donde se almacenarán las imágenes
			switch ($acceso) {
				case '1': // Usuarios
					$rutaCompleta = "assets/usuarios/$SesionID/avatar";
					$prefijo = 'usuarios';
					break;

				case '2': // Empresas
					$rutaCompleta = "assets/empresas/$SesionID/avatar";
					$prefijo = 'empresas';
					break;

				default: // Errores
					$rutaCompleta = "assets/errores/$SesionID/avatar";
					$prefijo = 'errores';
					break;
			}

			// Verificar si la carpeta ya existe antes de crearla
			if (!file_exists($rutaCompleta)) {
				if (mkdir($rutaCompleta, 0777, true)) {
				}
			}

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				// Verificar si se ha seleccionado un archivo
				if (isset($_FILES["avatar"]) && $_FILES["avatar"]["error"] == 0) {

					// Obtener la extensión del archivo
					$infoArchivo = pathinfo($_FILES["avatar"]["name"]);
					$extension = $infoArchivo["extension"];

					// Generar un nombre único para el archivo
					$avatar = "$prefijo/$SesionID/avatar/avatar.$extension";

					// Ruta completa del archivo de destino
					$rutaCompleta = "assets/$avatar";

					// Mover el archivo cargado al directorio de destino
					if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $rutaCompleta)) {
						// echo "Avatar subido y almacenado con éxito. Nombre: $avatar";
					} else {
						echo "Error al subir el avatar.";
					}
				} else {
					// echo "<br>No se seleccionó ningún archivo o hubo un error en la carga.<br>";
				}
			}

			// * Actualización de datos de USUARIO
			$query = $DB->query("UPDATE usuario SET nombre = '$nombreU', pApellido = '$pApellido', sApellido = '$sApellido', genero = '$genero', fNacimiento = '$fNacimiento', telefono = '$telefonoU' WHERE (idUsuario = '$SesionID');");

			if ($acceso == "1") { // * Actualizaión de foto de perfil y descripción en caso de ser cuenta PERSONAL

				if (empty($avatar) || $avatar == '' || $avatar == 'N/A' || $avatar == ' ') { // ? En caso de que no se suba avatar
					$query = $DB->query("SELECT avatar FROM usuario WHERE (idUsuario = '$SesionID');"); // ? En caso de que no se suba avatar verifica si ya existe uno en BD
					$dato = $query->fetch_assoc();
					$avatarBD = $dato['avatar'];
					if (empty($avatarBD) || $avatarBD == '' || $avatarBD == 'N/A' || $avatarBD == ' ') {
						$avatar = 'N/A';
					} else {
						$avatar = $avatarBD;
					}
				}

				$query = $DB->query("UPDATE usuario SET avatar = '$avatar', descripcion = '$descripcion' WHERE (idUsuario = '$SesionID');");
			}

			if ($acceso == "2") { // * Actualizaión de datos de EMPRESA en caso de ser cuenta EMPRESARIAL

				if (empty($avatar) || $avatar == '' || $avatar == 'N/A' || $avatar == ' ') { // ? En caso de que no se suba avatar
					$query = $DB->query("SELECT avatar FROM empresa WHERE (idEmpresa = '$EmpresaID');"); // ? En caso de que no se suba avatar verifica si ya existe uno en BD
					$dato = $query->fetch_assoc();
					$avatarBD = $dato['avatar'];
					if (empty($avatarBD) || $avatarBD == '' || $avatarBD == 'N/A' || $avatarBD == ' ') {
						$avatar = 'N/A';
					} else {
						$avatar = $avatarBD;
					}
				}

				// * Actualización de registro de EMPRESA
				$query = $DB->query("UPDATE empresa SET nombre = '$nombreE', telefono = '$telefonoE', estado = '$estado', municipio = '$municipio', colonia = '$colonia', calle = '$calle', numExt = '$numExt', numInt = '$numInt', referencias = '$referencias', avatar = '$avatar', descripcion = '$descripcion' WHERE (idEmpresa = '$EmpresaID');");

				// * Actualización de registro relacionado de USUARIO y EMPRESA
				$query = $DB->query("UPDATE relempresa SET rol = '$rol' WHERE (idUsuario = '$SesionID' AND idEmpresa = '$EmpresaID' AND activo = '1');");
			}

			// Creación de registro exitosa
			$mensaje = "Actualizado correctamente.";
			$exito = 1;
		} else {
			$mensaje = "Usuario no registrado, favor de verificar.";
		}

		// <!-- Mensaje de status -->
		if (isset($mensaje)) { ?>

			<script>
				alert("<?php echo $mensaje; ?>");

				<?php if ($exito == 1) { ?>
					window.location.href = "perfil.php";
				<?php } else { ?>
					history.back();
				<?php } ?>
			</script>
	<?php
		}
	} else {
		header("Location: login.php");
	}

	mysqli_close($DB);
	?>
</body>

</html>