<?php
  session_start();
  
  try{
      include("dbcon.php");
      $gid=$_SESSION['gid1'];
        if(isset($_POST['submiteve']) && $_POST['event']!=""){
              $eid=$_POST['event'];
              
              $stmt = $db->prepare('select * from `regsevent` where gid=:gid and eid=:eid');
              $stmt->bindParam(':gid', $gid);
              $stmt->bindParam(':eid', $eid);
              $stmt->execute();
              $result=$stmt->fetch();
              if($result!=null){
                  echo "Already registered";
              }          
              else{
                $tp=0;
                if($eid!='1' && $eid!='9' && $eid!='12'){
                    $tp=1;
                    if(empty($_POST['eteamdd'])){
                      echo "Select/Create team to register for this event";exit();
                    }
                    if(empty($_POST['paymenttxt'])){
                      echo "Please provide payment information to register";exit();
                    }
                    $etid=$_POST['eteamdd'];
                    $pay=$_POST['paymenttxt'];
                }
                $evelist=array("","D-Bug C-Bug","Tick Tock","BurnOut","LineX","Structure","Jury-Rig","Robot Soccer","Chain Buster","Hackathon","Conundrum","Whiz-War","Science of Deduction");
                if($tp==1){
                    $stmt = $db->prepare('INSERT INTO `regsevent` (gid,eid,tid,pay) VALUES (:gid,:eid,:tid,:pay)');
                    $stmt->bindParam(':eid', $eid);
                    $stmt->bindParam(':gid', $gid);
                    $stmt->bindParam(':tid', $etid);
                    $stmt->bindParam(':pay', $pay);
                    if($stmt->execute()){
                        echo "Success ".$evelist[$eid];
                    }
                    else{
                        echo "fail";
                    }
                }
                else{
                  $stmt = $db->prepare('INSERT INTO `regsevent` (gid,eid) VALUES (:gid,:eid)');
                  $stmt->bindParam(':eid', $eid);
                  $stmt->bindParam(':gid', $gid);
                  if($stmt->execute()){
                    echo "Success ".$evelist[$eid];
                  }
                  else{
                      echo "fail";
                  }
                }
            }
        }
  }
  catch(PDOException $e){
    $e->getMessage();
  }
?>