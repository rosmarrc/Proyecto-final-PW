<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $comentario = $_POST["comentario"];


    header("Location: contacto.php?success=true");
    exit();
} else {

    header("Location: contacto.php");
    exit();
}
?>
