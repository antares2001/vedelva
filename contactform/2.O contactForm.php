<?php 

$nombre = $_POST['first_name'];
$apellido = $_POST['last_name'];
$email = $_POST['email'];
$telefono = $_POST['phone'];

$header = 'from: '.$email."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$message = "este message fue enviado por: ".$name."\r\n".$apellido."\r\n";
$message .= "Su e-mail es: ".$email."\r\n";
$message .= "Telefono: ".$phone."\r\n";
$message .= "enviado el: ".date('d/m/Y',time());


$para = 'antares_2001@live.com';
$asunto = 'message de mi web';

if(mail($para,$asunto,utf8_decode($message),$header))
echo "<script type='text/javascript'>alert('Tu message ha sido enviado exitosamente');</script>";
echo "<script type='text/javascript'>window.location.href='https://pruebasgabriel1992.000webhostapp.com/';</script>";

 ?>