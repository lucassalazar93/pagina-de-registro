<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "127.0.0.1"; // Dirección del servidor
$username = "lukas";       // Usuario de la base de datos
$password = "salazar9394"; // Contraseña del usuario
$dbname = "registro_usuarios_db"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Preparar y vincular
$stmt = $conn->prepare("INSERT INTO usuarios (nombres, apellidos, email, usuario, contraseña) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nombres, $apellidos, $email, $usuario, $contraseña);

// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "Registro exitoso";
        // Redirigir a una página de éxito (por ejemplo, success.html)
        // header("Location: success.html");
        // exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Método de solicitud no permitido.";
}
?>