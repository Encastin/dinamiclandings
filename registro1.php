<?php
$tipoCuenta = $_REQUEST["tipoCuenta"];

switch ($tipoCuenta) {
  case 'P':
?>
    <div class="row g-3">
      <h4>DATOS PERSONALES</h4>

      <!-- DATOS PERSONALES -->
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
          <div class="form-floating">
            <input type="text" class="form-control" name="nombreU" id="nombreU" placeholder="Nombre(s)" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            <label for="nombreU">Nombre(s)</label>
            <div class="ms-2 invalid-feedback">
              Escribe un nombre
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
          <div class="form-floating">
            <input type="text" class="form-control" name="pApellido" id="pApellido" placeholder="Primer Apellido" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            <label for="pApellido">Primer Apellido</label>
            <div class="ms-2 invalid-feedback">
              Escribe el primer apellido
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
          <div class="form-floating">
            <input type="text" class="form-control" name="sApellido" id="sApellido" placeholder="Segundo Apellido" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            <label for="sApellido">Segundo Apellido</label>
            <div class="ms-2 invalid-feedback">
              Escribe el segundo apellido
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-person-half-dress"></i></span>
          <div class="form-floating">
            <select class="form-select" id="tipocuenta" name="genero" aria-label="Género" required>
              <option selected="" disabled="" value="">Selecciona un género</option>
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
              <option value="O">Otro</option>
            </select>
            <label for="tipocuenta">Género</label>
            <div class="ms-2 invalid-feedback">
              Seleciona un género
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-calendar-day"></i></span>
          <div class="form-floating">
            <input type="date" class="form-control" name="fNacimiento" id="fNacimiento" placeholder="Fecha de Nacimiento" required>
            <label for="fNacimiento">Fecha de Nacimiento</label>
            <div class="ms-2 invalid-feedback">
              Ingresa la fecha de nacimiento
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
          <div class="form-floating">
            <input type="tel" class="form-control" name="telefonoU" id="telefonoU" placeholder="Teléfono" maxlength="10" minlength="10" required>
            <label for="telefonoU">Teléfono</label>
            <div class="ms-2 invalid-feedback">
              Escribe un número de teléfono
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <hr class="text-light">

      <h4>DATOS DE INICIO DE SESIÓN</h4>

      <!-- CORREO Y CONTRASEÑA -->
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
          <div class="form-floating">
            <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" required>
            <label for="email">Correo Electrónico</label>
            <div class="ms-2 invalid-feedback">
              Escribe un correo electrónico
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
          <div class="form-floating">
            <input class="form-control" type="password" name="password" id="newPassword" placeholder="Contraseña" required>
            <label for="newPassword">Contraseña</label>
            <div class="ms-2 invalid-feedback">
              Escribe una contraseña
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
          <div class="form-floating">
            <input class="form-control" type="password" name="confirmpassword" id="confirmPassword" placeholder="Confirmar contraseña" required>
            <label for="confirmPassword">Confirmar contraseña</label>
            <div class="ms-2 invalid-feedback">
              Confirmar contraseña
            </div>
          </div>
          <div id="passwordError" class="ms-2 invalid-feedback">
            Las contraseñas no coinciden
          </div>
        </div>
      </div>
      <hr class="text-light">

      <!-- CHECKS -->
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="ofertas" value="1" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Me gustaría recibir ofertas y promociones por correo electrónico
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="terminos" value="1" id="gridCheck2" required="">
          <label class="form-check-label" for="gridCheck2">
            Estoy de acuerdo con los <a style="color: #00b7ff;" target="_blank" href="pdf/terminos.pdf">Términos y Condiciones</a> del sitio
          </label>
          <div class="invalid-feedback">
            Debes aceptar los Términos y Condiciones
          </div>
        </div>
      </div>

      <!-- SUBMIT -->
      <div class="d-grid mt-4">
        <button type="submit" class="btn btn-primary btn-lg rounded-4">Registrar</button>
      </div>
    </div>
  <?php
    break;

  case 'E':
  ?>
    <div class="row g-3">
      <h4>DATOS PERSONALES</h4>

      <!-- DATOS PERSONALES -->
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
          <div class="form-floating">
            <input type="text" class="form-control" name="nombreU" id="nombreU" placeholder="Nombre(s)" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            <label for="nombreU">Nombre(s)</label>
            <div class="ms-2 invalid-feedback">
              Escribe un nombre
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
          <div class="form-floating">
            <input type="text" class="form-control" name="pApellido" id="pApellido" placeholder="Primer Apellido" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            <label for="pApellido">Primer Apellido</label>
            <div class="ms-2 invalid-feedback">
              Escribe el primer apellido
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
          <div class="form-floating">
            <input type="text" class="form-control" name="sApellido" id="sApellido" placeholder="Segundo Apellido" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            <label for="sApellido">Segundo Apellido</label>
            <div class="ms-2 invalid-feedback">
              Escribe el segundo apellido
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-person-half-dress"></i></span>
          <div class="form-floating">
            <select class="form-select" id="tipocuenta" name="genero" aria-label="Género" required>
              <option selected="" disabled="" value="">Selecciona un género</option>
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
              <option value="O">Otro</option>
            </select>
            <label for="tipocuenta">Género</label>
            <div class="ms-2 invalid-feedback">
              Seleciona un género
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-calendar-day"></i></span>
          <div class="form-floating">
            <input type="date" class="form-control" name="fNacimiento" id="fNacimiento" placeholder="Fecha de Nacimiento" required>
            <label for="fNacimiento">Fecha de Nacimiento</label>
            <div class="ms-2 invalid-feedback">
              Ingresa la fecha de nacimiento
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
          <div class="form-floating">
            <input type="tel" class="form-control" name="telefonoU" id="telefonoU" placeholder="Teléfono" maxlength="10" minlength="10" required>
            <label for="telefonoU">Teléfono</label>
            <div class="ms-2 invalid-feedback">
              Escribe un número de teléfono
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <hr class="text-light">

      <h4>DATOS DE INICIO DE SESIÓN</h4>

      <!-- CORREO Y CONTRASEÑA -->
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
          <div class="form-floating">
            <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" required>
            <label for="email">Correo Electrónico</label>
            <div class="ms-2 invalid-feedback">
              Escribe un correo electrónico
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
          <div class="form-floating">
            <input class="form-control" type="password" name="password" id="newPassword" placeholder="Contraseña" required>
            <label for="newPassword">Contraseña</label>
            <div class="ms-2 invalid-feedback">
              Escribe una contraseña
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
          <div class="form-floating">
            <input class="form-control" type="password" name="confirmpassword" id="confirmPassword" placeholder="Confirmar contraseña" required>
            <label for="confirmPassword">Confirmar contraseña</label>
            <div class="ms-2 invalid-feedback">
              Confirmar contraseña
            </div>
          </div>
          <div id="passwordError" class="ms-2 invalid-feedback">
            Las contraseñas no coinciden
          </div>
        </div>
      </div>
      <hr class="text-light">

      <h4>DATOS EMPRESARIALES</h4>

      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-user-tie"></i></span>
          <div class="form-floating">
            <input type="text" class="form-control" name="rol" id="rol" placeholder="Rol de Trabajo" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            <label for="rol">Rol de Trabajo</label>
            <div class="ms-2 invalid-feedback">
              Escribe el rol de trabajo
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-building"></i></span>
          <div class="form-floating">
            <input type="text" class="form-control" name="nombreE" id="nombreE" placeholder="Nombre de la Empresa" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            <label for="nombreE">Nombre de la Empresa</label>
            <div class="ms-2 invalid-feedback">
              Escribe el nombre de la empresa
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
          <div class="form-floating">
            <input type="tel" class="form-control" name="telefonoE" id="telefonoE" placeholder="Teléfono" maxlength="10" minlength="10" required>
            <label for="telefonoE">Teléfono de la Empresa</label>
            <div class="ms-2 invalid-feedback">
              Escribe el teléfono de la empresa
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>

      <!-- DIRECCIÓN -->
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
          <div class="form-floating">
            <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            <label for="estado">Estado</label>
            <div class="ms-2 invalid-feedback">
              Escribe un estado
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
          <div class="form-floating">
            <input type="text" class="form-control" name="municipio" id="municipio" placeholder="Municipio" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            <label for="municipio">Municipio</label>
            <div class="ms-2 invalid-feedback">
              Escribe un municipio
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
          <div class="form-floating">
            <input type="text" class="form-control" name="colonia" id="colonia" placeholder="Colonia" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            <label for="colonia">Colonia</label>
            <div class="ms-2 invalid-feedback">
              Escribe una colonia
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-road"></i></span>
          <div class="form-floating">
            <input type="text" class="form-control" name="calle" id="calle" placeholder="Calle" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
            <label for="calle">Calle</label>
            <div class="ms-2 invalid-feedback">
              Escribe una calle
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
          <div class="form-floating">
            <input type="number" min="1" class="form-control" name="numext" id="numext" placeholder="Número Exterior" required>
            <label for="numext">Número Exterior</label>
            <div class="ms-2 invalid-feedback">
              Escribe un número exterior
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-hashtag"></i></span>
          <div class="form-floating">
            <input type="text" class="form-control" name="numint" id="numint" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Número Interior">
            <label for="numint">Número Interior</label>
            <div class="ms-2 invalid-feedback">
              Escribe un número interior
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="input-group has-validation">
          <span class="input-group-text"><i class="fa-solid fa-signs-post"></i></span>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Referencias" name="referencias" id="referencias" style="height: 80px" onkeyup="javascript:this.value=this.value.toUpperCase();" required></textarea>
            <label for="referencias">Referencias</label>
            <div class="ms-2 invalid-feedback">
              Escribe las referencias
            </div>
          </div>
          <div class="ms-2 invalid-feedback">
          </div>
        </div>
      </div>
      <hr class="text-light">

      <!-- CHECKS -->
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="ofertas" value="1" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            Me gustaría recibir ofertas y promociones por correo electrónico
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="terminos" value="1" id="gridCheck2" required="">
          <label class="form-check-label" for="gridCheck2">
            Estoy de acuerdo con los <a style="color: #00b7ff;" target="_blank" href="pdf/terminos.pdf">Términos y Condiciones</a> del sitio
          </label>
          <div class="invalid-feedback">
            Debes aceptar los Términos y Condiciones
          </div>
        </div>
      </div>

      <!-- SUBMIT -->
      <div class="d-grid mt-4">
        <button type="submit" class="btn btn-primary btn-lg rounded-4">Registrar</button>
      </div>
    </div>
  <?php
    break;

  default:
  ?>
    <div class='alert alert-warning' role='alert'>
      <i class='fa-solid fa-circle-exclamation me-2'></i>Se produjo un error al obtener el formulario. Por favor recargue la página.
    </div>
<?php
    break;
}

?>