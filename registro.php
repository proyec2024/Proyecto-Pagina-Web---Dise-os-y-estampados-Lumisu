<?php
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


if (empty($nombre)) {
    header("Location: components.php?mensaje=Error, el nombre de usuario esta vacio"); 
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
    $username_check_query = "SELECT * FROM $db_table_name WHERE usuario = '$subs_username'";
    $result = mysqli_query($db_connection, $username_check_query);

    if (mysqli_num_rows($result) > 0) {
        header('Location: components.php');
        exit(); // Termina el script después de redireccionar
    } else {
        // Hashear la contraseña antes de almacenarla
        $hashed_password = password_hash($subs_password, PASSWORD_DEFAULT);

        // Consulta para insertar los datos del usuario
        $insert_query = "INSERT INTO $db_table_name ( usuario, password) VALUES ('$subs_username', '$subs_password')";

        if (mysqli_query($db_connection, $insert_query)) {
            header('Location: components.php');
            exit(); // Termina el script después de redireccionar
        } else {
            echo "Error al registrar: " . mysqli_error($db_connection);
        }
    }
    // Cerrar la conexión a la base de datos
    mysqli_close($db_connection);
}
