

<?php
session_start();
$admin_id = $_SESSION['id'];

                require '../menu/connect.php';


$id = $_GET['id'];

$sql = "UPDATE member SET admin_id = '$admin_id' WHERE member_id = '$id'";

if($db->query($sql)){
	$db->close();
				header("Location: ../admin/accept_member.php");


}else{
	echo $db->error;
	$db->close();
}


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
$mail->addAddress($_POST{'member_email'},'test');
$mail->addAttachment('/var/tmp/file.tar.gz');
$mail->addAttachment('/var/image.jpg','new.jpg');
$mail->isHTML(true);
$mail->Subject = 'IT Project';
$mail->Body = 'Welcome .... You are member of IT Project Cause. Go to http://localhost/ITPROMO/Web-Application-IT-Project-Collaboration/itpromo&track/index.php';





if(!$mail->send()) {
  echo 'Mailer Error'.$mail->ErrorInfo;


}else{
   echo "<script>alert('Already Send!' )</script>";
echo "<script>window.open('../admin/accept_member.php')</script>";

    


}


?>