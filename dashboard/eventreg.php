<?php
	session_start();
	try{
		include("dbcon.php");
		if(isset($_POST['submiteve'])){
			$ename=$_POST['event'];
			$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
			$g_id=$_SESSION['g_id'];
			$stmt=$db->prepare('SELECT * FROM `event` WHERE ename =:ename');
			$stmt->execute(array(':ename'=>$ename));
			$result=$stmt->fetch();
			$eid = $result['eid'];
			$stmt = $db->prepare("INSERT INTO user (eid,gid) VALUES (:eid,:gid)");
			    $stmt->bindParam(':eid', $eid);
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