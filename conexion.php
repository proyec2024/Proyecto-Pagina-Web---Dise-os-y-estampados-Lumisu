<?php
$db_host = "localhost";
$db_user = "root"; 
$db_password = ""; 
$db_name = "sesiones";

// Conexión a la base de datos
$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Verificar la conexión
if (!$db_connection) {
    die("Error de conexión: " . mysqli_connect_error());
}
// Incluir el archivo de conexión
include 'conexion.php';

// Función para limpiar y escapar datos
function clean_input($data)
{
    global $db_connection;
    return mysqli_real_escape_string($db_connection, htmlspecialchars($data));
}

// Limpiar y escapar los datos de entrada
$subs_username = clean_input($_POST['usuario']);
$subs_password = clean_input($_POST['password']);

// Consulta para verificar si el usuario ya está registrado
$username_check_query = "SELECT * FROM entrada_usuario WHERE usuario = '$subs_username'";
$result = mysqli_query($db_connection, $username_check_query);

if (mysqli_num_rows($result) > 0) {
    header('Location: Fail.html');
    exit(); // Termina el script después de redireccionar
} else {
    // Hashear la contraseña antes de almacenarla
    $hashed_password = password_hash($subs_password, PASSWORD_DEFAULT);

    // Consulta para insertar los datos del usuario
    $insert_query = "INSERT INTO entrada_usuario (usuario, password) VALUES ('$subs_username', '$hashed_password')";

    if (mysqli_query($db_connection, $insert_query)) {
        header('Location: index.php');
        exit(); // Termina el script después de redireccionar
    } else {
        echo "Error al registrar: " . mysqli_error($db_connection);
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($db_connection);
?>