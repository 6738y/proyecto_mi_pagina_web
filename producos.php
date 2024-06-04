<?php include'conexion.php' ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body>
    <fieldset><button class="pindex"><a href="index.html"><img src="imagenes/logo.png" alt=""></a></button>

        <button class="PINIREG"><a class="ir" href="inicio_sesion_registro.html">INICIO DE SESION/REGISTRARSE</a></button>
        <button class="PNOSOTROS"><a class="nos" href="nosotros.html">NOSOTROS</a></button>
       <button class="PCONTACTO">CONTACTO</button>
       <button class="PPRODUCTOS">NUESTROS PRODUCTOS</button>

    </fieldset>
    
    <table >
        <td>imagen </td>
          <th>ID</th> 
          <th>NOMBRE DEL PRODUCTO</th> 
          <th>DESCRIPCION</th>
          <th>PRECIO</th>
          <th> CATEGORIA </th>
         
          <?php
          $selec = $con -> query("SELECT * FROM productos");
          while($fila = $selec -> fetch_assoc()){ ?>
          <tr>
          <td><img src="data:image/jpg:base64, <?php echo base64_encode ($fila['imagen']); ?>"></td>
            <td><?php echo $fila ['id'] ?></td>
            <td><?php echo $fila ['nombrep'] ?></td>
            <td><?php echo $fila ['descripción'] ?></td>
            <td><?php echo $fila ['precio'] ?></td>
            <td><?php echo $fila ['id_categoria'] ?></td>
           
           
            
           
          </tr>
          <?php } ?>
        </table>

    
    <footer>
        <button class="insta"><img src="imagenes/insta.png" ></button> <button class="Whats"><img src="imagenes/Whats.png" ></button>
     </footer>
 
</body>
</html>