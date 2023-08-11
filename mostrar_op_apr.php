<?php
$datos_bd = mysqli_connect("localhost", "root", "", "clientes_bd") or exit ("No se puede conectar con la base de datos");

if ($datos_bd->connect_error) {
    die("Error de conexión: " . $datos_bd->connect_error);
}

$sql = "SELECT nombre, opinion FROM opiniones WHERE aprobado = 0 ORDER BY fecha DESC";
$result = $datos_bd->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>" . $row["nombre"] . "</strong>: " . $row["opinion"] . "</p>";
    }
} else {
    echo "No hay opiniones disponibles.";
}

$datos_bd->close();
?>