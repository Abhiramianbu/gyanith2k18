
<html>
<head>
<title>Dashboard</title>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="description" content="Gyanith '18 is the second version of single technical symposium of NIT Puducherry.">
	<meta name="author" content="Web Team Gyanith,NIT Py" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
    <meta name="keywords" content="Gyanith,gyanith nitpy,nitpy,gyanith, gyanith18, gyanith 2018, college, tech festival, techfest, nit tech fest">
	<title>Dashboard | Gyanith '18</title>
	<link rel="icon" type="image/png" href="../assets/img/icons/gyanith-icon.png" sizes="32x32">
	<link rel="stylesheet" type="text/css" href="../assets/css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/turbotabs.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/all.css" />

</head>
<body>

<style>
    hr{
        width: 90%;
        position: relative;
        left: -5%;
    }
    .myh2{
        text-transform:uppercase;
        font-weight: 700;
    }
    table{
        color:#fff;
    }
    td{
        padding:5px;
    }
    .myh3{
        margin-bottom: 10px;
    }
    .drpdwn{
        color: #fff;
        width: 40%;
        border-radius: 5px;
        background-color: rgba(0,0,0,1);
        padding: 10px;
        margin-bottom:10px;
    }
    .subbtn{
        color: #fff;
        width: 20%;
        background-color: #000;
        border-radius: 5px;
        margin-bottom:10px;
    }
    div.tt_container{
        min-height:1000px !important;
    }
    .plbtn{
        color:#fff;
        background-color:#000;
        margin-right:10px;
        margin-bottom:10px;
    }
    .mytxt{
        width: 40%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
    }
    @media only screen and (max-width: 1096px){
        .mytxt{
            width: 90%;
        }
        .subbtn{
            width:50%;
        }
        .drpdwn{
            width:90%;
        }
    }
    .rdtxt{
        color:#ff0000;
    }
    #tnmshow1,#tnmshow22,#tnmshow3,#tnmshow4,#wtnmshow1,#wtnmshow22,#wtnmshow3,#wtnmshow4{
        color:rgb(2, 119, 4);
    }
    #tnmshow2,#wtnmshow2,#evealert,#wrkalert,#accomalert{
        color:#ff0000;
    }
    .sucs{
        color:rgb(2, 119, 4);
    }
</style>





    <?php
        session_start();
		if(!isset($_SESSION['gid'])){
			header('Location:../login');
        } 
        $gid1=$_SESSION['gid1'];
        $gid=$_SESSION['gid'];
        $name=$_SESSION['name'];
        $email=$_SESSION['email'];
        include("dbcon.php");
	?>
    <div class="o-grid__item" onclick="javascript:location.href='../'">
	      <button class="c-hamburger c-hamburger--htla is-active">
	        <span>Toggle menu</span>
		  </button>
	</div>
  	<div id="heading">DASHBOARD</div>
	
   <br/>
   
   
    <!-- - - - - - -  - - - VERTICAL TAB - - - - - -  - - - - - -->
    <div id="myTab">
            <!-- - - - - - Tab navigation - - - - - - -->
            <ul class="tt_tabs" id="mynav">
                <li class="active">Profile</li>
                <li>Events Registration</li>
                <li>Team for events</li>
                <li>Workshop Registration</li>
                <li>Teams for Workshop</li>
                <li>Accommodation</li>
                <li>Bank Info</li>
            </ul>
            <!-- - - - - Tab Content - - - - - -->
            <div class="tt_container">
                <!--*************My profile***************-->
                <div class="tt_tab active">
                    <div class="myh2">Profile</div>
                    <hr/>
                    <table>
                        <tr>
                            <td style="background-color:#000;border-radius:5px;"><i class="fas fa-address-card"></i> GY-ID</td>
                            <td><?php echo $gid; ?></td>
                        </tr>
                        <tr>
                            <td style="background-color:#000;border-radius: 5px;"><i class="fas fa-user-circle"></i> Name</td>
                            <td><?php echo $name; ?></td>
                        </tr>
                        <tr>
                            <td style="background-color:#000;border-radius: 5px;"><i class="far fa-envelope"></i> E-mail</td>
                            <td><?php echo $email; ?></td>
                        </tr>
                        <tr>
                            <td style="background-color:#000;border-radius: 5px;"><i class="fas fa-university"></i> College</td>
                            <td><?php echo $_SESSION['college']; ?></td>
                        </tr>
                        
                    </table>
                       <!-- <i class="fas fa-address-card"></i><span class="info-id">&nbsp;&nbsp;GY-ID&nbsp;&nbsp; </span><span id="profile-gyanid"><?php echo $_SESSION['gid']; ?></span><br>	
						<i class="fas fa-user-circle"></i><p><span class="info-id">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span id="profile-name"><?php echo $_SESSION['name']; ?></span></p><br>
						<i class="far fa-envelope"></i><p><span class="info-id">E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span id="profile-email"><?php echo $_SESSION['email']; ?></span></p><br>
						<i class="fas fa-university"></i><p><span class="info-id">College&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span id="profile-college-name"><?php echo $_SESSION['college']; ?></span></p><br>
						<i class="fas fa-mobile"></i><p><span class="info-id">Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span id="profile-contact"><?php echo $_SESSION['mobile']; ?></span></p><br>
    -->



                   <!--
                    Gid: <?php echo $gid; ?><br/>
                    Name:<?php echo $name; ?><br/>
                    Email:<?php echo $email; ?><br/>
                    <!--<a href="../profile.php">Full Profile...</a>-->
                    <!--<button class="teamid-btn">Team ID</button><br>
                    <div class="row">
                        <div class="col-lg-3 col-md-3" id="team-cont">
                            
                            <p id="team1">Team 1</p><br>
                            <p id="team2">Team 2</p><br>
                            <p id="team3">Team 3</p>
                        </div>
                        <div class="col-lg-9 col-md-9" id="team-mem">
                            <div id="team1-mem-cont">
                                <p>Team Member 1</p><br>
                                <p>Team Member 2</p><br>
                                <p>Team Member 3</p>
                            </div>
                            <div id="team2-mem-cont">
                                <p>Team Member 1</p><br>
                                <p>Team Member 2</p><br>
                            </div>
                            <div id="team3-mem-cont">
                                <p>Team Member 1</p>
                            </div>
                        </div>
                    </div>-->
                </div>
                <!--*************Event registration***************-->
                <div class="tt_tab">
                    <div class="myh2">Event Registration</div>
                    <hr/><br>Please refer Bank Info section for payment details<br><br>
                    <div id="evealert"></div>
                    <div class="myh3">Select the event</div>
					<div>
                        <form id="regeve" method="post">
						    <select class="drpdwn" id="event" name="event">
                                <option value="" disabled selected>Select event</option>
                                <option value="1">D-Bug C-Bug</option>
                                <option value="2">Tick Tock</option>
                                <option value="3">BurnOut</option>
                                <option value="4">LineX</option>
                                <option value="5">Brick-It</option>
                                <option value="6">Jury-Rig</option>
                                <option value="7">Robot Soccer</option>
                                <option value="8">Chain Buster</option>
                                <option value="9">Hackathon</option>
                                <option value="10">Conundrum</option>
                                <!--<option value="11">Whiz-War</option>
                                <option value="12">Science of Deduction</option>-->
                            </select>
                            
                            <select id="eteamdd" name="eteamdd" class="drpdwn" style="display:none;">
                                    <option value="" disabled selected>Select your team for this Event</option>
                                    <?php 
                                        $stmt1 = $db->prepare("select * from user where gid=:gid");
                                        $stmt1->execute(array(':gid'=>$gid1));
                                        $result=$stmt1->fetch();
                                        $stmt2=$db->prepare("select tname from eveteam where tid=:tid");
                                        if($result['etid1']!=null)
                                        {                                        
                                            $stmt2->execute(array(':tid'=>$result['etid1']));
                                            $result2=$stmt2->fetch();
                                            echo '<option value="'.$result['etid1'].'">'.$result2['tname']."</option>";
                                        }   
                                        if($result['etid2']!=null)
                                        {                                        
                                            $stmt2->execute(array(':tid'=>$result['etid2']));
                                            $result2=$stmt2->fetch();
                                            echo '<option value="'.$result['etid2'].'">'.$result2['tname']."</option>";
                                        }
                                        if($result['etid3']!=null)
                                        {                                        
                                            $stmt2->execute(array(':tid'=>$result['etid3']));
                                            $result2=$stmt2->fetch();
                                            echo '<option value="'.$result['etid3'].'">'.$result2['tname']."</option>";
                                        }
                                        if($result['etid4']!=null)
                                        {                                        
                                            $stmt2->execute(array(':tid'=>$result['etid4']));
                                            $result2=$stmt2->fetch();
                                            echo '<option value="'.$result['etid4'].'">'.$result2['tname']."</option>";
                                        }
                                    ?>
                                </select>
                            	
                                <input type="text" id="paymenttxt" name="paymenttxt" style="display:none;"  class="mytxt" placeholder="Enter payment details"/><br><br>
                                <input type="submit" id="submiteve" name="submiteve" class="subbtn" value="Register"/>
                        </form>	
                        Registered events are:
                        <div id="regdevents">
                            <?php 
                                $stm1=$db->prepare("select * from events where eid=:eid");
                                $stm=$db->prepare("select * from regsevent where gid=:gid");
                                $stm->execute(array(':gid'=>$gid1));
                                $rs=$stm->fetchAll();
                                foreach($rs as $rw){
                                    //echo $rw['eid']."<br/>";
                                    $stm1->execute(array(":eid"=>$rw['eid']));
                                    $rs1=$stm1->fetch();
                                    echo $rs1['ename']."<br/>";
                                }
                            ?>
                        </div>
			        </div>
                </div>
                <!--*************Team for events***************-->
                <div class="tt_tab">
                    <div class="myh2">Team for events</div>
                    <hr/>
                    <?php 
                        $stmt=$db->prepare('SELECT * FROM `user` where gid=:gid');
                        $stmt->execute(array(':gid'=>$gid1));
                        $res=$stmt->fetch();
                        
                        if($res!=null){
                            $stmt1=$db->prepare('SELECT tname FROM `eveteam` where tid=:tid');
                        
                            echo '<div id="eveurteam" name="eveurteam">
                                Your teams:<br/><br/>';
                            if($res["etid1"]!=null){
                                $stmt1->execute(array(':tid'=>$res['etid1']));
                                $result=$stmt1->fetch();
                                echo $result['tname']."<br/>";
                            }
                            else{

                    ?>
                                <div id="tnmshow1"></div>
                                <div id="div1">
                                    <button id="btnteam1" class="plbtn">+</button>Click to create team
                                    <div id="deteam1">
                                        Refer events pages for number of members per team.<br/><br/>
                                        <form method="post" id="eveteamform1" name="eveteamform1">
                                            <input type="text" id="etnm1" name="etnm1" placeholder="Enter team name" class="mytxt"/><br>
                                            <div id="tnmshow2"></div><br>
                                            <input type="text" id="emem11" name="emem11" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="terr1" class=""></div><br/>
                                            <input type="text" id="emem12" name="emem12" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="terr2" class=""></div><br/>
                                            <input type="text" id="emem13" name="emem13" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="terr3" class=""></div><br/>
                                            <input type="text" id="emem14" name="emem14" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="terr4" class=""></div><br/>
                                            <input type="text" id="emem15" name="emem15" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="terr5" class=""></div><br/>
                                            <input type="text" id="emem16" name="emem16" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="terr6" class=""></div><br/>
                                            <input type="submit" id="submiteveteam1" name="submiteveteam1" class="subbtn" value="Create Team"/>
                                        </form>
                                    </div>
                                </div>
                    <?php
                            }
                            if($res["etid2"]!=null){
                                $stmt1->execute(array(':tid'=>$res['etid2']));
                                $result=$stmt1->fetch();
                                echo $result['tname']."<br/>";
                            }
                            else{

                    ?>
                                <br/>
                                <div id="tnmshow22"></div>
                                <div id="div2">
                                    <button id="btnteam2"  class="plbtn">+</button> Click to create team
                                    <div id="deteam2">
                                        Refer events pages for number of members per team. 
                                        <form method="post" id="eveteamform2" name="eveteamform2">
                                            <input type="text" id="etnm1" name="etnm1" placeholder="Enter team name" class="mytxt"/><br>
                                            <div id="tnmshow2"></div><br>
                                            <input type="text" id="emem11" name="emem11" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="terr1" class=""></div><br/>
                                            <input type="text" id="emem12" name="emem12" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="terr2" class=""></div><br/>
                                            <input type="text" id="emem13" name="emem13" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="terr3" class=""></div><br/>
                                            <input type="text" id="emem14" name="emem14" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="terr4" class=""></div><br/>
                                            <input type="text" id="emem15" name="emem15" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="terr5" class=""></div><br/>
                                            <input type="text" id="emem16" name="emem16" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="terr6" class=""></div><br/>
                                            <input type="submit" id="submiteveteam2" name="submiteveteam2" class="subbtn" value="Create Team"/>
                                        </form>
                                    </div>   
                                </div>
                    <?php
                            }
                            if($res["etid3"]!=null){
                                $stmt1->execute(array(':tid'=>$res['etid3']));
                                $result=$stmt1->fetch();
                                echo $result['tname']."<br/>";
                            }
                            else{

                    ?>
                                <br/>
                                <div id="tnmshow3"></div>
                                <div id="div3">
                                 
                                    <button id="btnteam3" class="plbtn">+</button> Click to create team
                                    <div id="deteam3">
                                        Refer events pages for number of members per team.
                                        <form method="post" id="eveteamform3" name="eveteamform3">
                                            <input type="text" id="etnm1" name="etnm1" placeholder="Enter team name" class="mytxt"/><br>
                                                <div id="tnmshow2"></div><br>
                                                <input type="text" id="emem11" name="emem11" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="terr1" class=""></div><br/>
                                                <input type="text" id="emem12" name="emem12" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="terr2" class=""></div><br/>
                                                <input type="text" id="emem13" name="emem13" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="terr3" class=""></div><br/>
                                                <input type="text" id="emem14" name="emem14" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="terr4" class=""></div><br/>
                                                <input type="text" id="emem15" name="emem15" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="terr5" class=""></div><br/>
                                                <input type="text" id="emem16" name="emem16" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="terr6" class=""></div><br/>
                                            <input type="submit" id="submiteveteam3" name="submiteveteam3" class="subbtn" value="Create Team"/>
                                        </form>
                                    </div>  
                                </div>
                    <?php
                            }
                            if($res["etid4"]!=null){
                                $stmt1->execute(array(':tid'=>$res['etid4']));
                                $result=$stmt1->fetch();
                                echo $result['tname']."<br/>";
                            }
                            else{

                    ?>
                                <br/>
                                <div id="tnmshow4"></div>
                                <div id="div4">
                                 
                                    <button id="btnteam4" class="plbtn">+</button> Click to create team
                                    <div id="deteam4">
                                        Refer events pages for number of members per team.
                                        <form method="post" id="eveteamform4" name="eveteamform4">
                                            <input type="text" id="etnm1" name="etnm1" placeholder="Enter team name" class="mytxt"/><br>
                                                <div id="tnmshow2"></div><br>
                                                <input type="text" id="emem11" name="emem11" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="terr1" class=""></div><br/>
                                                <input type="text" id="emem12" name="emem12" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="terr2" class=""></div><br/>
                                                <input type="text" id="emem13" name="emem13" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="terr3" class=""></div><br/>
                                                <input type="text" id="emem14" name="emem14" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="terr4" class=""></div><br/>
                                                <input type="text" id="emem15" name="emem15" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="terr5" class=""></div><br/>
                                                <input type="text" id="emem16" name="emem16" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="terr6" class=""></div><br/>
                                                <input type="submit" id="submiteveteam4" name="submiteveteam4" class="subbtn" value="Create Team"/>
                                        </form>
                                    </div>               
                                </div>
                    <?php
                            }
                            echo "</div>";
                        }
                    ?>
                </div>
                <!--*************Workshop registration***************-->
                <div class="tt_tab">
                    <div class="myh2">Workshop Registration</div>
                    <hr/><br>Please refer Bank Info section for payment details<br><br>
                    <div id="wrkalert"></div>
                    
                    <div class="myh3">Select the workshop</div>
                    <div>
                        <form id="regwrk" method="post">
                            <select class="drpdwn" id="workshop" name="workshop">
                                <option value="" disabled selected>Select workshop</option>
                                <option value="1">CATIA V5</option>
                                <option value="2">Balancing Bot</option>
                                <option value="3">Formula UNO</option>
                                <option value="4">Android App Development</option>
                                <option value="5">Artificial Intelligence</option>
                                <option value="6">Eye Tracking Robot</option>
                            </select>	<br>			
                            
                            <select id="wteamdd" name="wteamdd" class="selectdrp drpdwn" style="display:none;">
                                    <option value="" disabled selected>Select your team for this Event</option>
                                    <?php 
                                        $stmt1 = $db->prepare("select * from user where gid=:gid");
                                        $stmt1->execute(array(':gid'=>$gid1));
                                        $result=$stmt1->fetch();
                                        $stmt2=$db->prepare("select tname from wkteam where tid=:tid");
                                        if($result['wtid1']!=null)
                                        {                                        
                                            $stmt2->execute(array(':tid'=>$result['wtid1']));
                                            $result2=$stmt2->fetch();
                                            echo '<option value="'.$result['wtid1'].'">'.$result2['tname']."</option>";
                                        }   
                                        if($result['wtid2']!=null)
                                        {                                        
                                            $stmt2->execute(array(':tid'=>$result['wtid2']));
                                            $result2=$stmt2->fetch();
                                            echo '<option value="'.$result['wtid2'].'">'.$result2['tname']."</option>";
                                        }
                                        if($result['wtid3']!=null)
                                        {                                        
                                            $stmt2->execute(array(':tid'=>$result['wtid3']));
                                            $result2=$stmt2->fetch();
                                            echo '<option value="'.$result['wtid3'].'">'.$result2['tname']."</option>";
                                        }
                                        if($result['wtid4']!=null)
                                        {                                        
                                            $stmt2->execute(array(':tid'=>$result['wtid4']));
                                            $result2=$stmt2->fetch();
                                            echo '<option value="'.$result['wtid4'].'">'.$result2['tname']."</option>";
                                        }
                                    ?>
                                </select>
                                <input type="text" id="wpaymenttxt" name="wpaymenttxt"  class="mytxt" placeholder="Enter payment details"/><br><br>
                                <input type="submit" id="submitw" name="submitw" class="subbtn" value="Register"/>
                        </form>
                        Registered workshops are:
                        <div id="regdw">
                            <?php 
                                $stm1=$db->prepare("select * from workshop where wid=:wid");
                                $stm=$db->prepare("select * from regsworkshop where gid=:gid");
                                $stm->execute(array(':gid'=>$gid1));
                                $rs=$stm->fetchAll();
                                foreach($rs as $rw){
                                    //echo $rw['eid']."<br/>";
                                    $stm1->execute(array(":wid"=>$rw['wid']));
                                    $rs1=$stm1->fetch();
                                    echo $rs1['wname']."<br/>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <!--*************Workshop team***************-->
                <div class="tt_tab">
                    <div class="myh2">Team for workshops</div>
                    <hr/>
                    <?php 
                        $stmt=$db->prepare('SELECT * FROM `user` where gid=:gid');
                        $stmt->execute(array(':gid'=>$gid1));
                        $res=$stmt->fetch();
                        
                        if($res!=null){
                            $stmt1=$db->prepare('SELECT tname FROM `wkteam` where tid=:tid');
                            echo '<div id="wkurteam" name="wkurteam">
                                Your teams:<br/><br/>';
                            if($res["wtid1"]!=null){
                                $stmt1->execute(array(':tid'=>$res['wtid1']));
                                $result=$stmt1->fetch();
                                echo $result['tname']."<br/>";
                            }
                            else{

                    ?>
                                <div id="wtnmshow1"></div>
                                <div id="wdiv1">
                                    <button id="wbtnteam1" class="plbtn">+</button>Click to create team
                                    <div id="dwteam1">
                                        Refer workshop pages for number of members per team.
                                        <form method="post" id="wteamform1" name="wteamform1">
                                            <input type="text" id="etnm1" name="etnm1" placeholder="Enter team name" class="mytxt"/><br>
                                            <div id="wtnmshow2"></div><br>
                                            <input type="text" id="emem11" name="emem11" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="wterr1" class=""></div><br/>
                                            <input type="text" id="emem12" name="emem12" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="wterr2" class=""></div><br/>
                                            <input type="text" id="emem13" name="emem13" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="wterr3" class=""></div><br/>
                                            <input type="text" id="emem14" name="emem14" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="wterr4" class=""></div><br/>
                                            <input type="text" id="emem15" name="emem15" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="wterr5" class=""></div><br/>
                                            <input type="text" id="emem16" name="emem16" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="wterr6" class=""></div><br/>
                                            <input type="submit" id="submitwteam1" name="submitwteam1" class="subbtn" value="Create Team"/>
                                        </form>
                                    </div>
                                </div>
                    <?php
                            }
                            if($res["wtid2"]!=null){
                                $stmt1->execute(array(':tid'=>$res['wtid2']));
                                $result=$stmt1->fetch();
                                echo $result['tname']."<br/>";
                            }
                            else{
                    ?>
                                <br/>
                                <div id="wtnmshow22"></div>
                                <div id="wdiv2">
                                    <button id="wbtnteam2" class="plbtn">+</button> Click to create team
                                    <div id="dwteam2">
                                        Refer workshop pages for number of members per team. 
                                        <form method="post" id="wteamform2" name="wteamform2">
                                            <input type="text" id="etnm1" name="etnm1" placeholder="Enter team name" class="mytxt"/><br>
                                            <div id="wtnmshow2"></div><br>
                                            <input type="text" id="emem11" name="emem11" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="wterr1" class=""></div><br/>
                                            <input type="text" id="emem12" name="emem12" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="wterr2" class=""></div><br/>
                                            <input type="text" id="emem13" name="emem13" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="wterr3" class=""></div><br/>
                                            <input type="text" id="emem14" name="emem14" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="wterr4" class=""></div><br/>
                                            <input type="text" id="emem15" name="emem15" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="wterr5" class=""></div><br/>
                                            <input type="text" id="emem16" name="emem16" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                            <div id="wterr6" class=""></div><br/>
                                            <input type="submit" id="submitwteam2" name="submitwteam2" class="subbtn" value="Create Team"/>
                                        </form>
                                    </div>   
                                </div>
                    <?php
                            }
                            if($res["wtid3"]!=null){
                                $stmt1->execute(array(':tid'=>$res['wtid3']));
                                $result=$stmt1->fetch();
                                echo $result['tname']."<br/>";
                            }
                            else{

                ?>  
                                <br/>
                                <div id="wtnmshow3"></div>
                                <div id="wdiv3">
                                 
                                    <button id="wbtnteam3" class="plbtn">+</button> Click to create team
                                    <div id="dwteam3">
                                        Refer workshop pages for number of members per team.
                                        <form method="post" id="wteamform3" name="wteamform3">
                                            <input type="text" id="etnm1" name="etnm1" placeholder="Enter team name" class="mytxt"/><br>
                                                <div id="wtnmshow2"></div><br>
                                                <input type="text" id="emem11" name="emem11" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="wterr1" class=""></div><br/>
                                                <input type="text" id="emem12" name="emem12" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="wterr2" class=""></div><br/>
                                                <input type="text" id="emem13" name="emem13" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="wterr3" class=""></div><br/>
                                                <input type="text" id="emem14" name="emem14" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="wterr4" class=""></div><br/>
                                                <input type="text" id="emem15" name="emem15" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="wterr5" class=""></div><br/>
                                                <input type="text" id="emem16" name="emem16" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="wterr6" class=""></div><br/>
                                            <input type="submit" id="submitwteam3" name="submitwteam3" class="subbtn" value="Create Team"/>
                                        </form>
                                    </div>  
                                </div>
                    <?php
                            }
                            if($res["wtid4"]!=null){
                                $stmt1->execute(array(':tid'=>$res['wtid4']));
                                $result=$stmt1->fetch();
                                echo $result['tname']."<br/>";
                            }
                            else{

                    ?>
                                <br/>
                                <div id="wtnmshow4"></div>
                                <div id="wdiv4">
                                 
                                    <button id="wbtnteam4" class="plbtn">+</button> Click to create team
                                    <div id="dwteam4">
                                        Refer workshop pages for number of members per team.
                                        <form method="post" id="wteamform4" name="wteamform4">
                                            <input type="text" id="etnm1" name="etnm1" placeholder="Enter team name" class="mytxt"/><br>
                                                <div id="wtnmshow2"></div><br>
                                                <input type="text" id="emem11" name="emem11" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="wterr1" class=""></div><br/>
                                                <input type="text" id="emem12" name="emem12" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="wterr2" class=""></div><br/>
                                                <input type="text" id="emem13" name="emem13" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="wterr3" class=""></div><br/>
                                                <input type="text" id="emem14" name="emem14" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="wterr4" class=""></div><br/>
                                                <input type="text" id="emem15" name="emem15" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="wterr5" class=""></div><br/>
                                                <input type="text" id="emem16" name="emem16" placeholder="Enter team Member GY-ID" class="mytxt"/><br>
                                                <div id="wterr6" class=""></div><br/>
                                                <input type="submit" id="submitwteam4" name="submitwteam4" class="subbtn" value="Create Team"/>
                                        </form>
                                    </div>               
                                </div>
                    <?php
                            }
                            echo "</div>";
                        }
                    ?>
				</div>
				<!--*************Accomodation***************-->
                <div class="tt_tab ">
                    <div class="myh2">Register for accomodation</div>
                    <hr/>
                    <!--<div class="myhr"></div>-->
                    
                    <div id="accomalert"></div>
                    <div class="myh3">Check the dates you need accomodation</div><br/>
                    <form id="accom" method="post">
                        <label>March 15,2018</label><input type="checkbox" name="check_list[]" value="15"><br/><br/>
                        <label>March 16,2018</label><input type="checkbox" name="check_list[]" value="16"><br/><br/>
                        <label>March 17,2018</label><input type="checkbox" name="check_list[]" value="17"><br/><br/>
                        <label>March 18,2018</label><input type="checkbox" name="check_list[]" value="18"><br/><br/>
                        <input type="text" id="payacco" name="payacco" placeholder="Enter payment details" class="mytxt"/><br><br/>
                        <input type="submit" id="submitaccom" name="submitaccom" class="subbtn" value="Submit"/>
                    </form>

                </div>

                <!--*************Bank Info***************-->
                <div class="tt_tab ">
                    <div class="myh2">Bank Info</div>
                    <hr/>
                    Please make payment to this account and provide reference number while registering for events/workshops<br><br>
                    <!--<div class="myhr"></div>-->
                    <table>
                        <tr>
                            <td>Name of Bank:</td>
                            <td>State Bank of India</td>
                        </tr>
                        <tr>
                            <td>Bank A/c no.:</td>
                            <td>36521315650</td>
                        </tr>
                        <tr>
                            <td>Account Name:</td>
                            <td>GYANITH</td>
                        </tr>
                        <tr>
                            <td>Branch Code (BSR):</td>
                            <td>0001418</td>
                        </tr>
                        <tr>
                            <td>RTGS/NEFT/IFSC Code</td>
                            <td>SBIN0001418</td>
                        </tr>
                        <tr>
                            <td>Branch:</td>
                            <td>
                                Bharathiyar Road, Karaikal.609609
                            </td>
                        </tr>
                    </table>
                    

                </div>

            </div><!-- .container -->

    </div><!-- #main -->
    <!--END VERTICAL TAB-->


<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/turbotabs.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="js/dashboard.js"></script>
</body>
</html>
