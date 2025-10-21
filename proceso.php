<?php

// Guardar los datos recibidos en variables:
$nombre = $_REQUEST['nombre'];
$email = $_REQUEST['email'];
$telefono = $_REQUEST['telefono'];
$mensaje = $_REQUEST['mensaje'];
// Definir el correo de destino:

$dest = "info@electromed.com.co"; 
//$dest = "diego@omgagency.co"; 
 
// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $nombre $email\r\n";
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Aqui definimos el asunto y armamos el cuerpo del mensaje
$asunto = "Contacto";
$cuerpo = "<strong>Nombre:</strong> ".$nombre."<br>";
$cuerpo .= "<strong>Email:</strong> ".$email."<br>";
$cuerpo .= "<strong>Telefono:</strong> ".$telefono."<br>";
$cuerpo .= "<strong>Mensaje:</strong> ".$mensaje;
 
// Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
if($nombre != '' && $email != '' && $telefono != '' && $mensaje != ''){
    mail($dest,$asunto,$cuerpo,$headers); //ENVIAR!
}
?>