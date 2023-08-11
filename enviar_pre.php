<?php


$datos_bd = mysqli_connect("localhost", "root", "", "clientes_bd") or exit ("No se puede conectar con la base de datos");



if ($datos_bd->connect_error) {
    die("Error de conexión: " . $datos_bd->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $tipo_proyecto = $_POST["tipo_proyecto"];
    $dimensiones = $_POST["dimensiones"];
    
    $sql = "INSERT INTO presupuestos (nombre, email, tipo_proyecto, dimensiones) VALUES ('$nombre', '$email', '$tipo_proyecto', '$dimensiones')";
    
    if ($datos_bd->query($sql) === TRUE) {
        echo "Presupuesto enviado con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . $datos_bd->error;
    }
}

$datos_bd->close();
?>