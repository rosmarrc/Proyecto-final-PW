<?php
include('conexion.php');

$consultaLibros = $conn->query("SELECT * FROM libros");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Libros</title>
</head>
<body>
    <h1>Listado de Libros</h1>

    <?php

    if ($consultaLibros->rowCount() > 0) {
        while ($libro = $consultaLibros->fetch(PDO::FETCH_ASSOC)) {
            echo "<p>{$libro['titulo']} - {$libro['autor']} ({$libro['anio_publicacion']})</p>";
        }
    } else {
        echo "<p>No hay libros disponibles.</p>";
    }
    ?>

</body>
</html>
