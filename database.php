<?php
$server   = "localhost";
$user     = "root";
$password = "";
$db       = "fli_sas";

$con = mysqli_connect($server,$user,$password,$db);


if (!$con) {

	die("Se a producido un error al conectarse:".mysqli_connect_error());
}

$nombres =$_POST['nombres'];
$email =$_POST['email'];
$telefono =$_POST['telefono'];
$mensaje =$_POST['mensaje'];

$query = "INSERT INTO contacto (nombres,email,telefono,mensaje) VALUES ('$nombres','$email','$telefono','$mensaje')";

$resultado = $con->query($query);

if (!$resultado) {
	echo "No se enviaron datos del formulario";
}else{
	echo "Datos enviados correctamente";
}
//3 variables que toman lo que se envía por post del formulario
$destino="gerencia@flisas.com.co";

$asunto="Consulta enviada desde www.flisas.com.co";

$mensajes="Nombre:".$nombres."\r\n";
$mensajes.="Email:".$email."\r\n";
$mensajes.="Telefono".$telefono."\r\n";
$mensajes.="Mensaje".$mensaje."\r\n";

$remitente="From: comercial@flisas.com.co";

mail($destino, $asunto, $mensaje, $remitente);
//El header me redirige a el index de la pagina
header("Location:index.php?i=ok");



?>