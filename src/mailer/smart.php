<?php 

$name = $_POST['name'];
$email = $_POST['email'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                                // Enable verbose debug output

$mail->isSMTP();                                        // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                 // Enable SMTP authentication
$mail->Username = '';                 				    // Login
$mail->Password = '';                           	    // Password (требуется специальный ключ для внешних приложений)
$mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                      // TCP port to connect to

$mail->setFrom('', 'Alexandra Smith`s Portfolio');   							// From whom this letter 
$mail->addAddress('');     								// Add a recipient
// $mail->addAddress('example@test.com');               // Name is optional
//$mail->addReplyTo('example2@test.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                    // Set email format to HTML

$mail->Subject = 'Данные';
$mail->Body    = '
		Пользователь оставил данные <br> 
	Имя: ' . $name . ' <br>              
	E-mail: ' . $email . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>