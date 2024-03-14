<?php
error_reporting(0); // Para que no sean visibles los errores en pantalla
include("../../conexion.php");

$id = $_REQUEST['id'];
if (empty($id)) {
    $id = 0;
}

$query = $DB->query("SELECT * FROM landingpage WHERE id = $id AND activo = 1");
if (mysqli_num_rows($query) != 0) {
    while ($dato = mysqli_fetch_array($query)) {
        $id = $dato['id'];
        $nombre = $dato['nombre'];
        $titulo1 = $dato['titulo1'];
        $logo = $dato['logo'];
        $titulo2 = $dato['titulo2'];
        $hiperv1 = $dato['hiperv1'];
        $hiperv2 = $dato['hiperv2'];
        $hiperv3 = $dato['hiperv3'];
        $hiperv4 = $dato['hiperv4'];
        $hiperv5 = $dato['hiperv5'];
        // $background1 = $dato['background1'];
        $titulo3_1 = $dato['titulo3_1'];
        $titulo3_2 = $dato['titulo3_2'];
        $titulo3_3 = $dato['titulo3_3'];
        $titulo4 = $dato['titulo4'];
        // $background2 = $dato['background2'];
        $contenido1 = $dato['contenido1'];
        $titulo5 = $dato['titulo5'];
        // $imagenesc1 = $dato['imagenesc1'];
        // $imagenesc2 = $dato['imagenesc2'];
        // $imagenesc3 = $dato['imagenesc3'];
        $titulo6 = $dato['titulo6'];
        $contenido2 = $dato['contenido2'];
        $autor1 = $dato['autor1'];
        $cargo1 = $dato['cargo1'];
        $contenido3 = $dato['contenido3'];
        $autor2 = $dato['autor2'];
        $cargo2 = $dato['cargo2'];
        $contenido4 = $dato['contenido4'];
        $autor3 = $dato['autor3'];
        $cargo3 = $dato['cargo3'];
        $titulo7 = $dato['titulo7'];
        $descripcion = $dato['descripcion'];
        $copy = $dato['copy'];
        $disenado = $dato['disenado'];
        $link = $dato['link'];
        $author = $dato['author'];
        $description = $dato['description'];
        $keywords = $dato['keywords'];
        $lista = $dato['lista'];
        $borde1 = $dato['borde1'];
        $borde2 = $dato['borde2'];
        $boton = $dato['boton'];
        $btnletra = $dato['btnletra'];
        $colorT2 = $dato['colorT2'];
        $colorT3 = $dato['colorT3'];
        $colorT4 = $dato['colorT4'];
        $colorC1 = $dato['colorC1'];

        $whatsapp = $dato['whatsapp'];
        $mensajewhats = $dato['mensajewhats'];
        $facebook = $dato['facebook'];
        $instagram = $dato['instagram'];
        $twitter = $dato['twitter'];
        $youtube = $dato['youtube'];
    }

    $tittle = "Edición de $nombre";
} else {
    $tittle = "No Encontrado";
}

?>

<!doctype html>
<html lang="es">

<head>

    <?php include("head.php"); ?>

    <title><?php echo "$tittle"; ?></title>

</head>

<body>
    <?php

    if (mysqli_num_rows($query) != 0) {
    ?>

        <?php
        $LP = 1;
        include("../../navbar.php");
        ?>

        <div class="container">
            <div class="page-content">
                <div data-bs-theme="dark">

                    <form class="row g-3" action="guardar.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">

                        <!-- ASPECTOS GENERALES -->
                        <h2 class="titulosector">Aspectos Generales</h2>
                        <hr class="hr">

                        <div class="col-md-4">
                            <label class="form-label tituloimput">Nombre de Landing Page</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-a"></i></span>
                                <input type="text" class="form-control" name="nombre" placeholder="Introducir nombre de landing page" value="<?php echo $nombre; ?>" style="text-transform:uppercase;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Título de la pestaña</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                                <input type="text" class="form-control" name="tituloP" placeholder="Introducir título de la pestaña" value="<?php echo $titulo1; ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Logo</label>
                            <input class="form-control tituloimput" type="file" name="logo" id="logo">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label tituloimput">Link de la página principal</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-link"></i></span>
                                <input type="text" class="form-control" name="link" placeholder="Introducir link de la página principal" value="<?php echo $link; ?>">
                            </div>
                        </div>

                        <!-- MENU -->
                        <hr>
                        <h2 class="titulosector">Menú</h2>
                        <hr class="hr">

                        <div class="col-md-9">
                            <label class="form-label tituloimput">Título del menú</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="tutuloM" placeholder="Introducir título del menú" value="<?php echo $titulo2; ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">Color de título</label>
                            <input type="color" class="form-control form-control-color" name="colorT2" value="<?php echo $colorT2; ?>" title="Elegir color">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Hipervínculo 1</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                                <input type="text" class="form-control" name="hv1" placeholder="Introducir hipervínculo 1" value="<?php echo $hiperv1; ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Hipervínculo 2</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                                <input type="text" class="form-control" name="hv2" placeholder="Introducir hipervínculo 2" value="<?php echo $hiperv2; ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Hipervínculo 3</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                                <input type="text" class="form-control" name="hv3" placeholder="Introducir hipervínculo 3" value="<?php echo $hiperv3; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label tituloimput">Hipervínculo 4</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                                <input type="text" class="form-control" name="hv4" placeholder="Introducir hipervínculo 4" value="<?php echo $hiperv4; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label tituloimput">Hipervínculo 5</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                                <input type="text" class="form-control" name="hv5" placeholder="Introducir hipervínculo 5" value="<?php echo $hiperv5; ?>">
                            </div>
                        </div>

                        <!-- HERO -->
                        <hr>
                        <h2 class="titulosector">Hero</h2>
                        <hr class="hr">

                        <div class="col-md-9">
                            <label class="form-label tituloimput">Imágen de fondo</label>
                            <input class="form-control tituloimput" type="file" name="heroBg" id="heroBg">
                            <div class="form-text">(Preferible <strong>1366 x 914</strong> pixeles)</div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">Color de borde izquierdo</label>
                            <input type="color" class="form-control form-control-color" name="borde1" value="<?php echo $borde1; ?>" title="Elegir color">
                        </div>

                        <h3 class="titulosector">Título Principal</h3>
                        <div class="form-text">Para escribir en cursiva escriba la(s) palabras entre dos
                            asteríscos. Ejemplo: (<strong>**Hola Mundo**</strong>)</div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Color de título</label>
                            <input type="color" class="form-control form-control-color" name="colorT3" value="<?php echo $colorT3; ?>" title="Elegir color">
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Primera línea</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="tutuloP1" placeholder="Introducir primera línea" value="<?php echo $titulo3_1; ?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Segunda línea</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="tutuloP2" placeholder="Introducir segunda línea" value="<?php echo $titulo3_2; ?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label tituloimput">Tercera línea</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                                <input type="text" class="form-control" name="tutuloP3" placeholder="Introducir tercera línea" value="<?php echo $titulo3_3; ?>">
                            </div>
                        </div>

                        <!-- TARJETA SECUNDARIA -->
                        <hr>
                        <h2 class="titulosector">Tarjeta Secundaria</h2>
                        <hr class="hr">

                        <div class="col-md-5">
                            <label class="form-label tituloimput">Título de la tarjeta</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="tutuloTs" placeholder="Introducir título de la tarjeta" value="<?php echo $titulo4; ?>">
                            </div>
                            <div class="form-text">Para escribir en cursiva escriba la(s) palabras entre dos
                                asteríscos. Ejemplo: (<strong>**Hola Mundo**</strong>)</div>
                        </div>

                        <div class="col-md-3">
                            <label class="form-label tituloimput">Imágen de fondo</label>
                            <input class="form-control tituloimput" type="file" name="tarSbg" id="heroSbg">
                            <div class="form-text">(Preferible <strong>1600 x 450</strong> pixeles)</div>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label tituloimput">Color de título</label>
                            <input type="color" class="form-control form-control-color" name="colorT4" value="<?php echo $colorT4; ?>" title="Elegir color">
                        </div>
                        <div class="col-md-2">
                            <label class="form-label tituloimput">Color de borde derecho</label>
                            <input type="color" class="form-control form-control-color" name="borde2" value="<?php echo $borde2; ?>" title="Elegir color">
                        </div>
                        <div class="col-md-10">
                            <label class="form-label tituloimput">Contenido</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="contTs" placeholder="Introducir el contenido" rows="5"><?php echo $contenido1; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label tituloimput">Color de letra</label>
                            <input type="color" class="form-control form-control-color" name="colorC1" value="<?php echo $colorC1; ?>" title="Elegir color">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label tituloimput">Viñetas</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-list-ul"></i></span>
                                <textarea class="form-control" name="lista" placeholder="Introducir viñetas" rows="3"> <?php echo $lista; ?></textarea>
                            </div>
                        </div>

                        <!-- GALERÍA DE IMÁGENES -->
                        <hr>
                        <h2 class="titulosector">Galería de imágenes</h2>
                        <hr class="hr">

                        <div class="mb-3">
                            <label class="form-label tituloimput">Título de la galería</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="tutuloGi" placeholder="Introducir título de la galería" value="<?php echo $titulo5; ?>">
                            </div>
                            <div class="form-text">Para escribir en cursiva escriba la(s) palabras entre dos
                                asteríscos. Ejemplo: (<strong>**Hola Mundo**</strong>)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Imágenes de la columna 1</label>
                            <input class="form-control tituloimput" type="file" name="galC1[]" id="galC1" multiple>
                            <div class="form-text">(Preferible <strong>1080 x 720</strong> pixeles o <strong>500 x 850</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Imágenes de la columna 2</label>
                            <input class="form-control tituloimput" type="file" name="galC2[]" id="galC2" multiple>
                            <div class="form-text">(Preferible <strong>1080 x 720</strong> pixeles o <strong>500 x 850</strong> pixeles)</div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label tituloimput">Imágenes de la columna 3</label>
                            <input class="form-control tituloimput" type="file" name="galC3[]" id="galC3" multiple>
                            <div class="form-text">(Preferible <strong>1080 x 720</strong> pixeles o <strong>500 x 850</strong> pixeles)</div>
                        </div>

                        <!-- TESTIMONIOS -->
                        <hr>
                        <h2 class="titulosector">Testimonios</h2>
                        <hr class="hr">

                        <div class="mb-3">
                            <label class="form-label tituloimput">Título</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="tutuloT" placeholder="Introducir título" value="<?php echo $titulo6; ?>">
                            </div>
                            <div class="form-text">Para escribir en cursiva escriba la(s) palabras entre dos
                                asteríscos. Ejemplo: (<strong>**Hola Mundo**</strong>)</div>
                        </div>

                        <!-- 1 -->
                        <div class="mb-3">
                            <h3 class="titulosector">Testimonio 1</h3>
                            <label class="form-label tituloimput">Contenido</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="contT1" placeholder="Introducir el contenido" rows="4"><?php echo $contenido2; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label tituloimput">Autor</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" name="autorT1" placeholder="Introducir autor" value="<?php echo $autor1; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label tituloimput">Cargo</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
                                <input type="text" class="form-control" name="CargoT1" placeholder="Introducir cargo" value="<?php echo $cargo1; ?>">
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="mb-3">
                            <h3 class="titulosector">Testimonio 2</h3>
                            <label class="form-label tituloimput">Contenido</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="contT2" placeholder="Introducir el contenido" rows="4"><?php echo $contenido3; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label tituloimput">Autor</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" name="autorT2" placeholder="Introducir autor" value="<?php echo $autor2; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label tituloimput">Cargo</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
                                <input type="text" class="form-control" name="CargoT2" placeholder="Introducir cargo" value="<?php echo $cargo2; ?>">
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="mb-3">
                            <h3 class="titulosector">Testimonio 3</h3>
                            <label class="form-label tituloimput">Contenido</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                                <textarea class="form-control" name="contT3" placeholder="Introducir el contenido" rows="4"><?php echo $contenido4; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label tituloimput">Autor</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" name="autorT3" placeholder="Introducir autor" value="<?php echo $autor3; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label tituloimput">Cargo</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
                                <input type="text" class="form-control" name="CargoT3" placeholder="Introducir cargo" value="<?php echo $cargo3; ?>">
                            </div>
                        </div>

                        <!-- CONTACTO -->
                        <hr>
                        <h2 class="titulosector">Contacto</h2>
                        <hr class="hr">

                        <div class="mb-3">
                            <label class="form-label tituloimput">Título</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-t"></i></span>
                                <input type="text" class="form-control" name="contactoT" placeholder="Introducir título" value="<?php echo $titulo7; ?>">
                            </div>
                            <div class="form-text">Para escribir en cursiva escriba la(s) palabras entre dos
                                asteríscos. Ejemplo: (<strong>**Hola Mundo**</strong>)</div>
                        </div>
                        <label class="form-label tituloimput">Descripción</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                            <textarea class="form-control" name="contD" placeholder="Introducir una descripción" rows="2"><?php echo $descripcion; ?></textarea>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">Color del botón</label>
                            <input type="color" class="form-control form-control-color" name="boton" value="<?php echo $boton; ?>" title="Elegir color">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label tituloimput">Color de letra del botón</label>
                            <input type="color" class="form-control form-control-color" name="btnletra" value="<?php echo $btnletra; ?>" title="Elegir color">
                        </div>

                        <!-- REDES SOCIALES -->
                        <hr>
                        <h2 class="titulosector">Redes Sociales</h2>
                        <hr class="hr">

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-whatsapp me-2"></i>WhatsApp</span>
                                <input type="text" class="form-control" name="whatsapp" placeholder="Introducir número de WhatsApp (10 dígitos)" value="<?php echo $whatsapp; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-message"></i></span>
                                <textarea class="form-control" name="mensajewhats" placeholder='Mensaje de WhatsApp. Ejemplo: "¡Hola 👋! Vengo de tu landing page y me encantaría recibir más información."' rows="2"><?php echo $mensajewhats; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-facebook me-2"></i>Facebook</span>
                                <input type="text" class="form-control" name="facebook" placeholder="Introducir link de Facebook" value="<?php echo $facebook; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-instagram me-2"></i>Instagram</span>
                                <input type="text" class="form-control" name="instagram" placeholder="Introducir link de Instagram" value="<?php echo $instagram; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-twitter me-2"></i>Twitter</span>
                                <input type="text" class="form-control" name="twitter" placeholder="Introducir link de Twitter" value="<?php echo $twitter; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-brands fa-youtube me-2"></i>YouTube</span>
                                <input type="text" class="form-control" name="youtube" placeholder="Introducir link de YouTube" value="<?php echo $youtube; ?>">
                            </div>
                        </div>

                        <!-- COPYRIGHT -->
                        <hr>
                        <h2 class="titulosector">Pie de página</h2>
                        <hr class="hr">

                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-copyright me-2"></i>Copyright</span>
                                <input type="text" class="form-control" name="copyright" placeholder="Introducir empresa" value="<?php echo $copy; ?>">
                                <span class="input-group-text">Todos los derechos reservados.</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text">Diseñado por</span>
                                <input type="text" class="form-control" name="disenado" value="<?php echo $disenado; ?>" placeholder="Diseñado por:">
                            </div>
                        </div>

                        <!-- META -->
                        <hr>
                        <h2 class="titulosector">META</h2>
                        <hr class="hr">

                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                <input type="text" class="form-control" value="<?php echo $author; ?>" name="author" placeholder="Introducir autor">
                            </div>
                        </div>
                        <label class="form-label tituloimput">Description</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-quote-right"></i></span>
                            <textarea class="form-control" name="description" placeholder="Introducir description" rows="3"><?php echo $description; ?></textarea>
                        </div>
                        <label class="form-label tituloimput">Keywords</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-quote-right"></i></span>
                            <textarea class="form-control" name="keywords" placeholder="Introducir keywords" rows="7"><?php echo $keywords; ?></textarea>
                        </div>

                        <div class="input-group justify-content-md-center">
                            <button type="submit" class="btn btn-success btn-lg">Guardar</button>
                            <!-- <button type="submit" class="btn btn-form btn-lg">Guardar</button> -->
                        </div>
                    </form>

                </div>
            </div>
        </div>

    <?php
    } else { // --------------- CASO DE ID INHABILITADO O INEXISTENTE ----------------------------
    ?>
        <div class="container">
            <div class="page-content bg-light">
                <div style="text-align: center;">
                    <h2 class="titulosector">La landing page que intentas editar no existe o no está disponible</h2>
                    <hr class="hr">
                    <h4 class="tituloimput">Por favor verifica la dirección.</h4>
                    <br>
                    <br>
                    <a href="../../panellandings.php"><button class="btn btn-form btn-lg">Regresar</button></a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <?php include("../../footer.php"); ?>
</body>

</html>