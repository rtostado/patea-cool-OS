<?php
	require 'PHPMailer/PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;



	$mail->isSMTP();
	$mail->Host = 'mx1.hostinger.mx'; // Specify main and backup SMTP servers
	$mail->SMTPAuth = true; // Enable SMTP authentication
	$mail->Username = 'rogelio@yotambiensoyzapopan.hol.es'; // SMTP username
	$mail->Password = '123456789'; // SMTP password
	$mail->Port = 2525; // TCP port to connect to

	$mail->From = 'rogelio@yotambiensoyzapopan.hol.es';
	$mail->FromName = 'Yo Tambien Soy Zapopan A.C.';
	$mail->addAddress('rtostado92@gmail.com'); // Name is optional
	//$mail->addCC('rtostado92@gmail.com');

	$mail->WordWrap = 50;
	$mail->isHTML(true);

	$mail->Subject = 'Mensaje de Bienvenida';
$mail->Body = 'Estimado  Administrador<br/>
 			Este correo es para informarle que se agrego un nuevo registro de colonia<br/>
 			Yo Tambien Soy Zapopan, si no se autorizo este registro favor de revisar la <br/>
 			base de datos.';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Mensage enviado con EXITO!!!';
	}

?>