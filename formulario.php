<?php include 'conexion.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Formulario </title>
    
</head>
<body>
    <form action="conect_bd.php" method="post">

        <input type="int" name='id' placeholder="id"><br>




        <input type="text" name='Usuario' placeholder="Nombre de Usuario"><br>
        <input type="text" name='Opinión' placeholder="Opinión"><br>
        <input type="int" name='Calificación' placeholder="Del 1 al 10 danos tu Calificación"><br>
        <input type="date" name='Fecha' placeholder="Fecha"><br>
        <input type="submit" value="Guardar">

    </form><br><br>
    <table border= "1px" >
        <th>id</th>
        <th>Usuario</th>
        <th>Opinión</th>
        <th>Calificación</th>
        <th>Fecha</th>


         <!--este código está mostrando una tabla con todos los registros de la tabla criticas
         y agregando un enlace para editar cada registro.-->

        <?php
        $selec = $con -> query ("SELECT * FROM criticas ");
        while ($fila = $selec -> fetch_assoc()){ ?>
            <tr>
                <td><?php echo $fila['id']?></td>
                <td><?php echo $fila['Usuario']?></td>
                <td><?php echo $fila['Opinión']?></td>
                <td><?php echo $fila['Calificación']?></td>
                <td><?php echo $fila['Fecha']?></td> 
                <td><a href="actualizar.php?id=<?php echo $fila ['id']?>">editar</a></td>
            </tr>
        <?php } ?>
</body>
</html> 