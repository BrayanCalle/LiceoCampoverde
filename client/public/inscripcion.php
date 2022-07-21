<?php
// Datos del alumno
$nombrealumno = $_POST['nombrealumno'];
$fechanacimientoalumno = $_POST['fechanacimientoalumno'];
$lugarnacimientoalumno = $_POST['lugarnacimientoalumno'];
$domicilioalumno = $_POST['domicilioalumno'];
$gradoalumno = $_POST['gradoalumno'];
$cedulaalumno = $_POST['identificacionalumno'];
$edadalumno = $_POST['edadalumno'];
$paisalumno = $_POST['paisalumno'];
// Datos del Padre
$nombrepadre = $_POST['nombrepadre'];
$fechanacimientopadre = $_POST['fechanacimientopadre'];
$profesionpadre = $_POST['profesionpadre'];
$direcciontrabajopadre = $_POST['direcciontrabajopadre'];
$telefonocasapadre = $_POST['telefonocasapadre'];
$telefonocelularpadre = $_POST['telefonocelularpadre'];
$pasaportepadre = $_POST['pasaportepadre'];
$direcciondomiciliopadre = $_POST['direcciondomiciliopadre'];
$lugartrabajopadre = $_POST['lugartrabajopadre'];
$emailpadre = $_POST['emailpadre'];
$telefonotrabajopadre = $_POST['telefonotrabajopadre'];
// Datos de la Madre
$nombremadre = $_POST['nombremadre'];
$fechanacimientomadre = $_POST['fechanacimientomadre'];
$profesionmadre = $_POST['profesionmadre'];
$direcciontrabajomadre = $_POST['direcciontrabajomadre'];
$telefonocasamadre = $_POST['telefonocasamadre'];
$telefonocelularmadre = $_POST['telefonocelularmadre'];
$pasaportemadre = $_POST['pasaportemadre'];
$direcciondomiciliomadre = $_POST['direcciondomiciliomadre'];
$lugartrabajomadre = $_POST['lugartrabajomadre'];
$emailmadre = $_POST['emailmadre'];
$telefonotrabajomadre = $_POST['telefonotrabajomadre'];

$header = 'From: ' . $emailpadre . $emailmadre . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

// Mensaje alumno
$mensaje = "Los nombres del alumno son: " . $nombrealumno . ",\r\n";
$mensaje = "La fecha de nacimiento del alumno es: " . $fechanacimientoalumno . ",\r\n";
$mensaje = "El lugar del nacimiento del alumno es: " . $lugarnacimientoalumno . ",\r\n";
$mensaje = "El domicilio del alumno es: " . $domicilioalumno . ",\r\n";
$mensaje = "El grado o el curso al que postula el alumno es: " . $gradoalumno . ",\r\n";
$mensaje = "El número de identificacion del alumno es: " . $cedulaalumno . ",\r\n";
$mensaje = "La edad del alumno es: " . $edadalumno . ",\r\n";
$mensaje = "La pais del alumno es: " . $paisalumno . ",\r\n";
// Mensaje Padre
$mensaje = "Los nombres del padre son: " . $nombrepadre . ",\r\n";
$mensaje = "La fecha de nacimiento del padre es: " . $fechanacimientopadre . ",\r\n";
$mensaje = "La profesión del padre es: " . $profesionpadre . ",\r\n";
$mensaje = "La dirección del trabajo del padre es: " . $direcciontrabajopadre . ",\r\n";
$mensaje = "El telefono de casa del padre es: " . $telefonocasapadre . ",\r\n";
$mensaje = "El telefono celular del padre es: " . $telefonocelularpadre . ",\r\n";
$mensaje = "El pasaporte del padre es: " . $pasaportepadre . ",\r\n";
$mensaje = "La dirección del domicilio del padre es: " . $direcciondomiciliopadre . ",\r\n";
$mensaje = "El lugar del trabajo del padre es: " . $lugartrabajopadre . ",\r\n";
$mensaje = "El email del padre es: " . $emailpadre . ",\r\n";
$mensaje = "El telefono de trabajo del padre es: " . $telefonotrabajopadre . ",\r\n";
// Mensaje madre
$mensaje = "Los nombres de la madre son: " . $nombremadre . ",\r\n";
$mensaje = "La fecha de nacimiento de la madre es: " . $fechanacimientomadre . ",\r\n";
$mensaje = "La profesión de la madre es: " . $profesionmadre . ",\r\n";
$mensaje = "La dirección del trabajo de la madre es: " . $direcciontrabajomadre . ",\r\n";
$mensaje = "El telefono de casa de la madre es: " . $telefonocasamadre . ",\r\n";
$mensaje = "El telefono celular de la madre es: " . $telefonocelularmadre . ",\r\n";
$mensaje = "El pasaporte de la madre es: " . $pasaportemadre . ",\r\n";
$mensaje = "La dirección del domicilio de la madre es: " . $direcciondomiciliomadre . ",\r\n";
$mensaje = "El lugar del trabajo de la madre es: " . $lugartrabajomadre . ",\r\n";
$mensaje = "El email de la madre es: " . $emailmadre . ",\r\n";
$mensaje = "El telefono de trabajo de la madre es: " . $telefonotrabajomadre . ",\r\n";


$para = 'infonueva@liceocampoverde.edu.ec';
$asunto = 'Mensaje desde liceocampoverde.edu.ec/inscripcion';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo'<script type="text/javascript">
        alert("Mensaje enviado");
        window.location.href="https://www.liceocampoverde.edu.ec/campoverde_v2/#/inscripcion";
        </script>';
?>