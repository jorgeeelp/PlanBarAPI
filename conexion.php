<?php
$servidor = "sql112.infinityfree.com";
$usuario = "if0_41363922";
$password = "H27vPQvHqFKJi";
$base_datos = "if0_41363922_restaurante";

$conn = new mysqli($servidor, $usuario, $password, $base_datos);

$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>