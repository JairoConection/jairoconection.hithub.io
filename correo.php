<?php
$destinatario='jairorocketcaiza94@gmail.com';
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

$header="Enviado desde lapagina web de JairoConection";
$mensajeCompleto=$mensaje."\nAtentamente:".$nombre;
mail($destinatario,$email,$mensajeCompleto,$header);
echo"<script>alert('Correo Enviado exitosamente')</script>";
echo"<script>setTimeout(\"location.href='index.html'\",1000)</script>"

?>
//https://www.youtube.com/watch?v=hmFFsMK_-vE