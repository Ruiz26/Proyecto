<?php
//Configuración necesaria para acceder a la data base.
function con(){
$hostname = "localhost";
$usuariodb = "root";
$passworddb = "";
$dbname = "proyecto";

//Generando la conexion con el servidor
$conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
return $conectar;

}
?>