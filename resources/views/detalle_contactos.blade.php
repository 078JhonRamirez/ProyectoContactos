<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <title>Detalle contactos</title>
</head>
<body>
    <div class="container rounded">
        <div class="row">
            <div class="col-3 bg-primary text-white p-4"> <!-- Caja 1 - Información de contacto principal -->
                <h2 class="mb-4">INFORMACIÓN DE CONTACTO</h2>
                <table>
                    <tr>
                        <td>
                <p class="mb-3"><span class="informacion-contacto">Usuario:</span> </p></td>
            </tr>
                <tr>
                    <td>
                <p class="mb-2"><span class="informacion-contacto">Correo:</span></p></td>
                
                        <td scope="col" class="text-center align-middle">{{ $detalle->email }}</td>
                    </tr>
                    <tr>
                <!-- Información de Gmail -->
                <td><p class="mb-2"><span class="informacion-contacto">Teléfono:</span></p></td>
                
                        <td scope="col" class="text-center align-middle">{{ $detalle->telefono }}</td>
                    </tr>
                </table> <!-- Número de contacto móvil -->
            </div>
            
            <div class="col-7 border border-2 bg-light text-dark p-4"> <!-- Caja 2 - Información secundaria de usuario -->
                <div class="informacion-usuario">
                    <table>
                        <tr>
                            <td><p class="mb-2"><span class="informacion-contacto">Nombres:</span></p></td>
                            <td scope="col" class="text-center align-middle">{{ $detalle->nombre }}</td>
                        </tr>
                        <tr>
                            <td><p class="mb-2"><span class="informacion-contacto">Apellidos:</span></p></td>
                            <td scope="col" class="text-center align-middle">{{ $detalle->apellido }}</td>
                        </tr>
                        <tr>
                            <td><p class="mb-2"><span class="informacion-contacto">Teléfono fijo:</span></p></td><!-- Teléfono fijo -->
                            <td scope="col" class="text-center align-middle">{{ $detalle->fijo }}</td>
                        </tr>
                        <tr>
                            <td><p class="mb-2"><span class="informacion-contacto">Celular:</span></p></td>
                            <td scope="col" class="text-center align-middle">{{ $detalle->telefono }}</td>
                        </tr>
                        <tr>
                            <td><p class="mb-2"><span class="informacion-contacto">Correo de contacto:</span></p></td>
                            <td scope="col" class="text-center align-middle">{{ $detalle->email }}</td>
                        </tr>
                        <tr>
                            <td><p class="mb-2"><span class="informacion-contacto">Género:</span></p></td>
                            <td scope="col" class="text-center align-middle">{{ $detalle->sexo }}</td>
                        </tr>
                        <tr>
                            <td><p class="mb-2"><span class="informacion-contacto">Fecha de creación:</span></p></td><!-- Fecha de creación de la cuenta -->
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
