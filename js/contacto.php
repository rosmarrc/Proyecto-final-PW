<?php
include('conexion.php');

// Verifica si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $comentario = $_POST["comentario"];

    // Inserta los datos en la tabla 'contacto'
    $stmt = $conn->prepare("INSERT INTO contacto (fecha, nombre, correo, asunto, comentario) VALUES (NOW(), ?, ?, ?, ?)");
    $stmt->execute([$nombre, $correo, $asunto, $comentario]);

    // Redirige a una página de éxito
    header("Location: contacto.php?success=true");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Contacto</h1>

    <?php
    // Muestra un mensaje de éxito si el formulario se ha enviado correctamente
    if (isset($_GET["success"]) && $_GET["success"] == "true") {
        echo "<p>¡Gracias! Tu mensaje ha sido enviado correctamente.</p>";
    }
    ?>

    <!-- Formulario de Contacto -->
    <form action="contacto.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="asunto">Asunto:</label>
        <input type="text" id="asunto" name="asunto" required>

        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario" required></textarea>

        <button type="submit">Enviar Mensaje</button>
    </form>

</body>
</html>
