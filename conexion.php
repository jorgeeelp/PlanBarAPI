<?php
$servidor = "fdb1032.awardspace.net";
$usuario = "4742077_restaurante";
$password = "^-2iU6[%20K)eQT?";
$base_datos = "4742077_restaurante";

$conn = new mysqli($servidor, $usuario, $password, $base_datos);

$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>