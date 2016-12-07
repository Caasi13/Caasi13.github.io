<?php
$con_name = $_POST["con_name"];
$con_email = $_POST["con_email"];
$con_message = $_POST["con_message"];

$to = "hola@isaacsuaste.com";   
$subject = "Contacto Nuevo";

$message = "

Name:  ".$con_name."
E-mail:  ".$con_email."
Message  ".$con_message."
";

mail($to,$subject,utf8_decode($message));
echo "<p><h2>Hemos recibido tu mensaje</h2></p>;

?>


