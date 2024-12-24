<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Dirección de correo electrónico del destinatario
    $to = "dr.marceloarielsamaniego@gmail.com";

    // Asunto del correo
    $subject = "Solicitud de turno";

    // Mensaje del correo
    $message = "Quiero un turno.";

    // Encabezados del correo
    $headers = "From: no-reply@tu-dominio.com" . "\r\n" .
               "Reply-To: no-reply@tu-dominio.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado exitosamente.";
    } else {
        echo "Hubo un error al enviar el correo.";
    }
} else {
    echo "Método no permitido.";
}
?>
