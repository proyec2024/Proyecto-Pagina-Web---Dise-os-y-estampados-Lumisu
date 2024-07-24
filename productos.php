<?php
include 'db_conexion.php';

$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='producto'>";
        echo "<h2>" . $row['nombre'] . "</h2>";
        echo "<p>" . $row['descripcion'] . "</p>";
        echo "<p>Precio: $" . $row['precio'] . "</p>";
        echo "<button onclick='agregarAlCarrito(" . $row['id'] . ")'>Agregar al Carrito</button>";
        echo "</div>";
    }
} else {
    echo "No hay productos disponibles.";
}

$conn->close();
?>