<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="description" content="Gyanith '18 is the second version of single technical symposium of NIT Puducherry.">
		<meta name="author" content="Web Team Gyanith,NIT Py" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<title>Gyanith 18 </title>
		<link rel="icon" type="image/png" href="images/gyanith-icon.png" sizes="32x32">
		<meta property="og:title" content="Gyanith 18" />
		<meta property="og:description" content="Annual technical fest by NIT Puducherry" />
	</head>
<body>
<?php
 	session_start();
 	function send_mail($email,$body,$body1){
		require_once('PHPMailer-master/PHPMailerAutoload.php');
		$mail = new PHPMailer;
		$mail->isSMTP();                                     
		$mail->Host ='cp-in-17.webhostbox.net';
		$mail->SMTPAuth = true;
		$mail->Username = 'team@gyanith.org';   
		$mail->Password = 'gyanith@2018';  
		$mail->SMTPSecure = 'ssl';
		$mail->Port =465;    
		$mail->From='team@gyanith.org';                     
		$mail->FromName = "Gyanith'18 Team";
		$mail->addAddress($email);                 
		$mail->WordWrap = 50;                               
		$mail->Subject = "Gyanith '18 Account Activated";
		$mail->Body    = $body;
		$mail->AltBody  =  $body1;
		//$mail->SMTPDebug = 3;
		if(!$mail->send()) {
			 // echo 'Message could not be sent.';
			//echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			//echo 'Message has been sent';
		}
	}
	try{
		include("dbcon.php");
		$stmt=$db->prepare('UPDATE user SET Active = 1 WHERE gid = "'. $_GET["id"]. '"');
		$stmt->execute();
		$stmt=$db->prepare('UPDATE user SET ActiveTime=now() WHERE gid = "'. $_GET["id"]. '"');
		$stmt->execute();
		$stmt1=$db->prepare('SELECT Name,gid,Emailid FROM user WHERE gid= "'. $_GET["id"]. '"');
		$stmt1->execute();
		$result=$stmt1->fetch();
		$name = $result['Name'];
		$g_id = $result['gid'];
		$g_id="GY18".str_pad($g_id,4,'0',STR_PAD_LEFT);
		$email =$result['Emailid'];
		$_SESSION['Active']='true';
		$body="<p>
				Thank you for joining us.<br><br>
				We hope to see you on the fest from March 16,2018 to March 18,2018.<br><br>
				Your account has been successfully activated.<br>Your account details:<br><br>
				Username : ".$name."<br>
				Registered Emailid: ".$email."<br/>
				GY-ID : ".$g_id."<br><br>
				Regards,<br>
				Administrator,<br> 
				Gyanith '18,<br>
				<a href='https://www.gyanith.org'>https://www.gyanith.org</a><br>
				<br>In case of any queries please contact:<br>
				Mr.Gowrishankar<br>
				Gyanith Secretary<br>
				Phone:+91 90472 10673<br>
				Mail : info@gyanith.org<br>                          
				We hope to serve you in the best way and provide you with a great learning experience.
				<br><br>
				This is an auto-generated email. Please do not reply to it as this email address is not monitored. This mail was sent because you or someone registered on the Gyanith homesite with this mail id. Please ignore the mail otherwise.</p><br>
				<br><br></p>";
		$body1="<p>
				Thank you for joining us.<br><br>
				We hope to see you on the fest from March 16,2018 to March 18,2018.<br><br>
				Your account has been successfully activated.<br>Your account details:<br><br>
				Username : ".$name."<br>
				Registered Emailid: ".$email."<br/>
				GY-ID : ".$g_id."<br><br>
				Regards,<br>
				Administrator,<br> 
				Gyanith '18,<br>
				<a href='https://www.gyanith.org'>https://www.gyanith.org</a><br>
				<br>In case of any queries please contact:<br>
				Mr.Gowrishankar<br>
				Gyanith Secretary<br>
				Phone:+91 90472 10673<br>
				Mail : info@gyanith.org<br>                          
				We hope to serve you in the best way and provide you with a great learning experience.
				<br><br>
				This is an auto-generated email. Please do not reply to it as this email address is not monitored. This mail was sent because you or someone registered on the Gyanith homesite with this mail id. Please ignore the mail otherwise.</p><br>
				<br><br></p>";
		send_mail($email,$body,$body1);
		header('Location: index.php');
	}  
	catch(PDOException $e){
		$e->getMessage();
	}
	if(isset($_SESSION['active'])){
		unset($_SESSION['active']);}
?>
</body>
</html>
