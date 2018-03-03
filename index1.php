
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="description" content="Gyanith '18 is the second version of single technical symposium of NIT Puducherry.">
		<meta name="author" content="Web Team Gyanith,NIT Py" />
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
		<title>Gyanith '18</title>
		<link rel="icon" type="image/png" href="images/gyanith-icon1.png" sizes="32x32">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="manifest" href="assets/img/icons/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="assets/img/icons/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<link href="assets/css/all.css" rel="stylesheet">
		<style>
			.linear-wipe2 a {
  				text-decoration:none;
  				 color:#fff;
				}
				.linear-wipe1 a {
  				text-decoration:none;
  				 color:#fff;
				}
				.box:hover{
					display:none;
				}


		</style>
		
	</head>
	<body>
		<?php
		session_start();?>
		<div id="loading"></div>
		<div id="wrapper">
			<div id="container" class="cl"></div>
	
			<div id="logo" class="parallax-front" style="font-family: 'Proxima Nova';">Gyanith'18</span></div><br/>
			<div id="datelogo" class="parallax-front" style="font-family: 'Proxima Nova';">March 16-18</div>
			
		</div>
		<div id="info"></div>




		<div class="o-grid__item">
	      <button class="c-hamburger c-hamburger--htla" >
	        <span>toggle menu</span>
	      </button>

	      <div class="account-div" id="account-div">
			<i class="fas fa-user-circle" class="account-icon"></i>
			<ul class="account-div-ul" id="account-div-ul">
				
				<?php
                	if(!isset($_SESSION['gid'])){ ?>
                    	<li><a href="login">LogIn/Register</a></li>
                <?php }
                else{ ?>
                    <li><a href="profile.php">My Profile</a></li>
                    <li><a href="login/logout.php">Logout</a></li>
                <?php }
            	?>
			</ul>
	      </div>
	    </div>



		<div class="content-overlay">
		<span id="madeby">By Webteam Gyanith | NIT Puducherry<br/></span>
            <div class="social-link-div">
				<a href="https://goo.gl/KqxJ6u" id="socio" target="blank"><i class="fab fa-facebook-f"></i></a>
				<a href="https://goo.gl/9x7ccG" id="socio" target="blank"><i class="fab fa-twitter"></i></a>
				<a href="https://goo.gl/wbJ842" id="socio" target="blank"><i class="fab fa-instagram"></i></a>
            </div>
		

			<div id="fullpage">
				<div class="section" id="section0">
					<div class="text-container">

						<a href="index.php" style="text-decoration:none;"><h1><span>Gyanith'18<br/> March 16-18</span></h1>
							<h2 style="margin-top: 0px;margin-bottom: 0px;">
								<span class="splited-line"><span class="splited-line__wrapper" >WE UNITE! </span></span>
								<span class="splited-line"><span class="splited-line__wrapper">WE INSPIRE!</span></span>
							</h2>
							<p style="left: -15px; font-weight: 10px;font-size: 15px;">GYANITH literally translates to “inspiring”. Hence we are here to inspire you and give you an unforgettable experience of learning, fun and creation.</p>
						</a>
					</div>
				</div>

				<div class="section" id="section2">
					<div class="text-container">
						<h1><span>Events</span></h1>
						
							   <p style="font-family: 'Proxima Nova';">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ante dolor, placerat ut maximus vitae, varius quis odio. Maecenas in ultrices libero. Aenean leo tellus, congue ut interdum sed, luctus quis sem. </p>
						     
							   <h3>
			            	<span class="splited-line"><span class="splited-line__wrapper" >
			         
			            	<ul style="font-family: 'Proxima Nova';text-decoration: none;list-style: none; ">
			            		<li style="float:left;width: 45%" class="linear-wipe1"><a href="technical.html">Technical Events</a></li>
			          <p></p>			            		
			          <li  class="linear-wipe2"><a href="nontech.html">Non-Technical Events</a></li>
			            	</ul>
			            </span>
			        </span>
			    </h3>
		
			        </div>
				</div>

				<div class="section" id="section3">
					<div class="text-container">
						<h1><span>Workshops</span></h1>
			            			            <p style="font-family: 'Proxima Nova';">>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ante dolor, placerat ut maximus vitae, varius quis odio. Maecenas in ultrices libero. Aenean leo tellus, congue ut interdum sed, luctus quis sem. Suspendisse consequat, turpis eget volutpat congue, sem nibh ultrices orci, vel tristique nunc ante ut dui.  </p>
			              </br>
			        <a href="workshop.html"><h3 style="text-align: center;">Explore more</h3></a>
			        </div>
				</div>

				<div class="section" id="section4">
					<div class="text-container">
						<h1 style="padding-left: 1%;"><span>Portfolio</span></h1>
			           			            <p style="font-family: 'Proxima Nova';">>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ante dolor, placerat ut maximus vitae, varius quis odio. Maecenas in ultrices libero. Aenean leo tellus, congue ut interdum sed, luctus quis sem. Suspendisse consequat, turpis eget volutpat congue, sem nibh ultrices orci, vel tristique nunc ante ut dui.  </p>
			            </br>
			             <a href=""><h3 style="text-align: center;">Explore more</h3></a>
			        </div>
			        </div>
				</div>
				
			</div>

			
		</div>
		<script src="assets/js/jquery-1.9.1.min.js"></script>
  		<script type="text/javascript" src="assets/js/scripts.js"></script>
		<script type="text/javascript">
			$(function() {
			$("a.ajax-link").on("click", function(e) {
				e.preventDefault();
				$("#main_content").load(this.href);
			});
			});
		</script>
  		
  	</body>
</html>
