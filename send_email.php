<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Correo al que se enviará el mensaje
    $to = "induxtrias@proton.me";
    
    // Asunto del correo
    $subject = "Nuevo mensaje de: $name";
    
    // Cuerpo del correo
    $body = "Nombre: $name\nCorreo Electrónico: $email\n\nMensaje:\n$message";
    
    // Cabeceras del correo
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Hubo un problema al enviar el mensaje.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
