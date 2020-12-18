<?php
//Conexion local
$hostMySQL='localhost';
$userMySQL='root';
$passMySQL='';
$bd='webmaster2020';

@$conexion = mysqli_connect($hostMySQL,$userMySQL,$passMySQL,$bd) or die("Error en la conexion.");

?>