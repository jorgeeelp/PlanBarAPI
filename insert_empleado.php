<?php
include 'conexion.php';
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$rol = $_POST['rol'];

$stmt = $conn->prepare("INSERT INTO Empleado (dni_empleado, nombre_empleado, rol_empleado) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $dni, $nombre, $rol);

if ($stmt->execute()) {
    echo json_encode(["success" => true, "message" => "Empleado añadido"]);
} else {
    echo json_encode(["success" => false, "message" => "Error al insertar"]);
}
?>