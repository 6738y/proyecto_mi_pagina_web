<?php include 'conexion.php';

$id = $_REQUEST['id'];

$selec = $con -> query("SELECT * FROM criticas WHERE id='$id' "); 
if ($fila = $selec -> fetch_assoc()); {
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Actualizar Datos </title>

</head>
<body>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="text" name='Usuario' placeholder="Nombre de Usuario" value="<?php echo $fila['Usuario'] ?>"><br>
        <input type="text" name='Opinión' placeholder="Opinión" value="<?php echo $fila['Opinión'] ?>"><br>
        <input type="int" name='Calificación' placeholder="Del 1 al 10 danos tu Calificación" value="<?php echo $fila['Calificación'] ?>"><br>
        <input type="date" name='Fecha' placeholder="Fecha" value="<?php echo $fila['Fecha'] ?>"><br>


        <input type="submit" value="Actualizar">

    </form><br><br>

</body>
</html>