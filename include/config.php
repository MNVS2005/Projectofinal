<?php
// Datos de conexión
$host = "sql111.infinityfree.com";
$user = "if0_39039681";
$password = "gaster4321"; 
$dbname = "if0_39039681_projecto";

// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);
if (!$conn) {
    die('Error al conectar con la base de datos:SAPE ' . mysqli_connect_error());
}
?>