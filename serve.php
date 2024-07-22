<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $to = "icardosopillado@gmail.com";
    $subject = "Mensaje de $nombre $apellido";
    $body = $mensaje;
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email enviado con éxito.";
    } else {
        echo "Error al enviar el email.";
    }
}
?>