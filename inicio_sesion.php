<?php
session_start();
    
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "sesiones";
$db_table_name = "entrada_usuario";

// Conexión a la base de datos
$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Verificar la conexión
if (!$db_connection) {
    die("Error de conexión: " . mysqli_connect_error());
}


$nombre = $_POST['usuario'];
$contrasena = $_POST['password'];


if (empty($nombre) || empty($contrasena)) {
    header("Location: components.php?mensaje=Error, el nombre de usuario o contraseña esta vacio"); 
} else if (empty($contrasena)) {
    header("Location: components.php?mensaje=Error, la contraseña esta vacia"); 
} else {

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
    $username_password_check = "SELECT * FROM $db_table_name WHERE usuario = '$subs_username' AND password = '$subs_password'";
    $result_2 = mysqli_query($db_connection, $username_password_check);
    
    if (mysqli_num_rows($result_2) > 0) {

        // Preparar la consulta
        $fila = mysqli_fetch_assoc($result_2);
        $_SESSION['usuario'] = $fila['usuario'];
        header("Location: work.php");
        exit();
    } else {
        header("Location: components.php?mensaje=Error, el usuario y la contraseña no coinciden");
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($db_connection);
}
