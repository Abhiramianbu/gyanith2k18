<?php
   
    try{
        session_start();
        require_once "recaptchalib.php";
        // your secret key
        $secret = "6Le4AUgUAAAAAIBGy5uqKXMmnRZG_Q2RSVVE162I";
        
        // empty response
        $response = null;
        
        // check secret key
        $reCaptcha = new ReCaptcha($secret);
        // if submitted check response
        if ($_POST["g-recaptcha-response"]) {
            $response = $reCaptcha->verifyResponse(
                $_SERVER["REMOTE_ADDR"],
                $_POST["g-recaptcha-response"]
            );
        }
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
            $mail->Subject = "Gyanith '18 Registration";
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
        if ($response != null && $response->success) {
            include("dbcon.php");
            $error="";
            
                if (!isset($_POST['fname'])) {
                    $error .= "Enter a first name<br>";
                }  
                if (!isset($_POST['lname'])) {
                    $error .= "Enter a last name<br>";
                }
                if (!isset($_POST['pwd1'])) {
                    $error .= "Please enter a password <br>";
            
                }
                if (!isset($_POST['cpwd'])) {
                    $error .= "Please fill confirm password field<br>";
            
                }  
                if (!isset($_POST['email1'])) {
            
                    $error .= "An email address is required<br>";
            
                }  if (!isset($_POST['college'])) {
            
                    $error .= "select a valid college name<br>";
            
                } 
                if(isset($_POST['college']) && $_POST['college']=='0' && !isset($_POST['collegetxt'])){
                    $error .= "Please enter college name<br>";
                }
                if (!isset($_POST['mobile'])) {
            
                    $error .= "please fill the mobile number<br>";
            
                } 
                if($_POST['pwd1']!=$_POST['cpwd'])
                {
                    $error .= "password missmatch<br>";
                }
                if($error!="")
                {
                    echo "Error ".$error;
                }
                else
                {
                    $email = $_POST['email1'];
                    $stmt=$db->prepare("SELECT * FROM user WHERE Emailid=:email");
                    $stmt->bindParam(':email', $email);
                    $stmt->execute();
                    $result = $stmt->fetch();
                    if($result){   
                        echo 'This email id is already registered';
                    }
                    else{
                        $gid=0;
                        $name = $_POST['fname'].' '.$_POST['lname'];
                        $college = $_POST['college'];
                        $mobile =  $_POST['mobile'];
                        $gender = $_POST['gender'];
                        $hash = password_hash($_POST['pwd1'], PASSWORD_DEFAULT);
                        if($college=='0')
                        {
                        $college=$_POST['collegetxt'];
                        }
                        $stmt = $db->prepare("INSERT INTO user (Name,Emailid,Password,Gender,College,Phone) VALUES (:name,:email,:passwd,:gender,:college,:phone)");
                        $stmt->bindParam(':name', $name);
                        $stmt->bindParam(':email', $email);
                        $stmt->bindParam(':passwd', $hash);
                        $stmt->bindParam(':gender', $gender);
                        $stmt->bindParam(':college', $college);
                        $stmt->bindParam(':phone', $mobile);
                        // insert a row
                        if($stmt->execute()){
                            $stmt=$db->prepare("select gid from `user` where Emailid=:email");
                            $stmt->bindParam(':email', $email);
                            $stmt->execute();
                            $result = $stmt->fetch();
                            $gid=$result['gid'];
                           /* if(isset($_POST['accomodation']) && $_POST['accomodation'] == 'accomodation') 
                            {
                                $sql="insert into accomodation (gid) values (:gid)";
                                $stmt1 = $db->prepare($sql);
                                $stmt1->execute(array(':gid'=>$gid));
                            }*/
                            if(isset($_POST['reference']) && $_POST['reference'] == 'ref') 
                            {       $stmt=$db->prepare("update `campusambassador`set count=count+1 where College=:college");
                                    if(!$stmt->execute(array(':college'=>$college))){
                                        echo "Could not update campus ambassador<br/>";
                                    }
                            }
                            if(isset($_POST['campus']) && $_POST['campus']=='campus'){
                                $sql="insert into `campusambassador` (`gid`,`College`) values (:gid,:college)";
                                $stmt1 = $db->prepare($sql);
                                $stmt1->execute(array(':gid'=>$gid,':college'=>$college));
                            } 
                            $actual_link = "http://$_SERVER[HTTP_HOST]/"."login/activate.php?id=" . $gid;
                            $body="<p>Greetings from team GYANITH!!<br>
                                        Congrats.. You have successfully registered for GYANITH’18.<br><br>
                                        Click on the below link to activate your account.<br>
                                        ".$actual_link."<br><br>
                                        We welcome you to NIT Puducherry to experience three days of innovation and science. Gear up to experience engineering like never before.<br/>
                                        GYANITH ‘18 is the second collaborated technical fest hosted by NIT Puducherry. It is a union of 5 departments, coming together to celebrate science and innovation. GYANITH literally translates to “inspiring”. Hence, we are here to inspire you and give you an unforgettable experience of learning, fun and creation. We invite you to join us in the second edition of GYANITH and get inspired.
                                        <br/> Do visit our website <a href='http://www.gyanith.org'>http://www.gyanith.org</a> for more information and registration of events. 
                                        <br>In case of any queries please contact:<br>
                                        Mr.Gowrishankar<br>
                                        Phone:+91 90472 10673<br>
                                        Mail : admin@gyanith.org<br>                          
                                        We hope to serve you in the best way and provide you with a great learning experience.
                                        <br><br>
                                        Regards,<br>
                                        Team GYANITH.
                                        <br>This is an auto-generated email. Please do not reply to it as this email address is not monitored. This mail was sent because you or someone registered on the Gyanith homesite with this mail id. Please ignore the mail otherwise.<br>";
                            $body1="<p>Greetings from team GYANITH!!<br>
                                        Congrats.. You have successfully registered for GYANITH’18.<br><br>
                                        Click on the below link to activate your account.<br>
                                        ".$actual_link."<br><br>
                                        We welcome you to NIT Puducherry to experience three days of innovation and science. Gear up to experience engineering like never before.<br/>
                                        GYANITH ‘18 is the second collaborated technical fest hosted by NIT Puducherry. It is a union of 5 departments, coming together to celebrate science and innovation. GYANITH literally translates to “inspiring”. Hence, we are here to inspire you and give you an unforgettable experience of learning, fun and creation. We invite you to join us in the second edition of GYANITH and get inspired.
                                        <br/> Do visit our website <a href='http://www.gyanith.org'>http://www.gyanith.org</a> for more information and registration of events. 
                                        <br>In case of any queries please contact:<br>
                                        Mr.Gowrishankar
                                        Phone:+91 90472 10673<br>
                                        Mail : admin@gyanith.org<br>                          
                                        We hope to serve you in the best way and provide you with a great learning experience.
                                        <br><br>
                                        Regards,<br>
                                        Team GYANITH.
                                        <br>This is an auto-generated email. Please do not reply to it as this email address is not monitored. This mail was sent because you or someone registered on the Gyanith homesite with this mail id. Please ignore the mail otherwise.<br>";
                            send_mail($email,$body,$body1);
                            echo "registered";
                        }
            
                    }
                    
                }
            }
            else{
                echo "Please complete recaptcha verification";
            }
    }
    catch(PDOException $e){
	    $e->getMessage();
    }
?>