<!DOCTYPE html>
<html lang="es">

<head>
	<?php
	include("head.php");
	include("conexion.php");
	?>

	<title>Registro | DinamicLandings</title>
</head>

<body class="text-light">

	<!-- Header  -->
	<?php
	$nav = "LOGIN";
	include("navbar.php");
	?>
	<!-- Header End -->

	<?php
	// ? Verificar email existente
	$query = $DB->query("SELECT * FROM usuario WHERE email = '$_POST[email]'");

	if (mysqli_num_rows($query) == 0) { // * Correo electrónico dispnible

		$password = trim($_POST['password']);
		$confirmpassword = trim($_POST['confirmpassword']);
		$terminos = $_POST['terminos'];

		if ($password == $confirmpassword) { // * Nueva contraseña y su confirmación son iguales

			if ($terminos == 1) { // * Términos y condiciones aceptados

				$tipoCuenta = $_POST['tipoCuenta'];
				$nombreU = trim(strtoupper($_POST['nombreU']));
				$pApellido = trim(strtoupper($_POST['pApellido']));
				$sApellido = trim(strtoupper($_POST['sApellido']));
				$genero = $_POST['genero'];
				$fNacimiento = date("Y/m/d", strtotime($_POST['fNacimiento']));
				$telefonoU = $_POST['telefonoU'];
				$email = trim($_POST['email']);
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
				$ofertas = $_POST['ofertas'];

				// ? Cifrado de contraseña
				$en1 = 'C9fBxl1EWt-';
				$en2 = '-YTL1/M8j==';
				$key = $en1 . $password . $en2;
				$password = password_hash($password, PASSWORD_BCRYPT);

				// * Registro de usuario en BD
				$query = $DB->query("INSERT INTO usuario VALUES ('', '$tipoCuenta', '$nombreU', '$pApellido', '$sApellido', '$genero', '$fNacimiento', '$telefonoU', '$email', '$password', '$key', '$ofertas', '$terminos', 'N/A', 'N/A', '$hoy', '1');");

				if ($tipoCuenta == "E") { // * Registro de Empresa en caso de ser cuenta EMPRESARIAL

					// * Selección de último registro de usuario
					$query = $DB->query("SELECT max(idUsuario) FROM usuario LIMIT 1;");
					$dato = $query->fetch_assoc();
					$idUsuario = $dato['max(idUsuario)'];

					// * Registro de empresa en BD
					$query = $DB->query("INSERT INTO empresa VALUES ('', '$nombreE', '$telefonoE', '$estado', '$municipio', '$colonia', '$calle', '$numExt', '$numInt', '$referencias', 'N/A', 'N/A', '$hoy', '1');");

					// * Selección de último registro de empresa
					$query = $DB->query("SELECT max(idEmpresa) FROM empresa LIMIT 1;");
					$dato = $query->fetch_assoc();
					$idEmpresa = $dato['max(idEmpresa)'];

					// * Asociando usuario y empresa en BD
					$query = $DB->query("INSERT INTO relempresa VALUES ('', '$idUsuario', '$idEmpresa', '$rol', '$hoy', '1');");
				}

				// Creación de registro exitosa
				$mensaje = "¡Registrado correctamente! Inicie sesión con email y contraseña.";
				$exito = 1;
			} else {
				$mensaje = "Debes aceptar los términos y condiciones para registrarse.";
			}
		} else {
			$mensaje = "La contraseña y la confirmación no coinciden, favor de verificar.";
		}
	} else {
		$mensaje = "Correo electrónico ya registrado, favor de verificar.";
	}

	$emailsoporte = 'vicmah9@gmail.com';

	// <!-- Mensaje de status -->
	if (isset($mensaje)) { ?>

		<script>
			alert("<?php echo $mensaje; ?>");

			<?php if ($exito == 1) { ?>
				window.location.href = "login.php";
			<?php } else { ?>
				history.back();
			<?php } ?>
		</script>

	<?php
		mysqli_close($DB);
	}
	?>
</body>

</html>