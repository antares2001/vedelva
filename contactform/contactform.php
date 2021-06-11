<?php

// Llamando a los campos
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$mensaje = $_POST['mensaje'];

$header = 'from: '.$email."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$carta = "De: $name \n";
$carta .= "Correo: $email \n";
$carta .= "subject: $subject \n";
$carta .= "Mensaje: $mensaje";

// Datos para el correo
$destinatario = "antares_2001@live.com";
$asunto = "Contacto desde nuestra web";


// Enviando Mensaje
if(mail($destinatario,$asunto,utf8_decode($carta),$header))
{
echo "<script type='text/javascript'>alert('Tu message ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='https://vedelva.000webhostapp.com';</script>";
}
else
{
echo "<script type='text/javascript'>alert('Tu message no se ha enviado');</script>";
}

?>