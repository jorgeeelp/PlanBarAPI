<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria']; 
$observaciones = $_POST['observaciones'];
$foto = $_POST['foto'];

$stmt = $conn->prepare("INSERT INTO Producto (nombre_producto, precio_producto, categoria_producto, observaciones_producto, foto_producto) VALUES (?, ?, ?, ?, ?)");

$stmt->bind_param("sdsss", $nombre, $precio, $categoria, $observaciones, $foto);

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}
?>