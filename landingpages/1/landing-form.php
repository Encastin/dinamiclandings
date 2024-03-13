<?php
include("../../conexion.php");
?>

<!doctype html>
<html lang="es">

<head>

    <?php include("head.php"); ?>

    <title>Nueva Landing Page</title>

</head>

<body>

    <?php
    $LP = 1;
    include("../../navbar.php");
    ?>

    <div class="container">
        <div class="page-content">
            <div data-bs-theme="dark">

                <form id="formulario" class="row g-3" action="guardar.php" method="POST" enctype="multipart/form-data">

                    <!-- ASPECTOS GENERALES -->
                    <h2 class="titulosector">Aspectos Generales</h2>
                    <hr class="hr">

                    <div class="col-md-4">
                        <label class="form-label tituloimput">Nombre de Landing Page</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-a"></i></span>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Introducir nombre de landing page" style="text-transform:uppercase;">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label tituloimput">Título de la pestaña</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                            <input type="text" class="form-control" name="tituloP" id="tituloP" placeholder="Introducir título de la pestaña">
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
                            <input type="text" class="form-control" name="link" id="link" placeholder="Introducir link de la página principal">
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
                            <input type="text" class="form-control" name="tutuloM" id="tutuloM" placeholder="Introducir título del menú">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label tituloimput">Color de título</label>
                        <input type="color" class="form-control form-control-color" name="colorT2" id="colorT2" value="#F1F1F1" title="Elegir color">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label tituloimput">Hipervínculo 1</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                            <input type="text" class="form-control" name="hv1" id="hv1" placeholder="Introducir hipervínculo 1">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label tituloimput">Hipervínculo 2</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                            <input type="text" class="form-control" name="hv2" id="hv2" placeholder="Introducir hipervínculo 2">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label tituloimput">Hipervínculo 3</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                            <input type="text" class="form-control" name="hv3" id="hv3" placeholder="Introducir hipervínculo 3">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label tituloimput">Hipervínculo 4</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                            <input type="text" class="form-control" name="hv4" id="hv4" placeholder="Introducir hipervínculo 4">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label tituloimput">Hipervínculo 5</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                            <input type="text" class="form-control" name="hv5" id="hv5" placeholder="Introducir hipervínculo 5">
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
                        <input type="color" class="form-control form-control-color" name="borde1" id="borde1" value="#BE2525" title="Elegir color">
                    </div>

                    <h3 class="titulosector">Título Principal</h3>
                    <div class="form-text">Para escribir en cursiva escriba la(s) palabras entre dos
                        asteríscos. Ejemplo: (<strong>**Hola Mundo**</strong>)</div>
                    <div class="col-md-4">
                        <label class="form-label tituloimput">Color de título</label>
                        <input type="color" id="colorT3" name="colorT3" class="form-control form-control-color" value="#F1F1F1" title="Elegir color">
                    </div>
                    <div class="mb-3">
                        <label class="form-label tituloimput">Primera línea</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                            <input type="text" class="form-control" name="tutuloP1" id="tutuloP1" placeholder="Introducir primera línea">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label tituloimput">Segunda línea</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                            <input type="text" class="form-control" name="tutuloP2" id="tutuloP2" placeholder="Introducir segunda línea">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label tituloimput">Tercera línea</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                            <input type="text" class="form-control" name="tutuloP3" id="tutuloP3" placeholder="Introducir tercera línea">
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
                            <input type="text" class="form-control" name="tutuloTs" id="tutuloTs" placeholder="Introducir título de la tarjeta">
                        </div>
                        <div class="form-text">Para escribir en cursiva escriba la(s) palabras entre dos
                            asteríscos. Ejemplo: (<strong>**Hola Mundo**</strong>)</div>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label tituloimput">Imágen de fondo</label>
                        <input class="form-control tituloimput" type="file" name="tarSbg" id="tarSbg">
                        <div class="form-text">(Preferible <strong>1600 x 450</strong> pixeles)</div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label tituloimput">Color de título</label>
                        <input type="color" class="form-control form-control-color" name="colorT4" id="colorT4" value="#444444" title="Elegir color">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label tituloimput">Color de borde derecho</label>
                        <input type="color" class="form-control form-control-color" name="borde2" id="borde2" value="#BE2525" title="Elegir color">
                    </div>
                    <div class="col-md-10">
                        <label class="form-label tituloimput">Contenido</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                            <textarea class="form-control" name="contTs" id="contTs" placeholder="Introducir el contenido" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label tituloimput">Color de letra</label>
                        <input type="color" class="form-control form-control-color" name="colorC1" id="colorC1" value="#444444" title="Elegir color">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label tituloimput">Viñetas</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-list-ul"></i></span>
                            <textarea class="form-control" name="lista" id="lista" placeholder="Introducir viñetas" rows="3"></textarea>
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
                            <input type="text" class="form-control" name="tutuloGi" id="tutuloGi" placeholder="Introducir título de la galería">
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
                            <input type="text" class="form-control" name="tutuloT" id="tutuloT" placeholder="Introducir título">
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
                            <textarea class="form-control" name="contT1" id="contT1" placeholder="Introducir el contenido" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label tituloimput">Autor</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="autorT1" id="autorT1" placeholder="Introducir autor">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label tituloimput">Cargo</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
                            <input type="text" class="form-control" name="CargoT1" id="CargoT1" placeholder="Introducir cargo">
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="mb-3">
                        <h3 class="titulosector">Testimonio 2</h3>
                        <label class="form-label tituloimput">Contenido</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                            <textarea class="form-control" name="contT2" id="contT2" placeholder="Introducir el contenido" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label tituloimput">Autor</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="autorT2" id="autorT2" placeholder="Introducir autor">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label tituloimput">Cargo</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
                            <input type="text" class="form-control" name="CargoT2" id="CargoT2" placeholder="Introducir cargo">
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="mb-3">
                        <h3 class="titulosector">Testimonio 3</h3>
                        <label class="form-label tituloimput">Contenido</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                            <textarea class="form-control" name="contT3" id="contT3" placeholder="Introducir el contenido" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label tituloimput">Autor</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="autorT3" id="autorT3" placeholder="Introducir autor">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label tituloimput">Cargo</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
                            <input type="text" class="form-control" name="CargoT3" id="CargoT3" placeholder="Introducir cargo">
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
                            <input type="text" class="form-control" name="contactoT" id="contactoT" placeholder="Introducir título">
                        </div>
                        <div class="form-text">Para escribir en cursiva escriba la(s) palabras entre dos
                            asteríscos. Ejemplo: (<strong>**Hola Mundo**</strong>)</div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label tituloimput">Descripción</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                            <textarea class="form-control" name="contD" id="contD" placeholder="Introducir una descripción" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label tituloimput">Color del botón</label>
                        <input type="color" class="form-control form-control-color" name="boton" id="boton" value="#BE2525" title="Elegir color">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label tituloimput">Color de letra del botón</label>
                        <input type="color" class="form-control form-control-color" name="btnletra" id="btnletra" value="#F1F1F1" title="Elegir color">
                    </div>

                    <!-- REDES SOCIALES -->
                    <hr>
                    <h2 class="titulosector">Redes Sociales</h2>
                    <hr class="hr">

                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-brands fa-whatsapp me-2"></i>WhatsApp</span>
                            <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="Introducir número de WhatsApp (10 dígitos)">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-message"></i></span>
                            <textarea class="form-control" name="mensajewhats" id="mensajewhats" placeholder='Mensaje de WhatsApp. Ejemplo: "¡Hola 👋! Vengo de tu landing page y me encantaría recibir más información."' rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-brands fa-facebook me-2"></i>Facebook</span>
                            <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Introducir link de Facebook">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-brands fa-instagram me-2"></i>Instagram</span>
                            <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Introducir link de Instagram">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-brands fa-twitter me-2"></i>Twitter</span>
                            <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Introducir link de Twitter">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-brands fa-youtube me-2"></i>YouTube</span>
                            <input type="text" class="form-control" name="youtube" id="youtube" placeholder="Introducir link de YouTube">
                        </div>
                    </div>

                    <!-- COPYRIGHT -->
                    <hr>
                    <h2 class="titulosector">Pie de página</h2>
                    <hr class="hr">

                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-copyright me-2"></i>Copyright</span>
                            <input type="text" class="form-control" name="copyright" id="copyright" placeholder="Introducir empresa">
                            <span class="input-group-text">Todos los derechos reservados.</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text">Diseñado por</span>
                            <input type="text" class="form-control" name="disenado" id="disenado" value="Net Rabbit S.A. de C.V." placeholder="Diseñado por:">
                        </div>
                    </div>

                    <!-- META -->
                    <hr>
                    <h2 class="titulosector">META</h2>
                    <hr class="hr">

                    <div class="mb-3">
                        <label class="form-label tituloimput">Autor</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" value="Net Rabbit S.A. de C.V." name="author" id="author" placeholder="Introducir autor">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label tituloimput">Description</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-quote-right"></i></span>
                            <textarea class="form-control" name="description" id="description" placeholder="Introducir description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label tituloimput">Keywords</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-quote-right"></i></span>
                            <textarea class="form-control" name="keywords" id="keywords" placeholder="Introducir keywords" rows="7"></textarea>
                        </div>
                    </div>

                    <div class="input-group justify-content-md-center">
                        <button type="submit" class="btn btn-success btn-lg">Guardar</button>
                        <!-- <button type="submit" class="btn btn-form btn-lg">Guardar</button> -->
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        // Obtener referencia al popup de previsualización
        var previsualizacionWindow = window.open('previsualizacion.html', 'previsualizacionPopup', 'width=400,height=400');

        // Escuchar cambios en los campos del formulario y actualizar la previsualización en tiempo real
        document.getElementById('formulario').addEventListener('input', function() {
            // var nombre = document.getElementById('nombre').value;
            // var tituloP = document.getElementById('tituloP').value;
            // var logo = document.getElementById('logo').value;
            // var link = document.getElementById('link').value;
            var tutuloM = document.getElementById('tutuloM').value;
            // var colorT2 = document.getElementById('colorT2').value;
            var hv1 = document.getElementById('hv1').value;
            var hv2 = document.getElementById('hv2').value;
            var hv3 = document.getElementById('hv3').value;
            var hv4 = document.getElementById('hv4').value;
            var hv5 = document.getElementById('hv5').value;
            // var heroBg = document.getElementById('heroBg').value;
            // var borde1 = document.getElementById('borde1').value;
            var colorT3 = document.getElementById('colorT3').value;
            var tutuloP1 = document.getElementById('tutuloP1').value;
            var tutuloP2 = document.getElementById('tutuloP2').value;
            var tutuloP3 = document.getElementById('tutuloP3').value;
            var tutuloTs = document.getElementById('tutuloTs').value;
            // var tarSbg = document.getElementById('tarSbg').value;
            // var colorT4 = document.getElementById('colorT4').value;
            // var borde2 = document.getElementById('borde2').value;
            var contTs = document.getElementById('contTs').value;
            // var colorC1 = document.getElementById('colorC1').value;
            var lista = document.getElementById('lista').value;
            var tutuloGi = document.getElementById('tutuloGi').value;
            // var galC1 = document.getElementById('galC1').value;
            // var galC2 = document.getElementById('galC2').value;
            // var galC3 = document.getElementById('galC3').value;
            var tutuloT = document.getElementById('tutuloT').value;
            var contT1 = document.getElementById('contT1').value;
            var autorT1 = document.getElementById('autorT1').value;
            var CargoT1 = document.getElementById('CargoT1').value;
            var contT2 = document.getElementById('contT2').value;
            var autorT2 = document.getElementById('autorT2').value;
            var CargoT2 = document.getElementById('CargoT2').value;
            var contT3 = document.getElementById('contT3').value;
            var autorT3 = document.getElementById('autorT3').value;
            var CargoT3 = document.getElementById('CargoT3').value;
            var contactoT = document.getElementById('contactoT').value;
            var contD = document.getElementById('contD').value;
            // var boton = document.getElementById('boton').value;
            // var btnletra = document.getElementById('btnletra').value;
            // var whatsapp = document.getElementById('whatsapp').value;
            // var mensajewhats = document.getElementById('mensajewhats').value;
            // var facebook = document.getElementById('facebook').value;
            // var instagram = document.getElementById('instagram').value;
            // var twitter = document.getElementById('twitter').value;
            // var youtube = document.getElementById('youtube').value;
            var copyright = document.getElementById('copyright').value;
            var disenado = document.getElementById('disenado').value;
            // var author = document.getElementById('author').value;
            // var description = document.getElementById('description').value;
            // var keywords = document.getElementById('keywords').value;

            // Enviar mensaje al popup de previsualización
            previsualizacionWindow.postMessage({
                // nombre: nombre,
                // tituloP: tituloP,
                // logo: logo,
                // link: link,
                tutuloM: tutuloM,
                // colorT2: colorT2,
                hv1: hv1,
                hv2: hv2,
                hv3: hv3,
                hv4: hv4,
                hv5: hv5,
                // heroBg: heroBg,
                // borde1: borde1,
                colorT3: colorT3,
                tutuloP1: tutuloP1,
                tutuloP2: tutuloP2,
                tutuloP3: tutuloP3,
                tutuloTs: tutuloTs,
                // tarSbg: tarSbg,
                // colorT4: colorT4,
                // borde2: borde2,
                contTs: contTs,
                // colorC1: colorC1,
                lista: lista,
                tutuloGi: tutuloGi,
                // galC1: galC1,
                // galC2: galC2,
                // galC3: galC3,
                tutuloT: tutuloT,
                contT1: contT1,
                autorT1: autorT1,
                CargoT1: CargoT1,
                contT2: contT2,
                autorT2: autorT2,
                CargoT2: CargoT2,
                contT3: contT3,
                autorT3: autorT3,
                CargoT3: CargoT3,
                contactoT: contactoT,
                contD: contD,
                // boton: boton,
                // btnletra: btnletra,
                // whatsapp: whatsapp,
                // mensajewhats: mensajewhats,
                // facebook: facebook,
                // instagram: instagram,
                // twitter: twitter,
                // youtube: youtube,
                copyright: copyright,
                disenado: disenado,
                // author: author,
                // description: description,
                // keywords: keywords
            }, '*');
        });
    </script>

    <?php include("../../footer.php"); ?>
</body>

</html>