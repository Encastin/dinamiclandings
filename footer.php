    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright<i class="fa-regular fa-copyright mx-1"></i>2024 <a href="#">Net Rabbit S.A. de C.V.</a> Todos los derechos reservados.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-------------- SCRIPTS -------------->

    <!-- ICONS -->
    <script src="https://kit.fontawesome.com/2c40838614.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>

    <script>
        $(document).ready(function() {
            var lastScrollTop = 0;
            $(window).scroll(function(event) {
                var st = $(this).scrollTop();
                if (st > lastScrollTop) {
                    // scrolling down
                    $('.header-area').removeClass('visible');
                } else {
                    // scrolling up
                    $('.header-area').addClass('visible');
                }
                lastScrollTop = st;
            });
        });
    </script>

    <?php
    $DB->close(); // Cierre de BD
    ?>