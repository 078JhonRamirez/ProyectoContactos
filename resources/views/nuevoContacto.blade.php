@include('layout.plantilla')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <!-- css -->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google fond -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

<!-- animaciones -->
    <rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> 
</head>
 <body>


 @yield('menu')
    
    <div class="contenedor">

        <h1 class="logo">Nuevo <span>Contacto</span></h1>

        <div class="contact-wrapper">
            <div class="contact-form">
                <h3>Crear Contacto</h3>

                <form action="{{ url('nuevoContacto') }}" method="post">
                    @csrf
                    <p class="select-file">
                        <label>Perfi</label>
                        <input type="file" id="seleccionArchivo" name="perfil"  >
                    </p>

                    <p>
                        <label>Nombre</label>
                        <input type="text" name="nombre">
                    </p>

                    <p>
                        <label>apellido</label>
                        <input type="text" name="apellido">
                    </p>

                    <p>
                        <label>telefono</label>
                        <input type="tel" name="telefono">
                    </p>

                    <p>
                        <label>fijo</label>
                        <input type="tel" name="telefonoFijo">
                    </p>

                    <p>
                        <label>Email</label>
                        <input type="text" name="email">
                    </p>

                    <p>
                        <label>Direccion</label>
                        <input type="text" name="direccion">
                    </p>

                    <p>
                        <label>Sexo</label>
                        <input type="text" name="sexo">
                    </p>

                    <p>
                        <label>Trabajo</label>
                        <input type="text" name="trabajo">
                    </p>

                    <p>
                        <label>Region</label>
                        <input type="text" name="region">
                    </p>

                    <p>
                        <label>Grupo</label>
                        <select name="grupo">
                            <option >selecciona un grupo</option>
                            <option value="1">Familia</option>
                            <option value="2">Colegio</option>
                            <option value='3'>Fiesta</option>
                        </select>
                    </p>

                    <p class="block">
                        <label>descripcion</label>
                        <textarea name="descripcion" rows="3"></textarea>
                    </p>

                    <p class="block">
                        <button type="submit">Crear Contacto</button>
                    </p>

                </form>
            </div>


            <div class="contact-inf">
                <h3>Imagen Seleccionada:</h3>
                <img id="imagenPrevisualizacion" alt="s" >
            </div>
        </div>

    </div>


    <script src="./js/seleccionarImg.js"></script>

</body>

</html> 