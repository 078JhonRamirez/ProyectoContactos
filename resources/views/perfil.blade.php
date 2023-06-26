<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <title>Perfil</title>
</head>

<body>
  @include('layout/plantilla')

  @yield('menu')
  <div class="container">
    <div class="p-5">
      <div class="row">
        <div class="col-md-7 col-lg-9">
          <h2 class="mb-3 text-primary">Perfil de Usuario</h2>
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-sm-6">
                <label for="Nombre" class="form-label">Nombre</label>
                <table>
                  <tr>
                    @foreach ($perfil as $perfiles)
                    <td scope="col" class="text-cemter align-middle">{{ $perfiles->nombre }}</td>
                  </tr>
                  @endforeach
                </table>
                <div class="invalid-feedback">
                  El nombre es obligatorio.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="Apellido" class="form-label">Apellido</label>
                <table>
                  <tr>
                    @foreach ($perfil as $perfiles)
                    <td scope="col" class="text-cemter align-middle">{{ $perfiles->apellido }}</td>
                  </tr>
                  @endforeach
                </table>
                <div class="invalid-feedback">
                  El apellido es obligatorio.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="Usuario" class="form-label">Usuario</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <table>
                  <tr>
                    @foreach ($perfil as $perfiles)
                    <td scope="col" class="text-cemter align-middle">{{ $perfiles->perfil }}</td>
                  </tr>
                  @endforeach
                </table>
                <div class="invalid-feedback">
                  El usuario es obligatorio.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="Correo" class="form-label">Correo Electrónico <span class="text-body-secondary">(Opcional)</span></label>
              <div class="input-group has-validation">
                <span class="input-group-text"><ion-icon name="file-tray-outline"></ion-icon></span>
                <table>
                  <tr>
                    @foreach ($perfil as $perfiles)
                    <td scope="col" class="text-cemter align-middle">{{ $perfiles->email }}</td>
                  </tr>
                  @endforeach
                </table>
                <div class="invalid-feedback">
                  Por favor, introduce una dirección de correo electrónico válida.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="Direccion" class="form-label">Dirección <span class="text-body-secondary">(Opcional)</span></label>
              <div class="input-group has-validation">
                <span class="input-group-text"><ion-icon name="home-outline"></ion-icon></span>
                <table>
                  <tr>
                    @foreach ($perfil as $perfiles)
                    <td scope="col" class="text-cemter align-middle">{{ $perfiles->direccion }}</td>
                  </tr>
                  @endforeach
                </table>
                <div class="invalid-feedback">
                  Por favor, introduce tu dirección de envío.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="Telefono" class="form-label">Teléfono <span class="text-body-secondary">(Opcional)</span></label>
              <div class="input-group has-validation">
                <span class="input-group-text"><ion-icon name="call-outline"></ion-icon></span>
                <table>
                  <tr>
                    @foreach ($perfil as $perfiles)
                    <td scope="col" class="text-cemter align-middle">{{ $perfiles->telefono }}</td>
                  </tr>
                  @endforeach
                </table>
                <div class="invalid-feedback">
                  Por favor, introduce un número válido.
                </div>
              </div>
            </div>

            <br>
            <br>
            <hr>
            <br>
            <h2 class="text-primary">Cambiar datos</h2>
            <br>
            <br>
            <p><span class="text-body-secondary">Cambiar nombre de usuario</span></p>
          
<div class="mb-3 col-sm-6">
    <form action="{{ route('perfil') }}" method="POST">
        @csrf
        <label for="cambiar_nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="cambiar_nombre" name="nuevo_nombre" placeholder="" value="" required>
        <div class="invalid-feedback">
            El nombre es obligatorio.
        </div>
        <br>
        <button class="btn btn-primary" type="submit">Guardar cambios</button>
    </form>
</div>
            <br>
            <div class="col-6">
              <hr>
            </div>
            <br>
            <p><span class="text-body-secondary">Cambiar contraseña</span></p>
            <form class="needs-validation" novalidate="" action="{{ route('perfil') }}" method="POST">
              @csrf
              <div class="mb-3 col-sm-6">
                  <label for="nueva_contrasena" class="form-label">Contraseña nueva</label>
                  <input type="password" class="form-control" id="nueva_contrasena" name="nueva_contrasena" placeholder="" required="">
                  <div class="invalid-feedback">
                      La contraseña es obligatoria.
                  </div>
              </div>
          
              <div class="mb-3 col-sm-6">
                  <label for="confirmar_contrasena" class="form-label">Confirmar contraseña</label>
                  <input type="password" class="form-control" id="confirmar_contrasena" name="confirmar_contrasena" placeholder="" required="">
                  <div class="invalid-feedback">
                      La confirmación de contraseña es obligatoria.
                  </div>
              </div>
          
              <button class="btn btn-primary" type="submit">Guardar cambios</button>
          </form>
        </div>

        
        <div class="col-md-5 col-lg-3">
          <h2 class="text-primary">Cuenta</h2>
          <p>Usuario:</p>
          <table>
          <tr>
            @foreach ($perfil as $perfiles)
            <td scope="col" class="text-cemter align-middle">{{ $perfiles->perfil }}</td>
          </tr>
          @endforeach
        </table>
        <br>
         <p>Descripcion:</p>
         <table>
          <tr>
            @foreach ($perfil as $perfiles)
            <td scope="col" class="text-cemter align-middle">{{ $perfiles->descripcion }}</td>
          </tr>
          @endforeach
        </table>
        <br>
          <img src="img/logo_usuario.png" height="150px" alt=""> <!-- Imagen del usuario -->
        </div>
      
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
