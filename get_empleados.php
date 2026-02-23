<?php
header('Content-Type: application/json');
include 'conexion.php';

$sql = "SELECT id_empleado, nombre_empleado, rol_empleado FROM Empleado WHERE rol_empleado != 'admin'";
$result = $conn->query($sql);

$empleados = array();

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $empleados[] = $row;
    }
}

echo json_encode($empleados);
$conn->close();
?>