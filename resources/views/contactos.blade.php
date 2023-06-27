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
    
    <div class="container">
        <table class="table">
         <div class="d-flex justify-content-center">
    <div class="col-md-6">
        <form action="{{ route('contactos.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <a href="{{ route('contactos.crea') }}" class="btn btn-primary" style="background: rgb(41, 209, 41)">Agregar</a>
                <input type="text" class="form-control" name="buscar" placeholder="Buscar por nombre">
                <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>
</div>
        <br>
            <thead>
              <tr>
                <th scope="col" class="text-center align-middle">Id</th>
                <th scope="col" class="text-center align-middle">IMG</th>
                <th scope="col" class="text-center align-middle">Nombre</th>
                <th scope="col" class="text-center align-middle">Celular</th>
                <th scope="col" class="text-center align-middle">
                 Acciones
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($contactos as $contacto)
              <tr>
                <td scope="col" class="text-center align-middle">{{$contacto->id}}</td>
                <td scope="col" class="text-center align-middle">{{$contacto->perfil}}</td>
                <td scope="col" class="text-center align-middle">{{$contacto->nombre}}</td>
                <td scope="col" class="text-center align-middle">{{$contacto->telefono}}</td>
                <td scope="col" class="text-center align-middle">

                  <a href="{{ route('detalle', $contacto->id) }}"><button class="btn btn-primary"><i class="bi bi-eye"></i></button></a>

                  <form action="{{ route('contactos.destroy', $contacto->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                </form>
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      <br>
    </div>
  </div>
</body>
</html>