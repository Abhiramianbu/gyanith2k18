<?php
    session_start();

    try
    {
       include("dbcon.php");
        $gid=$_SESSION['gid1'];
        if(isset($_POST['submitaccom']) && !empty($_POST['check_list'])){
            if(empty($_POST['payacco'])){
                echo "Please provide payment information";exit();
            }
            $stmt=$db->prepare('insert into accomodation (gid,day,pay) values (:gid,:day,:pay)');
            $stmt1=$db->prepare('select * from accomodation where gid=:gid and day=:day');
            foreach($_POST['check_list'] as $selected){
                $stmt1->execute(array(':gid'=>$gid,":day"=>$selected));
                $result=$stmt1->fetch();
                if($result!=null){
                    echo "March ".$selected.",2018 already registered";exit();
                }          
                else{
                    //echo $selected."</br>";
                    $stmt->bindParam(':gid', $gid);
                    $stmt->bindParam(':day', $selected);
                    $stmt->bindParam(':pay', $_POST['payacco']);
                    $stmt->execute();
                    
                }
                echo "Successfully registered for March ".$selected.",2018 ";
            }
        }
        else{
            echo "Select atleast one date";
        }
    }
    catch(PDOException $e){
        $e->getMessage();
    }
?>