<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$opciones = $_POST['opcion'];
foreach ($opciones as $opcion){
    $opcion;
}
$telefono = $_POST['telefono'];
$comentario = $_POST['comentario'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $comentario . " \r\n";
$mensaje .= "Opción elegida: " . $opcion . " \r\n";
$mensaje .= "Telefono: " . $telefono . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'brayanj041998@gmail.com';
$asunto = 'Mensaje desde liceocampoverde.edu.ec/formulario';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo'<script type="text/javascript">
        alert("Mensaje enviado");
        window.location.href="https://www.liceocampoverde.edu.ec/campoverde_v2/#/home";
        </script>';
?>