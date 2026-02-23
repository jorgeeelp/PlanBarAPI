<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "restaurante";

$conn = new mysqli($servidor, $usuario, $password, $base_datos);

$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>