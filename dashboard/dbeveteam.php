<?php
    session_start();
    try{
        include("dbcon.php");
        $gid=$_SESSION['gid1'];
        /******************************************************************* */
        /*****************************TEAM1********************************* */
        /******************************************************************* */
        if(isset($_POST['submiteveteam1'])){
            $etnm1=$_POST['etnm1'];
            //check existence of team name
            $stmt1=$db->prepare('select * from eveteam where tname=:tname');
            $stmt1->execute(array(':tname'=>$etnm1));
            $result=$stmt1->fetch();
            //echo $result['gid']."<br>";
            if($result==null){
                //check validity of each member gid
                $stmt1=$db->prepare('select * from user where gid=:gid');
                if(!empty($_POST['emem11'])){
                    $emem11=$_POST['emem11'];
                    $emem11=substr($emem11,4);
                    $emem11=ltrim($emem11, '0');
                    $emem1=(int)$emem11;
                    //echo 'in valid '.$emem1."<br>";
                    $stmt1->execute(array(':gid'=>$emem1));
                    $result1=$stmt1->fetch();
                    if($result1==null){
                        echo "g1 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem12'])){
                    $emem12=$_POST['emem12'];
                    $emem12=substr($emem12,4);
                    $emem12=ltrim($emem12, '0');
                    $emem2=(int)$emem12;
                    //echo $emem2."<br>";
                    $stmt1->execute(array(':gid'=>$emem2));
                    $result2=$stmt1->fetch();
                    if($result2==null){
                        echo "g2 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem13'])){
                    $emem13=$_POST['emem13'];
                    $emem13=substr($emem13,4);
                    $emem13=ltrim($emem13, '0');
                    $emem3=(int)$emem13;
                    //echo $emem3;
                    $stmt1->execute(array(':gid'=>$emem3));
                    $result3=$stmt1->fetch();
                    if($result3==null){
                        echo "g3 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem14'])){
                    $emem14=$_POST['emem14'];
                    $emem14=substr($emem14,4);
                    $emem14=ltrim($emem14, '0');
                    $emem4=(int)$emem14;
                    //echo $emem4;
                    $stmt1->execute(array(':gid'=>$emem4));
                    $result4=$stmt1->fetch();
                    if($result4==null){
                        echo "g4 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem15'])){
                    $emem15=$_POST['emem15'];
                    $emem15=substr($emem15,4);
                    $emem15=ltrim($emem15, '0');
                    $emem5=(int)$emem15;
                    //echo $emem5;
                    $stmt1->execute(array(':gid'=>$emem5));
                    $result5=$stmt1->fetch();
                    if($result5==null){
                        echo "g5 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem16'])){
                    $emem16=$_POST['emem16'];
                    $emem16=substr($emem16,4);
                    $emem16=ltrim($emem16, '0');
                    $emem6=(int)$emem16;
                    //echo $emem6;
                    $stmt1->execute(array(':gid'=>$emem6));
                    $result6=$stmt1->fetch();
                    if($result6==null){
                        echo "g6 Invalid GY-ID";exit();
                    }
                }
                //check can all member be in team
                $val1=0;$val2=0;$val3=0;$val4=0;$val5=0;$val6=0;
                if(!empty($_POST['emem11'])){
                    if($result1['etid1']==null){$val1=1;}
                    else if( $result1['etid2']==null){$val1=2;}
                    else if( $result1['etid3']==null){$val1=3;}
                    else if( $result1['etid4']==null){$val1=4;}
                    else{
                        echo "f1 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem12'])){
                    if($result2['etid1']==null){$val2=1;}
                    else if( $result2['etid2']==null){$val2=2;}
                    else if( $result2['etid3']==null){$val2=3;}
                    else if( $result2['etid4']==null){$val2=4;}
                    else{
                        echo "f2 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem13'])){
                    if($result3['etid1']==null){$val3=1;}
                    else if( $result3['etid2']==null){$val3=2;}
                    else if( $result3['etid3']==null){$val3=3;}
                    else if( $result3['etid4']==null){$val3=4;}
                    else{
                        echo "f3 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem14'])){
                    if($result4['etid1']==null){$val4=1;}
                    else if( $result4['etid2']==null){$val4=2;}
                    else if( $result4['etid3']==null){$val4=3;}
                    else if( $result4['etid4']==null){$val4=4;}
                    else{
                        echo "f4 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem15'])){
                    if($result5['etid1']==null){$val5=1;}
                    else if( $result5['etid2']==null){$val5=2;}
                    else if( $result5['etid3']==null){$val5=3;}
                    else if( $result5['etid4']==null){$val5=4;}
                    else{
                        echo "f5 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem16'])){
                    if($result6['etid1']==null){$val6=1;}
                    else if( $result6['etid2']==null){$val6=2;}
                    else if( $result6['etid3']==null){$val6=3;}
                    else if( $result6['etid4']==null){$val6=4;}
                    else{
                        echo "f6 This member exceeded number of teams limit";exit();
                    }
                }
                //inserting team name in eveteam table
                $stmt=$db->prepare('insert into eveteam (tname,gid) values (:tname,:gid)');
                $stmt->bindParam(':tname', $etnm1);
                $stmt->bindParam(':gid', $gid);
                $stmt->execute();
                $stmt2=$db->prepare('select tid from eveteam where tname=:tname and gid=:gid');
                $stmt2->execute(array(':tname'=>$etnm1,':gid'=>$gid));
                $result=$stmt2->fetch();
                $tid=$result['tid'];

                //insert tid for all member
                $creator=0;
                //insert tid for all member
                if(!empty($_POST['emem11'])){
                    if($emem1==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val1;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem1));
                    //get gid int val
                } 
                if(!empty($_POST['emem12'])){
                    if($emem2==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val2;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem2));
                }
                if(!empty($_POST['emem13'])){
                    if($emem3==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val3;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem3));
                }
                if(!empty($_POST['emem14'])){
                    if($emem4==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val4;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem4));
                }
                if(!empty($_POST['emem15'])){
                    if($emem5==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val5;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem5));
                }
                if(!empty($_POST['emem16'])){
                    if($emem6==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val6;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem6));
                }
                
                //if none of the member is creator then put tid for creator
                if($creator==0){
                    $stmt1->execute(array(':gid'=>$gid));
                    $result1=$stmt1->fetch();
                    if($result1['etid1']==null){
                        $stmt=$db->prepare('update user set etid1=:tid where gid=:gid');
                        $stmt->execute(array(':tid'=>$tid,':gid'=>$gid));
                    }
                    else if( $result1['etid2']==null){
                        $stmt=$db->prepare('update user set etid2=:tid where gid=:gid');
                        $stmt->execute(array(':tid'=>$tid,':gid'=>$gid));
                    }
                    else if( $result1['etid3']==null){
                        $stmt=$db->prepare('update user set etid3=:tid where gid=:gid');
                        $stmt->execute(array(':tid'=>$tid,':gid'=>$gid));
                    }
                    else if( $result1['etid4']==null){
                        $stmt=$db->prepare('update user set etid4=:tid where gid=:gid');
                        $stmt->execute(array(':tid'=>$tid,':gid'=>$gid));
                    }
                }
                echo "success ".$tid."name ".$etnm1;
            }
            else{
                echo "Team name already in use";
            }
            //unsetting the post array for safety - not to collide with other team creations
            $_POST = array();
        }

        /******************************************************************* */
        /*****************************TEAM2********************************* */
        /******************************************************************* */
        if(isset($_POST['submiteveteam2'])){
            $etnm1=$_POST['etnm1'];
            //check existence of team name
            $stmt1=$db->prepare('select * from eveteam where tname=:tname');
            $stmt1->execute(array(':tname'=>$etnm1));
            $result=$stmt1->fetch();
            //echo $result['gid']."<br>";
            if($result==null){
                //check validity of each member gid
                $stmt1=$db->prepare('select * from user where gid=:gid');
                if(!empty($_POST['emem11'])){
                    $emem11=$_POST['emem11'];
                    $emem11=substr($emem11,4);
                    $emem11=ltrim($emem11, '0');
                    $emem1=(int)$emem11;
                    //echo 'in valid '.$emem1."<br>";
                    $stmt1->execute(array(':gid'=>$emem1));
                    $result1=$stmt1->fetch();
                    if($result1==null){
                        echo "g1 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem12'])){
                    $emem12=$_POST['emem12'];
                    $emem12=substr($emem12,4);
                    $emem12=ltrim($emem12, '0');
                    $emem2=(int)$emem12;
                    //echo $emem2."<br>";
                    $stmt1->execute(array(':gid'=>$emem2));
                    $result2=$stmt1->fetch();
                    if($result2==null){
                        echo "g2 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem13'])){
                    $emem13=$_POST['emem13'];
                    $emem13=substr($emem13,4);
                    $emem13=ltrim($emem13, '0');
                    $emem3=(int)$emem13;
                    //echo $emem3;
                    $stmt1->execute(array(':gid'=>$emem3));
                    $result3=$stmt1->fetch();
                    if($result3==null){
                        echo "g3 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem14'])){
                    $emem14=$_POST['emem14'];
                    $emem14=substr($emem14,4);
                    $emem14=ltrim($emem14, '0');
                    $emem4=(int)$emem14;
                    //echo $emem4;
                    $stmt1->execute(array(':gid'=>$emem4));
                    $result4=$stmt1->fetch();
                    if($result4==null){
                        echo "g4 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem15'])){
                    $emem15=$_POST['emem15'];
                    $emem15=substr($emem15,4);
                    $emem15=ltrim($emem15, '0');
                    $emem5=(int)$emem15;
                    //echo $emem5;
                    $stmt1->execute(array(':gid'=>$emem5));
                    $result5=$stmt1->fetch();
                    if($result5==null){
                        echo "g5 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem16'])){
                    $emem16=$_POST['emem16'];
                    $emem16=substr($emem16,4);
                    $emem16=ltrim($emem16, '0');
                    $emem6=(int)$emem16;
                    //echo $emem6;
                    $stmt1->execute(array(':gid'=>$emem6));
                    $result6=$stmt1->fetch();
                    if($result6==null){
                        echo "g6 Invalid GY-ID";exit();
                    }
                }
                //check can all member be in team
                $val1=0;$val2=0;$val3=0;$val4=0;$val5=0;$val6=0;
                if(!empty($_POST['emem11'])){
                    if($result1['etid1']==null){$val1=1;}
                    else if( $result1['etid2']==null){$val1=2;}
                    else if( $result1['etid3']==null){$val1=3;}
                    else if( $result1['etid4']==null){$val1=4;}
                    else{
                        echo "f1 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem12'])){
                    if($result2['etid1']==null){$val2=1;}
                    else if( $result2['etid2']==null){$val2=2;}
                    else if( $result2['etid3']==null){$val2=3;}
                    else if( $result2['etid4']==null){$val2=4;}
                    else{
                        echo "f2 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem13'])){
                    if($result3['etid1']==null){$val3=1;}
                    else if( $result3['etid2']==null){$val3=2;}
                    else if( $result3['etid3']==null){$val3=3;}
                    else if( $result3['etid4']==null){$val3=4;}
                    else{
                        echo "f3 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem14'])){
                    if($result4['etid1']==null){$val4=1;}
                    else if( $result4['etid2']==null){$val4=2;}
                    else if( $result4['etid3']==null){$val4=3;}
                    else if( $result4['etid4']==null){$val4=4;}
                    else{
                        echo "f4 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem15'])){
                    if($result5['etid1']==null){$val5=1;}
                    else if( $result5['etid2']==null){$val5=2;}
                    else if( $result5['etid3']==null){$val5=3;}
                    else if( $result5['etid4']==null){$val5=4;}
                    else{
                        echo "f5 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem16'])){
                    if($result6['etid1']==null){$val6=1;}
                    else if( $result6['etid2']==null){$val6=2;}
                    else if( $result6['etid3']==null){$val6=3;}
                    else if( $result6['etid4']==null){$val6=4;}
                    else{
                        echo "f6 This member exceeded number of teams limit";exit();
                    }
                }
                //inserting team name in eveteam table
                $stmt=$db->prepare('insert into eveteam (tname,gid) values (:tname,:gid)');
                $stmt->bindParam(':tname', $etnm1);
                $stmt->bindParam(':gid', $gid);
                $stmt->execute();
                $stmt2=$db->prepare('select tid from eveteam where tname=:tname and gid=:gid');
                $stmt2->execute(array(':tname'=>$etnm1,':gid'=>$gid));
                $result=$stmt2->fetch();
                $tid=$result['tid'];

                //insert tid for all member
                $creator=0;
                //insert tid for all member
                if(!empty($_POST['emem11'])){
                    if($emem1==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val1;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem1));
                    //get gid int val
                } 
                if(!empty($_POST['emem12'])){
                    if($emem2==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val2;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem2));
                }
                if(!empty($_POST['emem13'])){
                    if($emem3==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val3;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem3));
                }
                if(!empty($_POST['emem14'])){
                    if($emem4==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val4;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem4));
                }
                if(!empty($_POST['emem15'])){
                    if($emem5==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val5;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem5));
                }
                if(!empty($_POST['emem16'])){
                    if($emem6==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val6;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem6));
                }
                
                //if none of the member is creator then put tid for creator
                if($creator==0){
                    $stmt1->execute(array(':gid'=>$gid));
                    $result1=$stmt1->fetch();
                    if($result1['etid1']==null){
                        $stmt=$db->prepare('update user set etid1=:tid where gid=:gid');
                        $stmt->execute(array(':tid'=>$tid,':gid'=>$gid));
                    }
                    else if( $result1['etid2']==null){
                        $stmt=$db->prepare('update user set etid2=:tid where gid=:gid');
                        $stmt->execute(array(':tid'=>$tid,':gid'=>$gid));
                    }
                    else if( $result1['etid3']==null){
                        $stmt=$db->prepare('update user set etid3=:tid where gid=:gid');
                        $stmt->execute(array(':tid'=>$tid,':gid'=>$gid));
                    }
                    else if( $result1['etid4']==null){
                        $stmt=$db->prepare('update user set etid4=:tid where gid=:gid');
                        $stmt->execute(array(':tid'=>$tid,':gid'=>$gid));
                    }
                }
                echo "success ".$tid."name ".$etnm1;
            }
            else{
                echo "Team name already in use";
            }
            //unsetting the post array for safety - not to collide with other team creations
            $_POST = array();
        }


        /******************************************************************* */
        /*****************************TEAM3********************************* */
        /******************************************************************* */
        if(isset($_POST['submiteveteam3'])){
            $etnm1=$_POST['etnm1'];
            //check existence of team name
            $stmt1=$db->prepare('select * from eveteam where tname=:tname');
            $stmt1->execute(array(':tname'=>$etnm1));
            $result=$stmt1->fetch();
            //echo $result['gid']."<br>";
            if($result==null){
                //check validity of each member gid
                $stmt1=$db->prepare('select * from user where gid=:gid');
                if(!empty($_POST['emem11'])){
                    $emem11=$_POST['emem11'];
                    $emem11=substr($emem11,4);
                    $emem11=ltrim($emem11, '0');
                    $emem1=(int)$emem11;
                    //echo 'in valid '.$emem1."<br>";
                    $stmt1->execute(array(':gid'=>$emem1));
                    $result1=$stmt1->fetch();
                    if($result1==null){
                        echo "g1 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem12'])){
                    $emem12=$_POST['emem12'];
                    $emem12=substr($emem12,4);
                    $emem12=ltrim($emem12, '0');
                    $emem2=(int)$emem12;
                    //echo $emem2."<br>";
                    $stmt1->execute(array(':gid'=>$emem2));
                    $result2=$stmt1->fetch();
                    if($result2==null){
                        echo "g2 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem13'])){
                    $emem13=$_POST['emem13'];
                    $emem13=substr($emem13,4);
                    $emem13=ltrim($emem13, '0');
                    $emem3=(int)$emem13;
                    //echo $emem3;
                    $stmt1->execute(array(':gid'=>$emem3));
                    $result3=$stmt1->fetch();
                    if($result3==null){
                        echo "g3 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem14'])){
                    $emem14=$_POST['emem14'];
                    $emem14=substr($emem14,4);
                    $emem14=ltrim($emem14, '0');
                    $emem4=(int)$emem14;
                    //echo $emem4;
                    $stmt1->execute(array(':gid'=>$emem4));
                    $result4=$stmt1->fetch();
                    if($result4==null){
                        echo "g4 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem15'])){
                    $emem15=$_POST['emem15'];
                    $emem15=substr($emem15,4);
                    $emem15=ltrim($emem15, '0');
                    $emem5=(int)$emem15;
                    //echo $emem5;
                    $stmt1->execute(array(':gid'=>$emem5));
                    $result5=$stmt1->fetch();
                    if($result5==null){
                        echo "g5 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem16'])){
                    $emem16=$_POST['emem16'];
                    $emem16=substr($emem16,4);
                    $emem16=ltrim($emem16, '0');
                    $emem6=(int)$emem16;
                    //echo $emem6;
                    $stmt1->execute(array(':gid'=>$emem6));
                    $result6=$stmt1->fetch();
                    if($result6==null){
                        echo "g6 Invalid GY-ID";exit();
                    }
                }
                //check can all member be in team
                $val1=0;$val2=0;$val3=0;$val4=0;$val5=0;$val6=0;
                if(!empty($_POST['emem11'])){
                    if($result1['etid1']==null){$val1=1;}
                    else if( $result1['etid2']==null){$val1=2;}
                    else if( $result1['etid3']==null){$val1=3;}
                    else if( $result1['etid4']==null){$val1=4;}
                    else{
                        echo "f1 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem12'])){
                    if($result2['etid1']==null){$val2=1;}
                    else if( $result2['etid2']==null){$val2=2;}
                    else if( $result2['etid3']==null){$val2=3;}
                    else if( $result2['etid4']==null){$val2=4;}
                    else{
                        echo "f2 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem13'])){
                    if($result3['etid1']==null){$val3=1;}
                    else if( $result3['etid2']==null){$val3=2;}
                    else if( $result3['etid3']==null){$val3=3;}
                    else if( $result3['etid4']==null){$val3=4;}
                    else{
                        echo "f3 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem14'])){
                    if($result4['etid1']==null){$val4=1;}
                    else if( $result4['etid2']==null){$val4=2;}
                    else if( $result4['etid3']==null){$val4=3;}
                    else if( $result4['etid4']==null){$val4=4;}
                    else{
                        echo "f4 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem15'])){
                    if($result5['etid1']==null){$val5=1;}
                    else if( $result5['etid2']==null){$val5=2;}
                    else if( $result5['etid3']==null){$val5=3;}
                    else if( $result5['etid4']==null){$val5=4;}
                    else{
                        echo "f5 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem16'])){
                    if($result6['etid1']==null){$val6=1;}
                    else if( $result6['etid2']==null){$val6=2;}
                    else if( $result6['etid3']==null){$val6=3;}
                    else if( $result6['etid4']==null){$val6=4;}
                    else{
                        echo "f6 This member exceeded number of teams limit";exit();
                    }
                }
                //inserting team name in eveteam table
                $stmt=$db->prepare('insert into eveteam (tname,gid) values (:tname,:gid)');
                $stmt->bindParam(':tname', $etnm1);
                $stmt->bindParam(':gid', $gid);
                $stmt->execute();
                $stmt2=$db->prepare('select tid from eveteam where tname=:tname and gid=:gid');
                $stmt2->execute(array(':tname'=>$etnm1,':gid'=>$gid));
                $result=$stmt2->fetch();
                $tid=$result['tid'];

                //insert tid for all member
                $creator=0;
                if(!empty($_POST['emem11'])){
                    if($emem1==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val1;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem1));
                    //get gid int val
                } 
                if(!empty($_POST['emem12'])){
                    if($emem2==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val2;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem2));
                }
                if(!empty($_POST['emem13'])){
                    if($emem3==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val3;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem3));
                }
                if(!empty($_POST['emem14'])){
                    if($emem4==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val4;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem4));
                }
                if(!empty($_POST['emem15'])){
                    if($emem5==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val5;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem5));
                }
                if(!empty($_POST['emem16'])){
                    if($emem6==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val6;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem6));
                }
                
                //if none of the member is creator then put tid for creator
                if($creator==0){
                    $stmt1->execute(array(':gid'=>$gid));
                    $result1=$stmt1->fetch();
                    if($result1['etid1']==null){
                        $stmt=$db->prepare('update user set etid1=:tid where gid=:gid');
                        $stmt->execute(array(':tid'=>$tid,':gid'=>$gid));
                    }
                    else if( $result1['etid2']==null){
                        $stmt=$db->prepare('update user set etid2=:tid where gid=:gid');
                        $stmt->execute(array(':tid'=>$tid,':gid'=>$gid));
                    }
                    else if( $result1['etid3']==null){
                        $stmt=$db->prepare('update user set etid3=:tid where gid=:gid');
                        $stmt->execute(array(':tid'=>$tid,':gid'=>$gid));
                    }
                    else if( $result1['etid4']==null){
                        $stmt=$db->prepare('update user set etid4=:tid where gid=:gid');
                        $stmt->execute(array(':tid'=>$tid,':gid'=>$gid));
                    }
                }
                echo "success ".$tid."name ".$etnm1;
            }
            else{
                echo "Team name already in use";
            }
            //unsetting the post array for safety - not to collide with other team creations
            $_POST = array();
        }

        /******************************************************************* */
        /*****************************TEAM4********************************* */
        /******************************************************************* */
        if(isset($_POST['submiteveteam4'])){
            $etnm1=$_POST['etnm1'];
            //check existence of team name
            $stmt1=$db->prepare('select * from eveteam where tname=:tname');
            $stmt1->execute(array(':tname'=>$etnm1));
            $result=$stmt1->fetch();
            //echo $result['gid']."<br>";
            if($result==null){
                //check validity of each member gid
                $stmt1=$db->prepare('select * from user where gid=:gid');
                if(!empty($_POST['emem11'])){
                    $emem11=$_POST['emem11'];
                    $emem11=substr($emem11,4);
                    $emem11=ltrim($emem11, '0');
                    $emem1=(int)$emem11;
                    //echo 'in valid '.$emem1."<br>";
                    $stmt1->execute(array(':gid'=>$emem1));
                    $result1=$stmt1->fetch();
                    if($result1==null){
                        echo "g1 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem12'])){
                    $emem12=$_POST['emem12'];
                    $emem12=substr($emem12,4);
                    $emem12=ltrim($emem12, '0');
                    $emem2=(int)$emem12;
                    //echo $emem2."<br>";
                    $stmt1->execute(array(':gid'=>$emem2));
                    $result2=$stmt1->fetch();
                    if($result2==null){
                        echo "g2 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem13'])){
                    $emem13=$_POST['emem13'];
                    $emem13=substr($emem13,4);
                    $emem13=ltrim($emem13, '0');
                    $emem3=(int)$emem13;
                    //echo $emem3;
                    $stmt1->execute(array(':gid'=>$emem3));
                    $result3=$stmt1->fetch();
                    if($result3==null){
                        echo "g3 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem14'])){
                    $emem14=$_POST['emem14'];
                    $emem14=substr($emem14,4);
                    $emem14=ltrim($emem14, '0');
                    $emem4=(int)$emem14;
                    //echo $emem4;
                    $stmt1->execute(array(':gid'=>$emem4));
                    $result4=$stmt1->fetch();
                    if($result4==null){
                        echo "g4 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem15'])){
                    $emem15=$_POST['emem15'];
                    $emem15=substr($emem15,4);
                    $emem15=ltrim($emem15, '0');
                    $emem5=(int)$emem15;
                    //echo $emem5;
                    $stmt1->execute(array(':gid'=>$emem5));
                    $result5=$stmt1->fetch();
                    if($result5==null){
                        echo "g5 Invalid GY-ID";exit();
                    }
                }
                if(!empty($_POST['emem16'])){
                    $emem16=$_POST['emem16'];
                    $emem16=substr($emem16,4);
                    $emem16=ltrim($emem16, '0');
                    $emem6=(int)$emem16;
                    //echo $emem6;
                    $stmt1->execute(array(':gid'=>$emem6));
                    $result6=$stmt1->fetch();
                    if($result6==null){
                        echo "g6 Invalid GY-ID";exit();
                    }
                }
                //check can all member be in team
                $val1=0;$val2=0;$val3=0;$val4=0;$val5=0;$val6=0;
                if(!empty($_POST['emem11'])){
                    if($result1['etid1']==null){$val1=1;}
                    else if( $result1['etid2']==null){$val1=2;}
                    else if( $result1['etid3']==null){$val1=3;}
                    else if( $result1['etid4']==null){$val1=4;}
                    else{
                        echo "f1 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem12'])){
                    if($result2['etid1']==null){$val2=1;}
                    else if( $result2['etid2']==null){$val2=2;}
                    else if( $result2['etid3']==null){$val2=3;}
                    else if( $result2['etid4']==null){$val2=4;}
                    else{
                        echo "f2 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem13'])){
                    if($result3['etid1']==null){$val3=1;}
                    else if( $result3['etid2']==null){$val3=2;}
                    else if( $result3['etid3']==null){$val3=3;}
                    else if( $result3['etid4']==null){$val3=4;}
                    else{
                        echo "f3 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem14'])){
                    if($result4['etid1']==null){$val4=1;}
                    else if( $result4['etid2']==null){$val4=2;}
                    else if( $result4['etid3']==null){$val4=3;}
                    else if( $result4['etid4']==null){$val4=4;}
                    else{
                        echo "f4 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem15'])){
                    if($result5['etid1']==null){$val5=1;}
                    else if( $result5['etid2']==null){$val5=2;}
                    else if( $result5['etid3']==null){$val5=3;}
                    else if( $result5['etid4']==null){$val5=4;}
                    else{
                        echo "f5 This member exceeded number of teams limit";exit();
                    }
                }
                if(!empty($_POST['emem16'])){
                    if($result6['etid1']==null){$val6=1;}
                    else if( $result6['etid2']==null){$val6=2;}
                    else if( $result6['etid3']==null){$val6=3;}
                    else if( $result6['etid4']==null){$val6=4;}
                    else{
                        echo "f6 This member exceeded number of teams limit";exit();
                    }
                }
                //inserting team name in eveteam table
                $stmt=$db->prepare('insert into eveteam (tname,gid) values (:tname,:gid)');
                $stmt->bindParam(':tname', $etnm1);
                $stmt->bindParam(':gid', $gid);
                $stmt->execute();
                $stmt2=$db->prepare('select tid from eveteam where tname=:tname and gid=:gid');
                $stmt2->execute(array(':tname'=>$etnm1,':gid'=>$gid));
                $result=$stmt2->fetch();
                $tid=$result['tid'];

                //insert tid for all member
                $creator=0;
                //insert tid for all member
                if(!empty($_POST['emem11'])){
                    if($emem1==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val1;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem1));
                    //get gid int val
                } 
                if(!empty($_POST['emem12'])){
                    if($emem2==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val2;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem2));
                }
                if(!empty($_POST['emem13'])){
                    if($emem3==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val3;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem3));
                }
                if(!empty($_POST['emem14'])){
                    if($emem4==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val4;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem4));
                }
                if(!empty($_POST['emem15'])){
                    if($emem5==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val5;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem5));
                }
                if(!empty($_POST['emem16'])){
                    if($emem6==$gid){
                        $creator=1;
                    }
                    $etid="etid".$val6;
                    $stmt=$db->prepare('update user set '.$etid.'=:tid where gid=:gid');
                    $stmt->execute(array(':tid'=>$tid,':gid'=>$emem6));
                }
                
                //if none of the member is creator then put tid for creator
                if($creator==0){
                    $stmt1->execute(array(':gid'=>$gid));
                    $result1=$stmt1->fetch();
                    if($result1['etid1']==null){
                        $stmt=$db->prepare('update user set etid1=:tid where gid=:gid');
                        $stmt->execute(array(':tid'=>$tid,':gid'=>$gid));
                    }
                    else if( $result1['etid2']==null){
                        $stmt=$db->prepare('update user set etid2=:tid where gid=:gid');
                        $stmt->execute(array(':tid'=>$tid,':gid'=>$gid));
                    }
                    else if( $result1['etid3']==null){
                        $stmt=$db->prepare('update user set etid3=:tid where gid=:gid');
                        $stmt->execute(array(':tid'=>$tid,':gid'=>$gid));
                    }
                    else if( $result1['etid4']==null){
                        $stmt=$db->prepare('update user set etid4=:tid where gid=:gid');
                        $stmt->execute(array(':tid'=>$tid,':gid'=>$gid));
                    }
                }
                echo "success ".$tid."name ".$etnm1;
            }
            else{
                echo "Team name already in use";
            }
            //unsetting the post array for safety - not to collide with other team creations
            $_POST = array();
        }


    }
    catch(PDOException $e){
        $e->getMessage();
    }
?>
        
