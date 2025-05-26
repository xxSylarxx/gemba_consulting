<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Validar reCAPTCHA
if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
    die("Error: Debes completar el reCAPTCHA.");
}

$captcha = $_POST['g-recaptcha-response'];
$secretKey = "6LcrsPMqAAAAAAMsZOskqGjxSPYCoKlcWwYlLgIW"; // Reemplaza con tu clave secreta
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha";
$response = file_get_contents($url);
$responseKeys = json_decode($response, true);

if (!$responseKeys["success"]) {
    die("Error: No se pudo verificar el reCAPTCHA.");
}

// Validar campos del formulario
if (empty($_POST['nombres']) || empty($_POST['correo']) || empty($_POST['celular']) || empty($_POST['motivo']) || empty($_POST['consulta'])) {
    die('Error: Todos los campos son obligatorios.');
}

// Obtener datos del formulario
$nombres = htmlspecialchars($_POST['nombres']);
$correo = htmlspecialchars($_POST['correo']); // Corrección aquí
$celular = htmlspecialchars($_POST['celular']);
$motivo = htmlspecialchars($_POST['motivo']);
$consulta = htmlspecialchars($_POST['consulta']);

// Configurar PHPMailer
$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host       = 'correo.cubicol.com.pe';
    $mail->SMTPAutoTLS = false;
    $mail->SMTPSecure = false;
    $mail->Port       = 25;

    // Configurar remitente y destinatarios
    $mail->setFrom('gembaconsultinggroupo@cubicol.com.pe', 'PAG. WEB - GEMBA CONSULTING');
    //$mail->addAddress('axelmol2018@gmail.com', 'ADMINISTRADOR');
	$mail->addAddress('info@gembaconsultinggroup.com', 'ADMINISTRADOR');

    // Configurar contenido del correo 
    $mail->isHTML(true);
    $mail->Subject = 'FORMULARIO DE CONTACTO';
    $mail->Body = "
        <h4><b>INFORMACIÓN</b></h4>
        <p><b>Nombres: </b> $nombres</p>
        <p><b>Correo: </b> $correo</p>
        <p><b>Celular: </b> $celular</p>
        <p><b>Motivo: </b> $motivo</p>
        <p><b>Consulta: </b> $consulta</p>";

    // Enviar correo
    if ($mail->send()) {
        echo "SE ENVIÓ LA CONSULTA CORRECTAMENTE";
    } else {
        echo "Error: No se pudo enviar el correo.";
    }

} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}



//print_r($_POST);
