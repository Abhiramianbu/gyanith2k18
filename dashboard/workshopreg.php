<?php
	session_start();
	try{
		include("dbcon.php");
		if(isset($_POST['submiteve'])){
			$wname=$_POST['workshop'];
			$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
			$g_id=$_SESSION['g_id'];
			$stmt=$db->prepare('SELECT * FROM `event` WHERE wname =:wname');
			$stmt->execute(array(':wname'=>$wname));
			$result=$stmt->fetch();
			$wid = $result['wid'];
			$stmt = $db->prepare("INSERT INTO user (wid,gid) VALUES (:wid,:gid)");
			    $stmt->bindParam(':wid', $wid);
                    $stmt->bindParam(':gid', $g_id);
		
			}
			else
				echo 'Error ';
		}
	}  
	catch(PDOException $e){
  	  $e->getMessage();
	}
?>