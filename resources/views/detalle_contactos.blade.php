<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <style>
        .informacion-contacto {
            font-size: 20px;
            font-weight: bold;
        }

        .informacion-usuario {
            margin-top: 20px;
        }

        .container {
            width: 100%;
            padding: 25px 30px;
            border-radius: 5px;
            margin: 0 auto;
            position: relative;
        }

        .division-2 {
            border: 2px solid #777;
            background-color: #fff;
            color: #000;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
    <title>Detalle contactos</title>
</head>
<body>
    <div class="container rounded">
        <div class="row">
            <div class="col-3 bg-primary text-white p-4"> <!-- Caja 1 - Información de contacto principal -->
                <h2 class="mb-4">INFORMACIÓN DE CONTACTO</h2>
                <p class="mb-3"><span class="informacion-contacto">Usuario:</span> </p>
                <table>
                    @foreach  ($detalle as $detalles)
               
                <tr>
                    <td scope="col" class="text-center align-middle">{{ $detalles->perfil }}</td>
                </tr>
                @endforeach
            </table>
                <img src="img/logo_usuario.png" height="150px" alt="" class="mb-3"> <!-- Imagen del usuario -->

                <p class="mb-2"><span class="informacion-contacto">Correo:</span> <table>
                    @foreach  ($detalle as $detalles)
               
                <tr>
                    <td scope="col" class="text-center align-middle">{{ $detalles->email }}</td>
                </tr>
                @endforeach
            </table><!-- Información de Gmail -->
                <p class="mb-2"><span class="informacion-contacto">Teléfono:</span> </p> <table>
                    @foreach  ($detalle as $detalles)
               
                <tr>
                    <td scope="col" class="text-center align-middle">{{ $detalles->telefono }}</td>
                </tr>
                @endforeach
            </table> <!-- Número de contacto móvil -->
            </div>
            
            <div class="col-7 division-2 d-flex flex-column justify-content-between"> <!-- Caja 2 - Información secundaria de usuario -->
                <div class="informacion-usuario">
                    <table>
                        @foreach ($detalle as $detalles)
                            <tr>
                                <td><p class="mb-2"><span class="informacion-contacto">Nombres:</span></p></td>
                                <td scope="col" class="text-center align-middle">{{ $detalles->nombre }}</td>
                            </tr>
                            <tr>
                                <td><p class="mb-2"><span class="informacion-contacto">Apellidos:</span></p></td>
                                <td scope="col" class="text-center align-middle">{{ $detalles->apellido }}</td>
                            </tr>
                            <tr>
                                <td><p class="mb-2"><span class="informacion-contacto">Teléfono fijo:</span></p></td><!-- Teléfono fijo -->
                                <td scope="col" class="text-center align-middle">{{ $detalles->fijo }}</td>
                            </tr>
                            <tr>
                                <td><p class="mb-2"><span class="informacion-contacto">Celular:</span></p></td>
                                <td scope="col" class="text-center align-middle">{{ $detalles->telefono }}</td>
                            </tr>
                            <tr>
                                <td><p class="mb-2"><span class="informacion-contacto">Correo de contacto:</span></p></td>
                                <td scope="col" class="text-center align-middle">{{ $detalles->email }}</td>
                            </tr>
                            <tr>
                                <td><p class="mb-2"><span class="informacion-contacto">Género:</span></p></td>
                                <td scope="col" class="text-center align-middle">{{ $detalles->sexo }}</td>
                            </tr>
                            <tr>
                                <td><p class="mb-2"><span class="informacion-contacto">Fecha de creación:</span></p></td><!-- Fecha de creación de la cuenta -->
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
