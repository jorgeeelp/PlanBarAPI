<?php
include 'conexion.php';
$result = $conn->query("SELECT * FROM Mesa");
$res = [];
while($row = $result->fetch_assoc()) { $res[] = $row; }
echo json_encode($res);
?>