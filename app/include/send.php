<?php

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$fam = $_POST['fam'];
$name = $_POST['name'];
$group = $_POST['group'];
$email = $_POST['email'];
$content= $_POST['content'];
//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'student.ukogy@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'ukogu2920021'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('student.ukogy@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('ike.ewq@mail.ru');     // Кому будет уходить письмо
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Вопрос студента';
$mail->Body    = 'Фамилия студента:  ' .$fam.' <BR> Имя студента:' .$name. '<br> Группа: ' .$group. ' <BR> E-mail: ' .$email. ' <br> Вопрос: '.$content ;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
    echo '<p>Произошла ошибка: ' . error_reporting(E_ALL) . '</p>';
} else {
    header('location: ../../index.php');
}




?>

