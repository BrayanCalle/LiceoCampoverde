<?php
$_POST = json_decode(file_get_contents("php://input"), true);
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$opcion = $_POST['opcion'];
$telefono = $_POST['telefono'];
$comentario = $_POST['comentario'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $comentario . " \r\n";
$mensaje .= "Opción elegida: " . $opcion . " \r\n";
$mensaje .= "Telefono: " . $telefono . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'infonueva@liceocampoverde.edu.ec';
$asunto = 'Mensaje desde liceocampoverde.edu.ec/formulario';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo'<script type="text/javascript">
        alert("Mensaje enviado");
        window.location.href="https://www.liceocampoverde.edu.ec/campoverde_v2/#/home";
        </script>';
?>