<?php
$para="valefralasco@gmail.com";
$nombre=$_POST["first_name"];
$asunto="enviado por: ".$nombre;
$mensaje=$_POST["mesagge1"];
$de=$_POST["mail"];

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers.="From: $de \r\n";
$headers.="To: $para; \r\n Subject: $asunto \r\n";

if(mail($para, $asunto, $mensaje,$headers))
	echo "envio correcto";
else
	echo "fallo envio";


?>