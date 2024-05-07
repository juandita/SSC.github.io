<?php
// Obtener los datos del formulario
$descripcion = $_POST['descripcion'];
$cliente_id = $_POST['cliente'];
$empleado_id = $_POST['empleado'];

// Conectar a la base de datos
$conexion = new mysqli("viaduct.proxy.rlwy.net", "root", "KtGVFDUkgapjiXNKyasLYMGVMXPCxqAI", "railway", 14966);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
}

// Preparar la consulta SQL para insertar el ticket en la base de datos
$sql = "INSERT INTO Ticket (Descripcion_TK, Estado_TK, Empleado_ID, Cliente_ID) VALUES ('$descripcion', 'Abierto', '$empleado_id', '$cliente_id')";

// Ejecutar la consulta SQL
if ($conexion->query($sql) === TRUE) {
    echo "Ticket creado con éxito";
} else {
    echo "Error al crear el ticket: " . $conexion->error;
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
