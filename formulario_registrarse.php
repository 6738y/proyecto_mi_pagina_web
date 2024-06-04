<?php include'conexion.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>formulario</title>
    <link rel="stylesheet" href="estilo.css" type="text/css">
</head>
<body >
<fieldset><button class="pindex"><a href="index.html"><img src="imagenes/logo.png" alt=""></a></button>

        <button class="PINIREG">INICIO DE SESION/REGISTRARSE</a></button>
        <button class="PNOSOTROS"><a class="nos" href="nosotros.html">NOSOTROS</a></button>
       <button class="PCONTACTO">CONTACTO</button>
       <button class="PPRODUCTOS">NUESTROS PRODUCTOS</button>

    </fieldset>

    <br>
   
    <form action="conect_bd.php" method ="post">


        
        
        <label for="nom">Nombre:</label>
        <input type="text" name='nombre' placeholder=" ingrese su nombre "><br>


        <label for="costo">apellido 1:</label>
        <input type="text" name='apellido1' placeholder=" ingresa primer apellido "><br>

        <label for="costo">apellido 2:</label>
        <input type="text" name='apellido2' placeholder=" ingresa segundo apellido "><br>

        <label for="usu">usuario:</label>
        <input type="text" name='usuario' placeholder=" ingresa nombre de usuario "><br>


        <label for="lt">contraseña</label><br>
        <input type="int" name='contraseña' placeholder=" ingresa tu contraseña"><br><br>

        <input  type="submit" value="Guardar">


        
</form><br>


<footer>
        <button class="insta"><img src="imagenes/insta.png" ></button> <button class="Whats"><img src="imagenes/Whats.png" ></button>
     </footer>
</body>
</html>