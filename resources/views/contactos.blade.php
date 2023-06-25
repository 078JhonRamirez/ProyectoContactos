@include('layout/plantilla')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactos</title>
</head>
<body>
    
    
    @yield('menu')

    
    <div class="p-5">
    <div class="container rounded" style="background: rgba(128, 128, 128, 0.5)">
      <div class="row">
        <h2 class="p-5"><center>Lista de contactos</center></h2>
      </div>
      <div class="row">
        <div class="row justify-content-center align-items-center">
          <div class="col-1">
            <form class="d-flex">
              <button class="btn btn-primary" type="submit" style="background: #00d85e">Agregar</button>
            </form>
          </div>
          <div class="col-4">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button><i class="bi bi-search"></i></button>
          </form>
        </div>
      </div>
    </div>
    

    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col" class="text-center align-middle">Id</th>
                <th scope="col" class="text-center align-middle">Nombre</th>
                <th scope="col" class="text-center align-middle">Celular</th>
                <th scope="col" class="text-center align-middle">Email</th>
                <th scope="col" class="text-center align-middle">
                 Acciones
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="col" class="text-center align-middle"><!-- llamar id--></td>
                <td scope="col" class="text-center align-middle"><!--Llmar nombre--></td>
                <td scope="col" class="text-center align-middle"><!--llamar cel--></td>
                <td scope="col" class="text-center align-middle"><!--Llamar email--></td>
                <td scope="col" class="text-center align-middle">
                  <button class="btn btn-primary"><i class="bi bi-eye"></i></button>
                  <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
      </div>
      <br>
    </div>
  </div>
</body>
</html>