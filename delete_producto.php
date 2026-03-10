<?php
include 'conexion.php';

$id = $_POST['id'];

$stmt = $conn->prepare("DELETE FROM Producto WHERE id_producto = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Producto eliminado"]);
} else {
    echo json_encode(["success" => false, "message" => "Error al eliminar producto"]);
}

$stmt->close();
$conn->close();
?>