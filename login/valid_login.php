<?php
	session_start();
	try{
		include("dbcon.php");
		if(isset($_POST['login-btn'])){
			$email=$_POST['email'];
			$pass=$_POST['pwd'];
			
			
			$stmt=$db->prepare('SELECT * FROM `user` WHERE Emailid =:mail');
			$stmt->execute(array(':mail'=>$email));
			$result=$stmt->fetch();
			$email = $result['Emailid'];
			
			
			if($email != NULL)
			{
				$gid=$result['gid'];
				$name = $result['Name'];
				$active=$result['Active'];
				$passwd=$result['Password'];
				$timestamp=$result['RegistrationTime'];	
				if (password_verify($pass, $passwd)){
					if($active == '1')
					{
						$_SESSION['gid1']= $gid;
						$gid='GY18'. str_pad($gid,4,'0',STR_PAD_LEFT);
						$_SESSION['gid']= $gid;
						$_SESSION['name'] = $name;
						$_SESSION['email'] = $email;
						$_SESSION['college']=$result['College'];
						$_SESSION['mobile']=$result['Phone'];
						echo 'logged';
					}
					else{
						echo "Account is not activated.Activate to login.";
					}
				} 	
				else{
					echo "Email or Password incorrect.";
				}	
			}
			else
				echo 'This email is not registered.Please register to login. ';
		}
	}  
	catch(PDOException $e){
  	  $e->getMessage();
	}
?>