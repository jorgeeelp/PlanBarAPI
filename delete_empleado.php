<?php
include 'conexion.php';
$id = $_POST['id'];

$stmt = $conn->prepare("DELETE FROM Empleado WHERE id_empleado = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Empleado eliminado"]);
} else {
    echo json_encode(["success" => false, "message" => "Error al eliminar"]);
}
?>