<?php
// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

// Conexión a la base de datos
$servername = "viaduct.proxy.rlwy.net";
$username = "root";
$password = "KtGVFDUkgapjiXNKyasLYMGVMXPCxqAI";
$database = "railway";
$port = 14966;

$conn = new mysqli($servername, $username, $password, $database, $port);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO Cliente (Nombre_Cli, Correo_Cli, Telefono_Cli, Direccion_Cli)
VALUES ('$nombre', '$correo', '$telefono', '$direccion')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Cliente registrado correctamente";
} else {
    echo "Error al registrar el cliente: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

