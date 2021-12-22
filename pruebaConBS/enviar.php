<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $correo . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n"; 
$header .= "Mime-Version 1.0 \r\n"; 
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . " " . $apellido . "\r\n";
$mensaje .= "Su mail es: " . $correo . "\r\n";
$mensaje .= "Telefono de contacto: " . $celular . "\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'hospedajelasboxer@hotmail.com';
$asunto = 'Cabañas Las Boxer';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:../index.html");
?>

