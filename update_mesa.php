<?php
include 'conexion.php';
$id = $_POST['id'];
$numero = $_POST['numero'];
$capacidad = $_POST['capacidad'];
$stmt = $conn->prepare("UPDATE Mesa SET numero_mesa=?, capacidad_mesa=? WHERE id_mesa=?");
$stmt->bind_param("iii", $numero, $capacidad, $id);
$stmt->execute();
echo json_encode(["success" => true]);
?>