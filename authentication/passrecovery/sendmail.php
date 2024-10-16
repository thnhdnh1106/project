<?php

require 'passrecovery/PHPMailer-5.2-stable/PHPMailerAutoload.php';

$mail = new PHPMailer;

// SMTP configuration for Gmail
//$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->Username = 'testerforwork666@gmail.com';
$mail->Password = 'rkekksvaibhvjuhe';


// Email content
$mail->setFrom('testerforwork666@gmail.com', 'THANH DANH');
$mail->addAddress('testkan31@gmail.com', 'CTDANH');

$mail->isHTML(true);
$mail->Subject = 'Reset Passwork Gmail';
$mail->Body = 'Click here to reset password';

// Send the email
if(!$mail->send()){
    echo "Message could not be sent!";
}
else{
    echo "Message has been sent!" ;
}



//sqav ukzj pfbi viyb
//testerforwork666@gmail.com

//nicj zbkw dqrn ghhj testing
?>