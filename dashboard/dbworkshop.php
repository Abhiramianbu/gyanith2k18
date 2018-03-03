<?php
  session_start();
  
  try{
      include("dbcon.php");
      $gid=$_SESSION['gid1'];
        if(isset($_POST['submitw']) && $_POST['workshop']!=""){
              $wid=$_POST['workshop'];
              
              $stmt = $db->prepare('select * from `regsworkshop` where gid=:gid and wid=:wid');
              $stmt->bindParam(':gid', $gid);
              $stmt->bindParam(':wid', $wid);
              $stmt->execute();
              $result=$stmt->fetch();
              if($result!=null){
                  echo "Already registered";
              }          
              else{
                $tp=0;
                if($wid!='1' && $wid!='5'){
                    $tp=1;
                    if(empty($_POST['wteamdd'])){
                      echo "Select/Create team to register for this event";exit();
                    }
                    
                    $wtid=$_POST['wteamdd'];
                    
                }
                if(empty($_POST['wpaymenttxt'])){
                    echo "Please provide payment information to register";exit();
                }
                $pay=$_POST['wpaymenttxt'];
                $wlist=array("","CATIA V5","Balancing Bot","Formula UNO","Android App Development","Artificial Intelligence","Eye Tracking Robot");
                if($tp==1){
                    $stmt = $db->prepare('INSERT INTO `regsworkshop` (gid,wid,tid,pay) VALUES (:gid,:wid,:tid,:pay)');
                    $stmt->bindParam(':wid', $wid);
                    $stmt->bindParam(':gid', $gid);
                    $stmt->bindParam(':tid', $wtid);
                    $stmt->bindParam(':pay', $pay);
                    if($stmt->execute()){
                        echo "Success ".$wlist[$wid];
                    }
                    else{
                        echo "fail";
                    }
                }
                else{
                  $stmt = $db->prepare('INSERT INTO `regsworkshop` (gid,wid,pay) VALUES (:gid,:wid,:pay)');
                  $stmt->bindParam(':wid', $wid);
                  $stmt->bindParam(':gid', $gid);
                  $stmt->bindParam(':pay', $pay);
                  if($stmt->execute()){
                    echo "Success ".$wlist[$wid];
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