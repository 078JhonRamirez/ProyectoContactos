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
                    {{-- @foreach ($perfil as $perfiles) --}}
                    <td scope="col" class="text-cemter align-middle">
                      {{ $perfil->nombre }}</td>
                  </tr>
                  <tr>
                  <td scope="col" class="text-cemter align-middle">{{ $perfil->apellido }}</td>
                  </tr>
                  <tr>
                  <td scope="col" class="text-cemter align-middle">{{ $perfil->perfil }}</td>
                  </tr>
                  <tr>
                  <td scope="col" class="text-cemter align-middle">{{ $perfil->email }}</td>
                  </tr>
                  <tr>
                  <td scope="col" class="text-cemter align-middle">{{ $perfil->direccion }}</td>
                  </tr>
                  <tr>
                  <td scope="col" class="text-cemter align-middle">{{ $perfil->telefono }}</td>
                  </tr>
                  {{-- @endforeach --}}
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
