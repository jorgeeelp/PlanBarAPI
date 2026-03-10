<?php
include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria'];
$observaciones = $_POST['observaciones'];
$foto = $_POST['foto'];

$stmt = $conn->prepare("UPDATE Producto SET nombre_producto=?, precio_producto=?, categoria_producto=?, observaciones_producto=?, foto_producto=? WHERE id_producto=?");
$stmt->bind_param("sdsssi", $nombre, $precio, $categoria, $observaciones, $foto, $id);

$stmt->execute();
echo json_encode(["success" => true]);
?>