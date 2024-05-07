<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

// Conectar a la base de datos
$conexion = new mysqli("viaduct.proxy.rlwy.net", "root", "KtGVFDUkgapjiXNKyasLYMGVMXPCxqAI", "railway", 14966);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}

// Preparar la consulta SQL para insertar el cliente en la base de datos
$sql = "INSERT INTO Cliente (Nombre_Cli, Correo_Cli, Telefono_Cli, Direccion_Cli) VALUES ('$nombre', '$correo', '$telefono', '$direccion')";

// Ejecutar la consulta SQL
if ($conexion->query($sql) === TRUE) {
    echo "Cliente registrado con éxito";
} else {
    echo "Error al registrar el cliente: " . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
