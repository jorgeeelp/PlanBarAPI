<?php
include 'conexion.php';

$id = $_POST['id'];
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$rol = $_POST['rol'];

$stmt = $conn->prepare("UPDATE Empleado SET dni_empleado = ?, nombre_empleado = ?, rol_empleado = ? WHERE id_empleado = ?");
$stmt->bind_param("sssi", $dni, $nombre, $rol, $id);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Empleado actualizado"]);
} else {
    echo json_encode(["success" => false, "message" => "Error al actualizar"]);
}
?>