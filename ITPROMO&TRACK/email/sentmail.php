<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth= 'true';
$mail->Username = 'advisorfst123@gmail.com';
$mail->Password = 'itpromo123';
$mail->SMTPSecure = 'ssl';
$mail->Port = 25 ;
$mail->setFrom('advisorfst123@gmail.com','
nik-husnee nik-uma');
$mail->addAddress($_POST{'email'},'test');
//$mail->addAttachment('/var/tmp/file.tar.gz');
//$mail->addAttachment('/var/image.jpg','new.jpg');
$mail->isHTML(true);
$mail->Subject = 'test2';
$mail->Body = 'สวัสดีค่ะ'.$_POST['name'].'<br>'.$_POST['con'];
if(!$mail->send()) {
	echo 'Mailer Error'.$mail->ErrorInfo;
}else{
	echo 'Success';
}


?>