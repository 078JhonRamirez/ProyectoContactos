<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/estilos/style1.css">
    
</head>
<body>
    <div class="box">
        <h1>App citas</h1>
        <form >
            <label for="correoElectrinico">Correo Electronico</span></label>
            <input type="text" placeholder="Nombre" id="email">
            <p><span id="emailOK"></p>

            <label for="password">Contraseña</label>
            <input type="password" placeholder="contraseña" id="contraseña">
            <p><span id="contra"></p>

            <input type="submit" value="Iniciar sesion">
            <input type="reset" value="limpiar">

            <!-- <a href="recuperador/recuperador.html">¿olvidaste tu contraseña?</a>
            <br>
            <a href="formulario/formulario.html">crea una cuenta</a> -->
        </form>
    </div>
    <script src="js/index.js"></script>
</body>
</html>