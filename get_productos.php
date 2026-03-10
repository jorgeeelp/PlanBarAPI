<?php
include 'conexion.php';
$result = $conn->query("SELECT id_producto, nombre_producto, precio_producto, categoria_producto, observaciones_producto, foto_producto FROM Producto");
$res = [];
while($row = $result->fetch_assoc()) {
    $row['precio_producto'] = (double)$row['precio_producto'];
    $res[] = $row;
}
echo json_encode($res);
?>