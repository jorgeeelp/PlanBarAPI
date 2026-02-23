<?php
header('Content-Type: application/json');
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pass = $_POST['pass'];

    $stmt = $conn->prepare("SELECT nombre_empleado FROM Empleado WHERE rol_empleado = 'admin' AND contraseña_empleado = ?");
    $stmt->bind_param("s", $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode([
            "success" => true, 
            "message" => "Bienvenido Administrador " . $row['nombre_empleado']
        ]);
    } else {
        echo json_encode([
            "success" => false, 
            "message" => "Contraseña de administrador incorrecta"
        ]);
    }
    
    $stmt->close();
} else {
    echo json_encode(["success" => false, "message" => "Método no permitido"]);
}

$conn->close();
?>