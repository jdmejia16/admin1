<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contacto</title>
<style type="text/css">
p {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #fff;
	text-decoration: none;
	text-align:center;
}
</style>
<style>
img[src*="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"] {
    display: none;
}
</style>
</head>
<body>
<?php
//
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$empresa = $_POST['empresa'];
$dirección = $_POST['dirección'];
$día = $_POST['día'];
$mes = $_POST['mes'];
$año = $_POST['año'];
$comentarios = $_POST['comentarios'];

//Comienso de estructura de envio.

$mailsend = mail ('diego-08m@hotmail.com', 'Nuevo Mensaje', "Nombre: $nombre\r\nApellido: $apellido\r\nTelefono: $telefono\r\nCorreo: $correo\r\nEmpresa: $empresa\r\nDirección: $dirección\r\nDía: $día\r\nMes: $mes\r\nAño: $año\r\nComentarios:  $comentarios\r\n");

if ($mailsend){
	echo "<p>Saludos $nombre $apellido. Me ha llegado su correo electronico, me comunicare con usted lo antes posible, Gracias por escribirme...</p>";
	}
	
	else{
		echo "Lo siento su correo no fue enviado.";
		}
?>
</body>
</html>