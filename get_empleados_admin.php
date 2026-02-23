<?php
include 'conexion.php';
$result = $conn->query("SELECT id_empleado, dni_empleado, nombre_empleado, rol_empleado FROM Empleado");
$res = [];
while($row = $result->fetch_assoc()) { $res[] = $row; }
echo json_encode($res);
?>