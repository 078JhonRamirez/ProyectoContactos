<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Perfil</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-lg-9">
        <h4 class="mb-3">Perfil de Usuario</h4>
        <form class="needs-validation" novalidate="">
          <div class="row">
            <div class="col-sm-6">
              <label for="Nombre" class="form-label">Nombre</label>
              <!-- Ingresar nombre -->
              <div class="invalid-feedback">
                El nombre es obligatorio.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="Apellido" class="form-label">Apellido</label>
              <!-- Ingresar apellido -->
              <div class="invalid-feedback">
                El apellido es obligatorio.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="Usuario" class="form-label">Usuario</label>
            <div class="input-group has-validation">
              <span class="input-group-text">@</span>
              <!-- Ingresar usuario -->
              <!-- <input type="text" class="form-control" id="Usuario" placeholder="" value="" required=""> -->
              <div class="invalid-feedback">
                El usuario es obligatorio.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="Correo" class="form-label">Correo Electrónico <span class="text-body-secondary">(Opcional)</span></label>
            <div class="input-group has-validation">
              <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
              <!-- Ingresar correo -->
              <!-- <input type="email" class="form-control" id="Correo" placeholder="" value=""> -->
              <div class="invalid-feedback">
                Por favor, introduce una dirección de correo electrónico válida.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="Direccion" class="form-label">Dirección <span class="text-body-secondary">(Opcional)</span></label>
            <div class="input-group has-validation">
              <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
              <!-- Ingresar dirección -->
              <!-- <input type="text" class="form-control" id="Direccion" placeholder="" value=""> -->
              <div class="invalid-feedback">
                Por favor, introduce tu dirección de envío.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="Telefono" class="form-label">Teléfono <span class="text-body-secondary">(Opcional)</span></label>
            <div class="input-group has-validation">
              <span class="input-group-text"><i class="bi bi-telephone"></i></span>
              <!-- Ingresar teléfono -->
              <!-- <input type="tel" class="form-control" id="Telefono" placeholder="" value=""> -->
            </div>
          </div>
          <br>
          <br>
          <br>
          <p><span class="text-body-secondary">Cambiar nombre de usuario</span></p>
          <div class="mb-3">
            <label for="cambiar_nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="cambiar_nombre" placeholder="" value="" required="">
            <div class="invalid-feedback">
              El nombre es obligatorio.
            </div>
          </div>
          <br>
          <br>
          <p><span class="text-body-secondary">Cambiar contraseña</span></p>
          <div class="mb-3">
            <label for="cambiar_clave" class="form-label"> Contraseña</label>
            <input type="password" class="form-control" id="cambiar_clave" placeholder="" value="" required="">
            <div class="invalid-feedback">
              La contraseña es obligatoria.
            </div>
          </div>

          <div class="mb-3">
            <label for="confirmar_clave" class="form-label">Confirmar contraseña</label>
            <input type="password" class="form-control" id="confirmar_clave" placeholder="" value="" required="">
            <div class="invalid-feedback">
              La confirmación de contraseña es obligatoria.
            </div>
          </div>

          <button class="btn btn-primary" type="submit">Guardar cambios</button>
        </form>
      </div>

      <div class="col-md-5 col-lg-3">
        <h2>INFORMACIÓN DE CONTACTO</h2>
        <p>Usuario: </p>
        <img src="img/logo_usuario.png" height="150px" alt=""> <!-- Imagen del usuario -->
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
