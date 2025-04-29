<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $edad = htmlspecialchars($_POST['edad']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $personas = htmlspecialchars($_POST['personas']);
    $sexo = htmlspecialchars($_POST['sexo']);
    $situacion = htmlspecialchars($_POST['situacion']);

    // Configuración del correo
    $to = "sebastian475f@gmail.com"; // Cambia esto por tu dirección de correo
    $subject = "Nueva respuesta de la encuesta";
    $message = "
        Nombre: $nombre\n
        Email: $email\n
        Edad: $edad\n
        Teléfono: $telefono\n
        Número de personas: $personas\n
        Sexo: $sexo\n
        Situación: $situacion
    ";
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "¡Gracias! Tu información ha sido enviada.";
    } else {
        echo "Hubo un error al enviar tu información. Por favor, intenta nuevamente.";
    }
}
?>