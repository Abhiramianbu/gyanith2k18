
<html>
<head>
<title>TurboTabs</title>
<meta name="description" content="TurboTabs - Free Responsive Tabs Jquery Plugin. TurboTabs gives you powerfull customizations and is very easy to use. For easier customizations you can use online options constructor with previewer to build TurboTab.">
<meta name="keywords" content="jquery plugins, jquery plugin, free plugin, responsive tabs plugin, tabs with jquery, tabs plugin">
<meta name="author" content="Aleksej Vukomanovic" />
<meta name="contact" content="aleksejvu@gmail.com" />
<meta name="copyright" content="Copyright (c)2015 -
 Aleksej Vukpomanovic. All Rights Reserved." />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<link rel="stylesheet" type="text/css" href="css/turbotabs.css" />
<link rel="stylesheet" type="text/css" href="css/animate.min.css" />
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<style type="text/css">  
/* Main Style */
body {
  margin: 0;
  font-size: 16px;
  line-height: 20px;
  color: #333333;
  background:url(img/eventbg.png);
  background-size:cover;
  padding: 60px 10px;
}
h1, h2, h3, h4, h5, h6 {
  text-align: center;
  clear: both;
  font-weight: normal;
  line-height: 1;
  vertical-align: baseline;
  font-weight: 300; }

ol, ul {
  list-style: none; 
}
.top{width: 95%; position: absolute; top: 25px;}
.menu{ text-align: right; display: inline-block; width: 70%;}
.menu li {display: inline-block; padding: 2px 15px;}
.examples{position: relative; width: 100%; margin: 30px 10px;}
.examples ul{text-align: center}
.examples ul li{display: inline-block; padding: 5px 10px;}
</style>

</head>

<body>

    
    <h1>DashBoard</h1>
   

    <!-- - - - - - -  - - - VERTICAL TAB - - - - - -  - - - - - -->
    <div id="myTab">
            <!-- - - - - - Tab navigation - - - - - - -->
            <ul class="tt_tabs">
                <li class="active">Events Registration</li>
                <li>Team for events</li>
                <li>Workshop Registration</li>
                <li>Teams for Workshop</li>
				 <li>Accommodation</li>
            </ul>
            <!-- - - - - Tab Content - - - - - -->
            <div class="tt_container">

                <div class="tt_tab active">
                    <h2>Select the event</h2>
					 <div>
                    <form method="post" action="">
						<select class="form-dropdown" style="width:150px" id="input_5" name="event">
							<?php 
								include("dbcon.php");
								$stmt=$db->prepare('SELECT * FROM `events`');
								$stmt->execute();
								$result=$stmt->fetchAll();
								foreach ($result as $row): 
								  echo '<option value="'.$row['eid'].'">'.$row['ename']."</option>";
								endforeach
							?>
						</select>			
<br><br>						
						<input type="submit" id="submiteve" name="submiteve" class="bttn" value="Register"/>
					
					<?php 
						$gid='31';
						if(isset($_POST['submiteve'])){
							
							
							$eid=$_POST['event'];
							
							$stmt = $db->prepare('INSERT INTO `regsevent` (gid,eid) VALUES (:gid,:eid)');
							$stmt->bindParam(':eid', $eid);
							$stmt->bindParam(':gid', $gid);
							$stmt->exec();
						}
					?>	
				
					</form>	
					
                </div>
                </div>

                <div class="tt_tab">
                    <h2>Registered events are</h2>
              </div>

                 <div class="tt_tab">
                    <h2>select the workshop</h2>
					 <div>
                    <form>
					 <select class="form-dropdown" style="width:150px" id="input_5" name="workshop">
<?php 
								include("dbcon.php");
								$stmt=$db->prepare('SELECT * FROM `workshop`');
								$stmt->execute();
								$result=$stmt->fetchAll();
								foreach ($result as $row): 
								  echo '<option value="'.$row['wid'].'">'.$row['wname']."</option>";
								endforeach
							?>
		</select>	<br>	<br>			
	<input type="submit" id="submiteve" name="submiteve" class="bttn" value="Register"/>
					<?php 
						
					
						if(isset($_POST['submiteve'])){
								
							
							$eid=$_POST['workshop'];
							$stmt = $db->prepare('SELECT * FROM `regsworkshop` (gid,wid) VALUES (:gid,:wid)');
							$stmt->bindParam(':wid', $wid);
							$stmt->bindParam(':gid', $gid);
							$stmt->exec();
						}
					?>	
					
				
					</form>
                </div>
                       </div>

                <div class="tt_tab">
                    <h2>Registered workshop</h2>
                
				</div>
				  <div class="tt_tab">
                    <h2>Accommodation</h2>
					<p>Choose the date:</p>
					 <form method="post" action="">
						 <input type="checkbox"  id="input_6" name="accom" value="0">16/03/2017<br>
						 <input type="checkbox"id="input_6" name="accom" value="1">17/03/2017<br>
						 <input type="checkbox" id="input_6" name="accom" value="2">18/03/2017<br>					
						 </select>
	<input type="submit" id="submiteve1" name="submiteve1" class="bttn" value="Register"/>						 
						 </form>
              </div>
				
            </div><!-- .container -->

    </div><!-- #main -->
    <!--END VERTICAL TAB-->


<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/turbotabs.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#myTab').turbotabs({
        animation : 'ScrollUp',
        mode : 'vertical'
    }); 
}); 
</script>

</body>
</html>
