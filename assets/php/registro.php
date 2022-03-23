<?php
include_once('db.php');

//Recibe datos del formulario
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

echo "los datos son: <br>";
echo "$nombres,$apellidos,$direccion,$telefono,$usuario,$clave";

    $conectar=con();
    $sql="INSERT INTO usuarios (nombres, apellidos, direccion, telefono, usuario, clave) 
    VALUES ('$nombres','$apellidos','$direccion','$telefono','$usuario','$clave')";
    $resul = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL - ERROR".mysqli_error($conectar), E_USER_ERROR);

    echo "$sql";

?>