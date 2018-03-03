<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="description" content="Gyanith '18 is the second version of single technical symposium of NIT Puducherry.">
	<meta name="author" content="Web Team Gyanith,NIT Py" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Profile | Gyanith '18</title>
	<link rel="icon" type="image/png" href="assets/img/icons/gyanith-icon.png" sizes="32x32">
	
	<link href="assets/css/all.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style1.css">
	<link rel="stylesheet" type="text/css" href="assets/css/profile.css" />
	<!--<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">-->

</head>

<body>
	<?php
		session_start();
		if(!isset($_SESSION['gid'])){
           header('Location: /login');
		}
	?>
	<div class="o-grid__item" onclick="javascript:location.href='../'">
	      <button class="c-hamburger c-hamburger--htla is-active">
	        <span>Toggle menu</span>
		  </button>
	</div>

	<div class="row" id="your-profile">
		<p><span>Your</span> Profile</p>
	</div>
	<div class="profile-content" id="profile-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="det-con">
					<p class="about-me"><span class="red">About</span> Me</p>
					<div class="profile-details">
						<i class="fas fa-address-card"></i><p><span class="info-id">Gyanith ID&nbsp;&nbsp; </span><span id="profile-gyanid"><?php echo $_SESSION['gid']; ?></span></p><br>	
						<i class="fas fa-user-circle"></i><p><span class="info-id">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span id="profile-name"><?php echo $_SESSION['name']; ?></span></p><br>
						<i class="far fa-envelope"></i><p><span class="info-id">E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span id="profile-email"><?php echo $_SESSION['email']; ?></span></p><br>
						<i class="fas fa-university"></i><p><span class="info-id">College&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span id="profile-college-name"><?php echo $_SESSION['college']; ?></span></p><br>
						<i class="fas fa-mobile"></i><p><span class="info-id">Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><span id="profile-contact"><?php echo $_SESSION['mobile']; ?></span></p><br>
						<button class="teamid-btn">Team ID</button><br>
						<div class="row" >
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
						</div>
					</div>
				</div>
				<!--<p class="event-me"><span class="red">Events and</span> Workshops Registered</p>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="eve-con-1">
						<div class="event-container">
							<div class="event-div">
								<p id="event-month">&nbsp;MAR</p>
								<p id="event-date">32</p>&nbsp;&nbsp;
								<i class="fab fa-facebook"></i>
								<p class="event-name">CodeWeb</p>
							</div>
						</div><br>
						<div class="event-container">
							<div class="event-div">
								<p id="event-month">&nbsp;MAR</p>
								<p id="event-date">33</p>&nbsp;&nbsp;
								<i class="fab fa-facebook"></i>
								<p class="event-name">CodeWeb</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="eve-con-2">
						<div class="event-container">
							<div class="event-div">
								<p id="event-month">&nbsp;MAR</p>
								<p id="event-date">34</p>&nbsp;&nbsp;
								<i class="fab fa-facebook"></i>
								<p class="event-name">CodeWeb</p>
							</div>
						</div><br>
						<div class="event-container">
							<div class="event-div">
								<p id="event-month">&nbsp;MAR</p>
								<p id="event-date">35</p>&nbsp;&nbsp;
								<i class="fab fa-facebook"></i>
								<p class="event-name">CodeWeb</p>
							</div>
						</div>
					</div>
				</div>-->

			</div>
		</div>
	</div>
	<!--<footer style="position:fixed;bottom:0;width:100%;">
		<p><a href="/index.php">Gyanith'18</a> | NIT Puducherry</p>
	</footer>-->
	<script src="assets/js/jquery-1.9.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/profile.js"></script>
	<script type="text/javascript" src="assets/js/scripts1.js"></script>
</body>
</html>