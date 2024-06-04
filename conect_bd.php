<?php
include 'conexion.php';
$id = $_POST['id'];
$user = $_POST['Usuario'];
$op = $_POST['Opinión'];
$calif = $_POST['Calificación'];
$cuando = $_POST['Fecha'];

$insert = $con -> query ("INSERT INTO criticas(id,Usuario,Opinión,Calificación,Fecha) VALUES
                          ('$id','$user','$op','$calif','$cuando')");
if($insert){
    echo"Se almaceno en la base de datos";

}else
echo "No se guardo ningun registro";                         