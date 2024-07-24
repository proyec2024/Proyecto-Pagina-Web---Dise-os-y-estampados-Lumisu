<?php
session_start();
include 'db_connection.php';

if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
    $ids = implode(",", $_SESSION['carrito']);
    $sql = "SELECT * FROM productos WHERE id IN ($ids)";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='producto'>";
            echo "<h2>" . $row['nombre'] . "</h2>";
            echo "<p>" . $row['descripcion'] . "</p>";
            echo "<p>Precio: $" . $row['precio'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "El carrito está vacío.";
    }
} else {
    echo "El carrito está vacío.";
}

$conn->close();
?>