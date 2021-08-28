<?php

require_once('PHPMailer/PHPMailerAutoload.php');
$mail=new PHPMailer(true);

$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Mailer = "smtp";
$mail->Host='smtp.gmail.com';
$mail->Port='587';
$mail->isHTML();
$mail->Username='sbtharun2001@gmail.com';
$mail->Password='softtharun123';
$mail->SetFrom('sbtharun2001@gmail.com');
$mail->Subject='HelloWorld';
$mail->Body="Your Ticket Has been booked";
$mail->AddAddress('tharunrajs.b2018@vitstudent.ac.in');

if (!$mail->Send()) {
    throw new Exception($mail->ErrorInfo);
}
else
{
	echo "<h1 align=center>Mail sent</h1>";
}

?>

