<!DOCTYPE html>
<html lang="es">

<head>
  <?php include("head.php"); ?>

  <title>Registro | DinamicLandings</title>
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
                      <h4>REGISTRO EN DINAMICLANDINGS</h4>
                      <p>Completa todos los campos para concluir con tu registro.</p>
                    </div>
                  </div>
                  <div class="col-lg-3 align-self-center">
                    <div class="main-info header-text">
                      <div class="main-border-button text-center">
                        <p class="text-light lh-sm mb-2">¿Ya tienes una cuenta?</p>
                        <a href="login.php"><i class="fa-solid fa-right-to-bracket me-2"></i>Iniciar Sesión</a>
                      </div>
                    </div>
                  </div>
                </div>

                <hr class="text-light mt-3">

                <div class="row justify-content-center">
                  <div class="col-lg-11 mt-4">
                    <div class="text-light" data-bs-theme="dark">

                      <form action="create-account.php" method="post" class="needs-validation" novalidate="">
                        <div class="row g-3">
                          <h4>TIPO DE CUENTA</h4>

                          <!-- TIPO DE CUENTA -->
                          <div class="col-md-12">
                            <div class="input-group has-validation">
                              <span class="input-group-text"><i class="fa-solid fa-gear"></i></span>
                              <div class="form-floating">
                                <select class="form-select" id="tipoCuenta" name="tipoCuenta" aria-label="Tipo de Cuenta" onchange="ajax(this.value);" required>
                                  <option selected="" disabled="" value="">Selecciona un tipo de cuenta</option>
                                  <option value="P">Personal</option>
                                  <option value="E">Empresarial</option>
                                </select>
                                <label for="tipoCuenta">Tipo de Cuenta</label>
                                <div class="ms-2 invalid-feedback">
                                  Selecciona un tipo de cuenta
                                </div>
                              </div>
                              <div class="ms-2 invalid-feedback">
                              </div>
                            </div>
                          </div>
                          <hr class="text-light">
                        </div>

                        <div id="ajaxContent"></div>

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

  <!-- VALIDACIÓN DE CAMPOS Y CONTRASEÑA EN TIEMPO REAL -->
  <script>
    // ? Traer cosas en tiempo real
    function ajax(value) {
      var archivoPHP = 'registro1.php';
      var idajaxContent = '#ajaxContent';
      $.ajax({
        type: "POST",
        url: archivoPHP + "?tipoCuenta=" + value,
        success: function(result) {
          $(idajaxContent).html(result);
        },
        error: function() {
          $(idajaxContent).html("<div class='alert alert-warning' role='alert'><i class='fa-solid fa-circle-exclamation me-2'></i>Se produjo un error al obtener el formulario. Por favor recargue la página.</div>");
        }
      });
    }


    document.addEventListener('DOMContentLoaded', function() {
      var form = document.querySelector('.needs-validation');
      var newPasswordInput = document.getElementById('newPassword');
      var confirmPasswordInput = document.getElementById('confirmPassword');
      var passwordError = document.getElementById('passwordError');
      var submitButton = document.getElementById('submitButton');

      form.addEventListener('submit', function(event) {
        if (!form.checkValidity() || newPasswordInput.value !== confirmPasswordInput.value) {
          event.preventDefault(); // Evitar el envío del formulario
          event.stopPropagation(); // Evitar la propagación del evento
        }
        form.classList.add('was-validated'); // Aplicar estilos de validación de Bootstrap
      });

      newPasswordInput.addEventListener('input', function() {
        if (newPasswordInput.value !== confirmPasswordInput.value) {
          passwordError.style.display = 'block';
          confirmPasswordInput.setCustomValidity('Las contraseñas no coinciden');
        } else {
          passwordError.style.display = 'none';
          confirmPasswordInput.setCustomValidity('');
        }
      });

      confirmPasswordInput.addEventListener('input', function() {
        if (newPasswordInput.value !== confirmPasswordInput.value) {
          passwordError.style.display = 'block';
          confirmPasswordInput.setCustomValidity('Las contraseñas no coinciden');
        } else {
          passwordError.style.display = 'none';
          confirmPasswordInput.setCustomValidity('');
        }
      });
    });

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