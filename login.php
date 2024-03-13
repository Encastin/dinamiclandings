<!DOCTYPE html>
<html lang="es">

<head>
  <?php include("head.php"); ?>

  <title>Inicio de Sesión | DinamicLandings</title>
</head>

<body>

  <!-- Header  -->
  <?php
  $nav = "LOGIN";
  include("navbar.php");
  ?>
  <!-- Header End -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Perfil Start ***** -->
          <div class="row">

            <div class="col-lg-12">
              <div class="main-profile ">
                <div class="row">
                  <div class="col-lg-9 align-self-center">
                    <div class="main-info header-text">
                      <h4>¡BIENVENIDO!</h4>
                      <p>Inicia sesión para empezar a crear landing pages y publicidad.</p>
                    </div>
                  </div>
                  <div class="col-lg-3 align-self-center">
                    <div class="main-info header-text">
                      <div class="main-border-button text-center">
                        <p class="text-light lh-sm mb-2">¿Quieres formar parte de DinamicLandings?</p>
                        <a href="registro.php"><i class="fa-solid fa-user-plus"></i>&nbsp; Solicitar Registro</a>
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="text-light mt-3">

                <div class="row justify-content-center">
                  <div class="col-lg-4 mt-4">
                    <div class="text-light" data-bs-theme="dark">

                      <form action="check-login.php" method="post" class="needs-validation" novalidate="">
                        <div class="input-group has-validation mb-3">
                          <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                          <div class="form-floating">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" required>
                            <label for="email">Correo Electrónico</label>
                          </div>
                          <div class="ms-2 invalid-feedback">
                          </div>
                        </div>
                        <div class="input-group has-validation mb-3">
                          <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                          <div class="form-floating">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
                            <label for="password">Contraseña</label>
                          </div>
                          <div class="ms-2 invalid-feedback">
                          </div>
                        </div>

                        <div class="d-grid mt-4">
                          <button type="submit" class="btn btn-primary btn-lg rounded-4">Iniciar Sesión</button>
                        </div>
                      </form>

                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- ***** Perfil End ***** -->

        </div>
      </div>
    </div>
  </div>

  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>

  <?php include("footer.php"); ?>
</body>

</html>