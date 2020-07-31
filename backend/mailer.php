<?php
class mail
{
	public static function sendmail($subject, $body, $address)
	{

		require_once('../phpmailer/PHPMailerAutoload.php');
			$mail = new PHPMailer();
			$mail->isSMTP();
			$mail->SMTPAuth= true;
			$mail->SMTPSecure = 'ssl';
			$mail->Host='smtp.gmail.com';
			$mail->Port='465';
			$mail->isHTML();
			$mail->Username='gurutesting001@gmail.com';
			$mail->Password='iamhacker';
			$mail->SetFrom('no-replay@svce.ac.in');
			$mail->Subject=$subject;
			$mail->Body=$body;
			$mail->AddAddress($address);

			$mail->Send();
	}
}
?>