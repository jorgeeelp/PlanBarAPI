<?php
include 'conexion.php';
$id = $_POST['id'];
$stmt = $conn->prepare("DELETE FROM Mesa WHERE id_mesa=?");
$stmt->bind_param("i", $id);
$stmt->execute();
echo json_encode(["success" => true]);
?>