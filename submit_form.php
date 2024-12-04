<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validación básica (puedes agregar más validaciones)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Todos los campos son obligatorios.";
    } else {
        // Aquí podrías enviar un correo electrónico o guardar los datos en una base de datos
        // Para este ejemplo, vamos a enviar un correo electrónico:
        $to = "tu_correo@dominio.com";  // Tu correo electrónico
        $subject = "Nuevo mensaje de contacto";
        $body = "Nombre: $name\nCorreo electrónico: $email\n\nMensaje:\n$message";
        $headers = "From: $email";

        // Enviar el correo
        if (mail($to, $subject, $body, $headers)) {
            echo "Mensaje enviado con éxito.";
        } else {
            echo "Hubo un problema al enviar el mensaje.";
        }
    }
}
?>