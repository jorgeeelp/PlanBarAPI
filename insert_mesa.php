<?php
include 'conexion.php';
$numero = $_POST['numero'];
$capacidad = $_POST['capacidad'];
$stmt = $conn->prepare("INSERT INTO Mesa (numero_mesa, capacidad_mesa, estado_mesa) VALUES (?, ?, 'libre')");
$stmt->bind_param("ii", $numero, $capacidad);
$stmt->execute();
echo json_encode(["success" => true]);
?>