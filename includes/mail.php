<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// eduardo.linares@elaniin.com

if(isset($_POST['email'])) {

	$first_name = $_POST['name']; // requerido
	$phone = $_POST['phone']; // requerido
	$email_from = $_POST['email']; // requerido
	$modalidad = $_POST['modalidad']; // requerido
	$email_to = "eduardo.linares@elaniin.com"; // cambiar por el del cliente
	$subject = "Contacto MVP Sportiva";
	$error_message = "";


	//verifica que la dirección de correo sea válida
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	if(!preg_match($email_exp,$email_from)) {
		$error_message .= 'La dirección de correo proporcionada no es válida.<br />';
	}

	//Se validan las cadenas de texto
	$string_exp = "/^[A-Za-z .'-]+$/";
	if(!preg_match($string_exp,$first_name)) {
		$error_message .= 'El formato del nombre no es válido<br />';
	}

	function clean_string($string) {
		$bad = array("content-type","bcc:","to:","cc:","href");
		return str_replace($bad,"",$string);
	}

	//Este es el cuerpo del mensaje tal y como llegará al correo
	$email_message = "Contenido del Mensaje:\n\n";
	$email_message .= "Nombre: ".clean_string($first_name)."\n";
	$email_message .= "Phone: ".clean_string($phone)."\n";
	$email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Modalidad: ".clean_string($modalidad)."\n";


	//Se crean los encabezados del correo
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	"MIME-Version: 1.0\n" . "Content-type:text/html; charset=UTF-8"."\r\n" .
	'X-Mailer: PHP/' . phpversion();

	if ($error_message == "") {
		$mail_sent = @mail($email_to, $subject, $email_message, $headers);
	}


	if($mail_sent == 1 && $error_message == "") {
		$msg = 'Gracias! Nos pondremos en contacto contigo';
		$classmsg = 'success';
	}else {
		$msg = 'Error! su mensaje no se envió...';
		$classmsg = 'danger';
	}

	return $msg;

}

?>
