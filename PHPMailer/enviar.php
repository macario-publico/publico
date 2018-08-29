<?php


require("class.phpmailer.php");
require("class.smtp.php");

// Valores enviados desde el formulario
if ( !isset($_POST["nombre"]) || !isset($_POST["email"]) || !isset($_POST["telefono"])  || !isset($_POST["empresa"])  || !isset($_POST["comentarios"]) || !isset($_POST["aviso"])  ) {
    die ("Es necesario completar todos los datos del formulario");
}





$nombre = $_POST["nombre"];

$email = $_POST["email"];

$telefono = $_POST["telefono"];

$empresa = $_POST["empresa"];

$mensaje = $_POST["comentarios"];

$aviso = $_POST["aviso"];


$destinatario = "dan@nexoplus.co";


// Datos de la cuenta de correo utilizada para enviar v�a SMTP
$smtpHost = "mail.nexoplus.co";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "dan@nexoplus.co";  // Mi cuenta de correo
$smtpClave = "DanNexo123";  // Mi contrase�a




$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 465; 
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";

// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;


$mail->From = $email; // Email desde donde env�o el correo.
$mail->FromName = $nombre;
$mail->AddAddress($destinatario); // Esta es la direcci�n a donde enviamos los datos del formulario

$mail->Subject = "Formulario desde NEXO"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "
<html> 

<body> 

<h1>Recibiste un nuevo mensaje desde el formulario de contacto</h1>

<p>Informacion enviada por el usuario de la web:</p>

<p>nombre: {$nombre}</p>

<p>email: {$email}</p>

<p>telefono: {$telefono}</p>

<p>empresa: {$empresa}</p>

<p>mensaje: {$comentarios}</p>

<p>Aviso: {$aviso}</p>

</body> 

</html>

<br />"; // Texto del email en formato HTML
$mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    echo "El correo fue enviado correctamente.";

} else {
    echo "Ocurri� un error inesperado.";
}







?>

