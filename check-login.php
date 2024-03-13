<?php
include("head.php");
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") { // ?Verificar si se envió el formulario

	$email = trim($_POST['email']);

	// ? Consulta SQL para buscar el usuario en la base de datos
	$query = mysqli_query($DB, "SELECT password, idUsuario, tipoCuenta FROM usuario WHERE email ='$email' AND activo = 1");

	if (mysqli_num_rows($query) != 0) { // * El usuario fue encontrado

		$dato = mysqli_fetch_assoc($query);
		$hash = $dato['password'];
		$idUsuario = $dato['idUsuario'];
		$tipoCuenta = $dato['tipoCuenta'];

		if (password_verify($_POST['password'], $hash)) { // * Desencriptado de contraseña

			$_SESSION['loggedin'] = true;
			$_SESSION['usuario'] = $idUsuario;

			if ($tipoCuenta == "E") {
				$query = mysqli_query($DB, "SELECT idEmpresa FROM relempresa WHERE idUsuario ='$idUsuario' AND activo = 1");
				$dato = mysqli_fetch_assoc($query);
				$idEmpresa = $dato['idEmpresa'];
				$_SESSION['idEmpresa'] = $idEmpresa;
			}

			$_SESSION['start'] = time();
			$_SESSION['expire'] = $_SESSION['start'] + (1 * 60);

			header("Location: index.php");
		} else {
			// ! Contraseña incorrecta
			$error = "Correo electrónico o contraseña incorrecto, favor de verificar.";
		}
	} else {
		// ! Usuario no encontrado
		$error = "Usuario no encontrado, favor de verificar.";
	}
}

// ! <!-- Mensaje de error (se muestra si las credenciales son incorrectas) -->
if (isset($error)) { ?>
	<script>
		alert("<?php echo $error; ?>")
		history.back();
	</script>
<?php } ?>