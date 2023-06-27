@include('layout/plantilla')
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
  @yield('menu')

  <div class="container">
    <div class="p-5">
      <div class="row">
        <div class="col-md-7 col-lg-9">
          <h2 class="mb-3 text-primary">Perfil de Usuario</h2>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-sm-6">
                <table class="table">
                  <tr>
                    <td>
                      <p class="form-label">Nombre:</p>
                    </td>
                    <td class="text-center align-middle">
                      <span>{{ $perfil->nombre }}</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="form-label">Apellido:</p>
                    </td>
                    <td class="text-center align-middle">
                      <span>{{ $perfil->apellido }}</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="form-label">Email:</p>
                    </td>
                    <td class="text-center align-middle">
                      <span class="input-group-text"><ion-icon name="file-tray-outline"></ion-icon>{{ $perfil->email }}</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="form-label">Dirección:</p>
                    </td>
                    <td class="text-center align-middle">
                      <span class="input-group-text"><ion-icon name="home-outline"></ion-icon>{{ $perfil->direccion }}</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p class="form-label">Teléfono:</p>
                    </td>
                    <td class="text-center align-middle">
                      <span>{{ $perfil->telefono }}</span>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-sm-6">
                <p>Descripción:</p>
                <table class="table">
                  <tr>
                    <td class="text-center align-middle">{{ $perfil->descripcion }}</td>
                  </tr>
                </table>
                <br>
                <img src="{{ $perfil->perfil }}" height="150px" alt="Imagen del perfil">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-5 col-lg-3">
          <h2 class="text-primary">Cuenta</h2>
          <p>Nombre:</p>
          <table class="table">
            <tr>
              <td class="text-center align-middle">{{ $perfil->nombre }}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
