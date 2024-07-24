<?php
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto_id = $_POST['producto_id'];

    if (!in_array($producto_id, $_SESSION['carrito'])) {
        $_SESSION['carrito'][] = $producto_id;
    }

    echo json_encode($_SESSION['carrito']);
}
?>