<?php
$host = "localhost";
$usuario = "root";
$password = "";
$base_datos = "bloganime";

$conn = new mysqli($host, $usuario, $password, $base_datos);

if ($conn-> connect_error){
    die("Error de conexion: ". $conn -> connect_error);
}
?>