<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio - Empresa Aber</title>
</head>
<body>
    <section>
 
    <div class="container">
    <h1>Bienvenido a la Empresa Aber</h1>

    <!-- Formulario para enviar opiniones -->
    <h2>Enviar Opinión</h2>
    <form action="enviar_op.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label for="opinion">Opinión:</label>
        <input type="text" name="opinion"  required/><br>
        <input type="submit" value="Enviar Opinión">
    </form>

    <!-- Sección para mostrar opiniones aprobadas -->
    <h2>Opiniones de Clientes</h2>
    <input type="submit" value="">


    <div id="opiniones">
        <?php include("mostrar_op_apr.php"); ?>
    </div>

    <!-- Formulario para enviar presupuestos -->
    <h2>Solicitar Presupuesto</h2>
    <form action="enviar_pre.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="tipo_proyecto">Tipo de Proyecto:</label>
        <input type="text" name="tipo_proyecto" required><br>
        <label for="dimensiones">Dimensiones:</label>
        <input type="text" name="dimensiones" required><br>
        <input type="submit" value="Enviar Solicitud">
    </form>

    <!-- Sección para mostrar presupuestos enviados -->
    <h2>Presupuestos Enviados</h2>
    <div id="presupuestos">
        <?php include("mostrar_pre.php"); ?>
    </div>
    </div>
</section>
</body>
</html>