<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['email'];
$provincias = $_POST['provincia'];
foreach ($provincias as $provincia){
    $provincia;
}
$telefono = $_POST['telefono'];
$comentarios = $_POST['comentarios'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre ." " .$apellido . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $comentarios . " \r\n";
$mensaje .= "Provincia de interes: " . $provincia . " \r\n";
$mensaje .= "Telefono: " . $telefono . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'maeep154@gmail.com';
$asunto = 'Mensaje desde dominio.com/pagina';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo'<script type="text/javascript">
        alert("Mensaje enviado");
        window.location.href="index.html";
        </script>';
?>