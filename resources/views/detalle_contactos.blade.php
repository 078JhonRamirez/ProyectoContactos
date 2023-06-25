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
    <title>Contactos</title>
</head>
<body>
    <div class="container rounded">
        <div class="row">
            <div class="col-3 bg-primary text-white p-4"> <!-- Caja 1 - Información de contacto principal -->
                <h2 class="mb-4">INFORMACIÓN DE CONTACTO</h2>
                <p class="mb-3"><span class="informacion-contacto">Usuario:</span> </p>
                <img src="img/logo_usuario.png" height="150px" alt="" class="mb-3"> <!-- Imagen del usuario -->
                <p class="mb-2"><span class="informacion-contacto">Correo:</span> info.contact@gmail.com</p> <!-- Información de Gmail -->
                <p class="mb-2"><span class="informacion-contacto">Teléfono:</span> +1(585) 902-705</p> <!-- Número de contacto móvil -->
            </div>
            
            <div class="col-7 division-2 d-flex flex-column justify-content-between"> <!-- Caja 2 - Información secundaria de usuario -->
                <div class="informacion-usuario">
                    <p class="mb-2"><span class="informacion-contacto">Nombres:</span> </p>
                    <br>
                    <p class="mb-2"><span class="informacion-contacto">Apellidos:</span> </p>
                    <br>
                    <p class="mb-2"><span class="informacion-contacto">Teléfono:</span> </p><!-- Teléfono fijo -->
                    <br>
                    <p class="mb-2"><span class="informacion-contacto">Celular:</span> </p>
                    <br>
                    <p class="mb-2"><span class="informacion-contacto">Correo de contacto:</span> </p>
                    <br>
                    <p class="mb-2"><span class="informacion-contacto">Género:</span> </p>
                    <br>
                    <p class="mb-2"><span class="informacion-contacto">Fecha de creación:</span> </p><!-- Fecha de creación de la cuenta -->
                </div>
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
