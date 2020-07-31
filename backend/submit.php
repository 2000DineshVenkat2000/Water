<?php                                             
include('mailer.php'); 
  
$name = $_POST['Name'];
$email = $_POST['EMail'];
$telephone = $_POST['Telephone'];
$course = $_POST['Subject'];
$datetime = date("d-n-Y / h:i:s");

	if(!empty($name) || !empty($email) || !empty($telephone) || !empty($subject) || !empty($datetime))
	{
		$file = fopen("../temp.html","a");
		fwrite ($file,'_____________________________________<br>
		Name:	[<font color="#ff0000">'.$name.'</font>]<br>
		Email:		[<font color="#33cc33">'.$email.'</font>]<br> 
		Telephone:	[<font color="#ff0000">'.$telephone.'</font>]<br>
		Subject:	[<font color="#ff0000">'.$course.'</font>]<br>   
		Date & time:[<font color="#9900FF">'.$datetime.'</font>]<br><br>');
		fclose($file);
		{

			global $msg, $subject;
				$subject ="Thankyou For Registering on our Website Mr/Mrs".$name." .";
				$msg .="Thank You ".$name." for your contribution<br><br>";
				$msg .="========== Contributor Details ==========<br><br><br>";
				$msg .="User Name: 	".$name."<br><br><br>";
				$msg .="Email: 		".$email."<br><br><br>";
				$msg .="Contact num:".$telephone."<br><br><br>";
				$msg .="Location: 	".$course."<br><br>";
				$msg .="==========================================<br><br><br>";
				$msg .="From Team17 <br>Guru Roxz<br> Dinesh Kumar Sai";

			mail::sendmail($subject,$msg,$email);
			
		}
		header("location:../frontend/Thankyou.html");
	}
else
{
	echo "all field are required";
	die();
}


?>