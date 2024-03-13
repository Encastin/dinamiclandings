<?php
include "head.php";
include "conexion.php";

class AuthenticationHandler
{

	public mysqli $conn;

	public function authenticate($email, $password)
	{
		$authenticated = false;

		// Consulta preparada para evitar inyección SQL
		$query = "SELECT password, idUsuario, tipoCuenta FROM usuario WHERE email = ? AND activo = 1";
		$stmt = $this->conn->prepare($query);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->store_result();

		if ($stmt->num_rows == 1) {
			$stmt->bind_result($hash, $idUsuario, $tipoCuenta);
			$stmt->fetch();

			// Verificar si la contraseña es correcta
			if (password_verify($password, $hash)) {
				// Establecer variables de sesión
				$_SESSION['loggedin'] = true;
				$_SESSION['usuario'] = $idUsuario;

				if ($tipoCuenta == "E") {
					// Obtener el ID de la empresa asociada al usuario
					$query = "SELECT idEmpresa FROM relempresa WHERE idUsuario = ? AND activo = 1";
					$stmt = $this->conn->prepare($query);
					$stmt->bind_param("i", $idUsuario);
					$stmt->execute();
					$stmt->store_result();

					if ($stmt->num_rows == 1) {
						$stmt->bind_result($idEmpresa);
						$stmt->fetch();
						$_SESSION['idEmpresa'] = $idEmpresa;
					}
				}

				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1 * 60); // 1 minute
				$authenticated = true;
			}
		}

		return $authenticated;
	}
}

// Uso:
$handler = new AuthenticationHandler();
$handler->conn = $DB; // $DB es tu conexión a la base de datos

$email = $_POST['email'];
$password = $_POST['password'];

if ($handler->authenticate($email, $password)) {
	header("Location: index.php");
} else {
	$error = "Correo electrónico o contraseña incorrecto, favor de verificar.";
}

// ! <!-- Mensaje de error (se muestra si las credenciales son incorrectas) -->
if (isset($error)) { ?>
	<script>
		alert("<?php echo $error; ?>")
		history.back();
	</script>
<?php } ?>