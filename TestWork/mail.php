<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$phone = $_POST['user_phone'];


$mail->isSMTP();                                   
$mail->Host = 'smtp.mail.ru';  																							
$mail->SMTPAuth = true;                           
$mail->Username = 'lina.chelovechkova@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'angry1998'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465; 

$mail->setFrom('lina.chelovechkova@mail.ru'); 
$mail->addAddress('lina.chelovechkova@mail.ru');     

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = 'Оставил заявку, его телефон ' .$phone.
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>