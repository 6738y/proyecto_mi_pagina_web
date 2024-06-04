<?php
include 'conexion.php';
$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];


$insert = $con -> query("INSERT INTO infopersonal ( nombre,apellido1,apellido2,usuario,contraseña) VALUES ('$nombre','$apellido1','$apellido2','$usuario','$contraseña')");
if($insert){
    echo" se almaceno en la base de datos";
}else

echo" no se guardo ningun registro";
