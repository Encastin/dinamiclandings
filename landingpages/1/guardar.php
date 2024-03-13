<!DOCTYPE html>
<html lang="es">

<head>
	<?php
	include("head.php");
	include("../../conexion.php");
	?>

	<title>Guardando...</title>

</head>

<body class="text-dark">

	<div class="container" style="margin-top: 70px; margin-bottom: 50px;">
		<?php
		// OBTENCIÓN DE VARIABLES
		$id = $_REQUEST['id']; // Sí esta variable se recibe significa que se trata de una edición.

		$titulo1 = trim($_POST['tituloP']);
		$titulo2 = trim($_POST['tutuloM']);
		$hiperv1 = trim($_POST['hv1']);
		$hiperv2 = trim($_POST['hv2']);
		$hiperv3 = trim($_POST['hv3']);
		$hiperv4 = trim($_POST['hv4']);
		$hiperv5 = trim($_POST['hv5']);
		$titulo3_1 = trim($_POST['tutuloP1']);
		$titulo3_2 = trim($_POST['tutuloP2']);
		$titulo3_3 = trim($_POST['tutuloP3']);
		$titulo4 = trim($_POST['tutuloTs']);
		$contenido1 = trim($_POST['contTs']);
		$titulo5 = trim($_POST['tutuloGi']);
		$titulo6 = trim($_POST['tutuloT']);
		$contenido2 = trim($_POST['contT1']);
		$autor1 = trim($_POST['autorT1']);
		$cargo1 = trim($_POST['CargoT1']);
		$contenido3 = trim($_POST['contT2']);
		$autor2 = trim($_POST['autorT2']);
		$cargo2 = trim($_POST['CargoT2']);
		$contenido4 = trim($_POST['contT3']);
		$autor3 = trim($_POST['autorT3']);
		$cargo3 = trim($_POST['CargoT3']);
		$titulo7 = trim($_POST['contactoT']);
		$descripcion = trim($_POST['contD']);
		$copy = trim($_POST['copyright']);
		$disenado = trim($_POST['disenado']);
		$link = trim($_POST['link']);
		$borde1 = trim($_POST['borde1']);
		$borde2 = trim($_POST['borde2']);
		$author = trim($_POST['author']);
		$description = trim($_POST['description']);
		$keywords = trim($_POST['keywords']);
		$lista = trim($_POST['lista']);
		$boton = trim($_POST['boton']);
		$btnletra = trim($_POST['btnletra']);
		$nombre = trim(strtoupper($_POST['nombre']));
		$colorT2 = trim($_POST['colorT2']);
		$colorT3 = trim($_POST['colorT3']);
		$colorT4 = trim($_POST['colorT4']);
		$colorC1 = trim($_POST['colorC1']);

		$whatsapp = trim($_POST['whatsapp']);
		$mensajewhats = trim($_POST['mensajewhats']);
		$facebook = trim($_POST['facebook']);
		$twitter = trim($_POST['twitter']);
		$instagram = trim($_POST['instagram']);
		$youtube = trim($_POST['youtube']);

		// RECEPCIÓN DE IMÁGENES

		// Directorio donde se almacenarán las imágenes
		if (!empty($id)) {
			$directorioDestino = "img/$id/";

			$rutaCompleta = "img/$id";
		} else {

			$query = $DB->query("SELECT MAX(id) from landingpage");
			while ($dato = mysqli_fetch_array($query)) {
				$maxid = $dato['MAX(id)'] + 1;
			}

			$directorioDestino = "img/$maxid/";
			// Directorio donde se creará la carpeta de imágenes
			$rutaCompleta = "img/$maxid";
		}

		// Verificar si la carpeta ya existe antes de crearla
		if (!file_exists($rutaCompleta)) {
			if (mkdir($rutaCompleta, 0777, true)) {
			}
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Verificar si se ha seleccionado un archivo
			if (isset($_FILES["logo"]) && $_FILES["logo"]["error"] == 0) {

				// Obtener la extensión del archivo
				$infoArchivo = pathinfo($_FILES["logo"]["name"]);
				$extension = $infoArchivo["extension"];

				// Generar un nombre único para el archivo
				$logo = "logo.$extension";

				// Ruta completa del archivo de destino
				$rutaCompleta = $directorioDestino . $logo;

				// Mover el archivo cargado al directorio de destino
				if (move_uploaded_file($_FILES["logo"]["tmp_name"], $rutaCompleta)) {
					echo "Logo subido y almacenado con éxito. Nombre: $logo";
				} else {
					echo "Error al subir el Logo.";
				}
			} else {
				echo "<br>No se seleccionó ningún archivo o hubo un error en la carga.<br>";
			}
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (isset($_FILES["heroBg"]) && $_FILES["heroBg"]["error"] == 0) {

				$infoArchivo = pathinfo($_FILES["heroBg"]["name"]);
				$extension = $infoArchivo["extension"];
				$background1 = "heroBg.$extension";
				$rutaCompleta = $directorioDestino . $background1;

				if (move_uploaded_file($_FILES["heroBg"]["tmp_name"], $rutaCompleta)) {
					echo "Background subido y almacenado con éxito. Nombre: $background1<br>";
				} else {
					echo "Error al subir el Background.<br>";
				}
			} else {
				echo "<br>No se seleccionó ningún archivo o hubo un error en la carga.<br>";
			}
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (isset($_FILES["tarSbg"]) && $_FILES["tarSbg"]["error"] == 0) {

				$infoArchivo = pathinfo($_FILES["tarSbg"]["name"]);
				$extension = $infoArchivo["extension"];
				$background2 = "tarSbg.$extension";
				$rutaCompleta = $directorioDestino . $background2;

				if (move_uploaded_file($_FILES["tarSbg"]["tmp_name"], $rutaCompleta)) {
					echo "Background 2 subido y almacenado con éxito. Nombre: $background2";
				} else {
					echo "Error al subir el Background 2.";
				}
			} else {
				echo "No se seleccionó ningún archivo o hubo un error en la carga.<br>";
			}
		}

		// IMÁGENES MÚLTIPLES
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (isset($_FILES["galC1"]) && count($_FILES["galC1"]["name"]) > 0) {

				// Iterar sobre los archivos cargados
				for ($i = 0; $i < count($_FILES["galC1"]["name"]); $i++) {
					$archivoTemporal = $_FILES["galC1"]["tmp_name"][$i];

					// Obtener la extensión del archivo
					$infoArchivo = pathinfo($_FILES["galC1"]["name"][$i]);
					$extension = $infoArchivo["extension"];

					// Generar un nombre único para el archivo
					$galC1 = "galC1_$i.$extension";

					// Ruta completa del archivo de destino
					$rutaCompleta = $directorioDestino . $galC1;

					// Mover el archivo cargado al directorio de destino
					if (move_uploaded_file($archivoTemporal, $rutaCompleta)) {
						echo "Imagen subida y almacenada con éxito. Nuevo nombre: $galC1<br>";
					} else {
						echo "Error al subir la imagen: $galC1<br>";
					}
					$imagenesc1 = "$imagenesc1,$galC1";
				}
			} else {
				echo "No se seleccionaron archivos o hubo un error en la carga.";
			}
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (isset($_FILES["galC2"]) && count($_FILES["galC2"]["name"]) > 0) {

				for ($i = 0; $i < count($_FILES["galC2"]["name"]); $i++) {
					$archivoTemporal = $_FILES["galC2"]["tmp_name"][$i];
					$infoArchivo = pathinfo($_FILES["galC2"]["name"][$i]);
					$extension = $infoArchivo["extension"];
					$galC2 = "galC2_$i.$extension";

					$rutaCompleta = $directorioDestino . $galC2;

					if (move_uploaded_file($archivoTemporal, $rutaCompleta)) {
						echo "Imagen subida y almacenada con éxito. Nuevo nombre: $galC2<br>";
					} else {
						echo "Error al subir la imagen: $galC2<br>";
					}
					$imagenesc2 = "$imagenesc2,$galC2";
				}
			} else {
				echo "No se seleccionaron archivos o hubo un error en la carga.";
			}
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (isset($_FILES["galC3"]) && count($_FILES["galC3"]["name"]) > 0) {

				for ($i = 0; $i < count($_FILES["galC3"]["name"]); $i++) {
					$archivoTemporal = $_FILES["galC3"]["tmp_name"][$i];
					$infoArchivo = pathinfo($_FILES["galC3"]["name"][$i]);
					$extension = $infoArchivo["extension"];
					$galC3 = "galC3_$i.$extension";

					$rutaCompleta = $directorioDestino . $galC3;

					if (move_uploaded_file($archivoTemporal, $rutaCompleta)) {
						echo "Imagen subida y almacenada con éxito. Nuevo nombre: $galC3<br>";
					} else {
						echo "Error al subir la imagen: $galC3<br>";
					}
					$imagenesc3 = "$imagenesc3,$galC3";
				}
			} else {
				echo "No se seleccionaron archivos o hubo un error en la carga.";
			}
		}

		if ($imagenesc1 == ',galC1_0.') {
			$imagenesc1 = '';
		}
		if ($imagenesc2 == ',galC2_0.') {
			$imagenesc2 = '';
		}
		if ($imagenesc3 == ',galC3_0.') {
			$imagenesc3 = '';
		}

		if (!empty($id)) { // Modificación de Landing Page

			$query = $DB->query("SELECT * FROM landingpage WHERE id = '$id'");
			while ($dato = mysqli_fetch_array($query)) {
				if ($logo == '') {
					$logo = $dato['logo'];
				}
				if ($background1 == '') {
					$background1 = $dato['background1'];
				}
				if ($background2 == '') {
					$background2 = $dato['background2'];
				}
				if ($imagenesc1 == ',galC1_0.' || $imagenesc1 == '') {
					$imagenesc1 = $dato['imagenesc1'];
				}
				if ($imagenesc2 == ',galC2_0.' || $imagenesc2 == '') {
					$imagenesc2 = $dato['imagenesc2'];
				}
				if ($imagenesc3 == ',galC3_0.' || $imagenesc3 == '') {
					$imagenesc3 = $dato['imagenesc3'];
				}
			}

			// Actualización de Registro
			$query = $DB->query("UPDATE landingpage SET nombre = '$nombre', titulo1 = '$titulo1', logo = '$logo', titulo2 = '$titulo2', hiperv1 = '$hiperv1', hiperv2 = '$hiperv2', hiperv3 = '$hiperv3', hiperv4 = '$hiperv4', hiperv5 = '$hiperv5', background1 = '$background1', titulo3_1 = '$titulo3_1', titulo3_2 = '$titulo3_2', titulo3_3 = '$titulo3_3', titulo4 = '$titulo4', background2 = '$background2', contenido1 = '$contenido1', titulo5 = '$titulo5', imagenesc1 = '$imagenesc1', imagenesc2 = '$imagenesc2', imagenesc3 = '$imagenesc3', titulo6 = '$titulo6', contenido2 = '$contenido2', contenido3 = '$contenido3', contenido4 = '$contenido4', autor1 = '$autor1', cargo1 = '$cargo1', autor2 = '$autor2', cargo2 = '$cargo2', autor3 = '$autor3', cargo3 = '$cargo3', titulo7 = '$titulo7', descripcion = '$descripcion', copy = '$copy', disenado = '$disenado', link = '$link', borde1 = '$borde1', borde2 = '$borde2', author = '$author', description = '$description', keywords = '$keywords', lista = '$lista', boton = '$boton', btnletra = '$btnletra', colorT2 = '$colorT2', colorT3 = '$colorT3', colorT4 = '$colorT4', colorC1 = '$colorC1', whatsapp = '$whatsapp', mensajewhats = '$mensajewhats', facebook = '$facebook', twitter = '$twitter', instagram = '$instagram', youtube = '$youtube', fecha = '$hoy' WHERE (id = '$id')");

		?>
			<script>
				window.location.href = "index.php?id=<?php echo $id; ?>";
			</script>
			<?php
		} else {

			// Crea registro
			$query = $DB->query("INSERT INTO landingpage VALUES ('', '$nombre', '$titulo1', '$logo', '$titulo2', '$hiperv1', '$hiperv2', '$hiperv3', '$hiperv4', '$hiperv5', '$background1', '$titulo3_1', '$titulo3_2', '$titulo3_3', '$titulo4', '$background2', '$contenido1', '$titulo5', '$imagenesc1', '$imagenesc2', '$imagenesc3', '$titulo6', '$contenido2', '$autor1', '$cargo1', '$contenido3', '$autor2', '$cargo2', '$contenido4', '$autor3', '$cargo3', '$titulo7', '$descripcion', '$copy', '$disenado', '$link', '$borde1', '$borde2', '$author', '$description', '$keywords', '$lista', '$boton', '$btnletra', '$colorT2', '$colorT3', '$colorT4', '$colorC1', '$whatsapp', '$mensajewhats', '$facebook', '$instagram', '$twitter', '$youtube', '$hoy', '1')");

			$query = $DB->query("SELECT MAX(id) FROM landingpage");
			while ($dato = mysqli_fetch_array($query)) {
				$id = $dato['MAX(id)'];
			}

			switch ($acceso) {
				case '1':
					// Asocia registro con el usuario
					$query = $DB->query("INSERT INTO rellanding VALUES ('', '$SesionID', '0', '1', '$id', '$hoy', '1')");
					break;

				case '2':
					// Asocia registro con la empresa
					$query = $DB->query("INSERT INTO rellanding VALUES ('', '0', '$EmpresaID', '1', '$id', '$hoy', '1')");
					break;

				default:
			?>
					<script>
						alert("Ha ocurrido un error, vuelve a intentarlo.");
						history.back();
					</script>
			<?php
					break;
			}

			?>
			<script>
				window.location.href = "index.php?id=<?php echo $id; ?>";
			</script>
		<?php
		}
		?>
	</div>
</body>

</html>