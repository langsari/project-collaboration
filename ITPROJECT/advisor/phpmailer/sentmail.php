<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth= 'true';
$mail->Username = 'nikhusnee1003@gmail.com';
$mail->Password = 'koko4560';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->setFrom('nikhusnee1003@gmail.com','
IT project monitoring and tracking');
$mail->addAddress($_POST{'email'},'test');
$mail->addAttachment('/var/tmp/file.tar.gz');
$mail->addAttachment('/var/image.jpg','new.jpg');
$mail->isHTML(true);
$mail->Subject = 'IT Project';
$mail->Body = 'Hi '.$_POST['name'].'<br>'.$_POST['con'];
if(!$mail->send()) {
	echo 'Mailer Error'.$mail->ErrorInfo;


}else{
	 echo "<script>alert('Already Send!' )</script>";
echo "<script>window.open('../index.php?page=contact1')</script>";

		


}


?>
