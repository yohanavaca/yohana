<?php



$datos_bd = mysqli_connect("localhost", "root", "", "clientes_bd") or exit ("No se puede conectar con la base de datos");


if ($datos_bd->connect_error) {
    die("Error de conexión: " . $datos_bd->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $opinion = $_POST["opinion"];


    
    $sql = "INSERT INTO opiniones (nombre, opinion) VALUES ('$nombre', '$opinion' )";
    
    if ($datos_bd->query($sql) === TRUE) {
        echo "Opinión enviada para revisión.";
    } else {
        echo "Error: " . $sql . "<br>" . $datos_bd->error;
    }
}

$datos_bd->close();
?>