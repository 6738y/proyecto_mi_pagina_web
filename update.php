<?php include 'conexion.php';

$id = $_POST['id'];
$user = $_POST['Usuario'];
$op = $_POST['Opinión'];
$calif = $_POST['Calificación'];
$cuando = $_POST['Fecha'];

$act = $con -> query("UPDATE criticas SET Usuario='$user',
                        Opinión='$op', Calificación='$calif', Fecha='$cuando'
                        WHERE id='$id' ");

if ($act) {
    echo "<script>
    location.href='formulario.php'
    </script>";

}else{

    "<script>
    location.href='actualizar.php?id=".$id."';
    </script>";

}