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

                <form class="row g-3" action="guardar.php" method="POST" enctype="multipart/form-data">

                    <!-- ASPECTOS GENERALES -->
                    <h2 class="titulosector">Aspectos Generales</h2>
                    <hr class="hr">

                    <div class="col-md-4">
                        <label class="form-label tituloimput">Nombre de Landing Page</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-a"></i></span>
                            <input type="text" class="form-control" name="nombre" placeholder="Introducir nombre de landing page" style="text-transform:uppercase;">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label tituloimput">Título de la pestaña</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-code"></i></span>
                            <input type="text" class="form-control" name="tituloP" placeholder="Introducir título de la pestaña">
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
                            <input type="text" class="form-control" name="link" placeholder="Introducir link de la página principal">
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
                            <input type="text" class="form-control" name="tutuloM" placeholder="Introducir título del menú">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label tituloimput">Color de título</label>
                        <input type="color" class="form-control form-control-color" name="colorT2" value="#F1F1F1" title="Elegir color">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label tituloimput">Hipervínculo 1</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                            <input type="text" class="form-control" name="hv1" placeholder="Introducir hipervínculo 1">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label tituloimput">Hipervínculo 2</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                            <input type="text" class="form-control" name="hv2" placeholder="Introducir hipervínculo 2">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label tituloimput">Hipervínculo 3</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                            <input type="text" class="form-control" name="hv3" placeholder="Introducir hipervínculo 3">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label tituloimput">Hipervínculo 4</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                            <input type="text" class="form-control" name="hv4" placeholder="Introducir hipervínculo 4">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label tituloimput">Hipervínculo 5</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
                            <input type="text" class="form-control" name="hv5" placeholder="Introducir hipervínculo 5">
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
                        <input type="color" class="form-control form-control-color" name="borde1" value="#BE2525" title="Elegir color">
                    </div>

                    <h3 class="titulosector">Título Principal</h3>
                    <div class="form-text">Para escribir en cursiva escriba la(s) palabras entre dos
                        asteríscos. Ejemplo: (<strong>**Hola Mundo**</strong>)</div>
                    <div class="col-md-4">
                        <label class="form-label tituloimput">Color de título</label>
                        <input type="color" class="form-control form-control-color" name="colorT3" value="#F1F1F1" title="Elegir color">
                    </div>
                    <div class="mb-3">
                        <label class="form-label tituloimput">Primera línea</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                            <input type="text" class="form-control" name="tutuloP1" placeholder="Introducir primera línea">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label tituloimput">Segunda línea</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                            <input type="text" class="form-control" name="tutuloP2" placeholder="Introducir segunda línea">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label tituloimput">Tercera línea</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-bars"></i></span>
                            <input type="text" class="form-control" name="tutuloP3" placeholder="Introducir tercera línea">
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
                            <input type="text" class="form-control" name="tutuloTs" placeholder="Introducir título de la tarjeta">
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
                        <input type="color" class="form-control form-control-color" name="colorT4" value="#444444" title="Elegir color">
                    </div>
                    <div class="col-md-2">
                        <label class="form-label tituloimput">Color de borde derecho</label>
                        <input type="color" class="form-control form-control-color" name="borde2" value="#BE2525" title="Elegir color">
                    </div>
                    <div class="col-md-10">
                        <label class="form-label tituloimput">Contenido</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                            <textarea class="form-control" name="contTs" placeholder="Introducir el contenido" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label tituloimput">Color de letra</label>
                        <input type="color" class="form-control form-control-color" name="colorC1" value="#444444" title="Elegir color">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label tituloimput">Viñetas</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-list-ul"></i></span>
                            <textarea class="form-control" name="lista" placeholder="Introducir viñetas" rows="3"></textarea>
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
                            <input type="text" class="form-control" name="tutuloGi" placeholder="Introducir título de la galería">
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
                            <input type="text" class="form-control" name="tutuloT" placeholder="Introducir título">
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
                            <textarea class="form-control" name="contT1" placeholder="Introducir el contenido" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label tituloimput">Autor</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="autorT1" placeholder="Introducir autor">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label tituloimput">Cargo</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
                            <input type="text" class="form-control" name="CargoT1" placeholder="Introducir cargo">
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="mb-3">
                        <h3 class="titulosector">Testimonio 2</h3>
                        <label class="form-label tituloimput">Contenido</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                            <textarea class="form-control" name="contT2" placeholder="Introducir el contenido" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label tituloimput">Autor</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="autorT2" placeholder="Introducir autor">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label tituloimput">Cargo</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
                            <input type="text" class="form-control" name="CargoT2" placeholder="Introducir cargo">
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="mb-3">
                        <h3 class="titulosector">Testimonio 3</h3>
                        <label class="form-label tituloimput">Contenido</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                            <textarea class="form-control" name="contT3" placeholder="Introducir el contenido" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label tituloimput">Autor</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="autorT3" placeholder="Introducir autor">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label tituloimput">Cargo</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-briefcase"></i></span>
                            <input type="text" class="form-control" name="CargoT3" placeholder="Introducir cargo">
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
                            <input type="text" class="form-control" name="contactoT" placeholder="Introducir título">
                        </div>
                        <div class="form-text">Para escribir en cursiva escriba la(s) palabras entre dos
                            asteríscos. Ejemplo: (<strong>**Hola Mundo**</strong>)</div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label tituloimput">Descripción</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-align-left"></i></span>
                            <textarea class="form-control" name="contD" placeholder="Introducir una descripción" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label tituloimput">Color del botón</label>
                        <input type="color" class="form-control form-control-color" name="boton" value="#BE2525" title="Elegir color">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label tituloimput">Color de letra del botón</label>
                        <input type="color" class="form-control form-control-color" name="btnletra" value="#F1F1F1" title="Elegir color">
                    </div>

                    <!-- REDES SOCIALES -->
                    <hr>
                    <h2 class="titulosector">Redes Sociales</h2>
                    <hr class="hr">

                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-brands fa-whatsapp me-2"></i>WhatsApp</span>
                            <input type="text" class="form-control" name="whatsapp" placeholder="Introducir número de WhatsApp (10 dígitos)">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-message"></i></span>
                            <textarea class="form-control" name="mensajewhats" placeholder='Mensaje de WhatsApp. Ejemplo: "¡Hola 👋! Vengo de tu landing page y me encantaría recibir más información."' rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-brands fa-facebook me-2"></i>Facebook</span>
                            <input type="text" class="form-control" name="facebook" placeholder="Introducir link de Facebook">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-brands fa-instagram me-2"></i>Instagram</span>
                            <input type="text" class="form-control" name="instagram" placeholder="Introducir link de Instagram">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-brands fa-twitter me-2"></i>Twitter</span>
                            <input type="text" class="form-control" name="twitter" placeholder="Introducir link de Twitter">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-brands fa-youtube me-2"></i>YouTube</span>
                            <input type="text" class="form-control" name="youtube" placeholder="Introducir link de YouTube">
                        </div>
                    </div>

                    <!-- COPYRIGHT -->
                    <hr>
                    <h2 class="titulosector">Pie de página</h2>
                    <hr class="hr">

                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-copyright me-2"></i>Copyright</span>
                            <input type="text" class="form-control" name="copyright" placeholder="Introducir empresa">
                            <span class="input-group-text">Todos los derechos reservados.</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text">Diseñado por</span>
                            <input type="text" class="form-control" name="disenado" value="Net Rabbit S.A. de C.V." placeholder="Diseñado por:">
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
                            <input type="text" class="form-control" value="Net Rabbit S.A. de C.V." name="author" placeholder="Introducir autor">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label tituloimput">Description</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-quote-right"></i></span>
                            <textarea class="form-control" name="description" placeholder="Introducir description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label tituloimput">Keywords</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-quote-right"></i></span>
                            <textarea class="form-control" name="keywords" placeholder="Introducir keywords" rows="7"></textarea>
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
            var titulo = document.getElementById('titulo').value;
            var contenido = document.getElementById('contenido').value;

            // Enviar mensaje al popup de previsualización
            previsualizacionWindow.postMessage({
                titulo: titulo,
                contenido: contenido
            }, '*');
        });

        // Cargar previsualización inicial
        window.addEventListener('load', function() {
            var titulo = document.getElementById('titulo').value;
            var contenido = document.getElementById('contenido').value;

            // Enviar mensaje al popup de previsualización
            previsualizacionWindow.postMessage({
                titulo: titulo,
                contenido: contenido
            }, '*');
        });
    </script>

    <?php include("../../footer.php"); ?>
</body>

</html>