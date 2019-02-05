<?php
	$destino = "oeneikaphotos@gmail.com";
	$nombre = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$message = $_POST["message"];
	$contenido = "Nombre: ". $nombre;
	mail($destino, "Contacto" , $contenido);
	header("Location:articles.html");
?>