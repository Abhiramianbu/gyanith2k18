<link rel="stylesheet" href="css/style.css">
<link href="css/all.css" rel="stylesheet">
<style>
    .c-hamburger{
        position:fixed;
        top:0;
    }
</style>
<?php session_start(); ?>
<div id="wrapper">
    <div id="container"></div>
</div>
<div class="o-grid__item">
	<button class="c-hamburger c-hamburger--htla">
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
                    <li><a href="profile">My Profile</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php }
            ?>
		</ul>
	</div>
</div>
<div class="content-overlay">
	<a href="https://goo.gl/KqxJ6u" id="socio" target="blank"><i class="fab fa-facebook-f"></i></a><br>
	<a href="https://goo.gl/9x7ccG" id="socio" target="blank"><i class="fab fa-twitter"></i></a><br>
	<a href="https://goo.gl/wbJ842" id="socio" target="blank"><i class="fab fa-instagram"></i></a><br>			
	<div id="fullpage">
		<div class="section" id="section0">
			<div class="text-container">
    			<a href="index.php" style="text-decoration:none;"><h1><span>Gyanith'18</span></h1>
					<h2>
						<span class="splited-line"><span class="splited-line__wrapper">WE UNITE! </span></span>
						<span class="splited-line"><span class="splited-line__wrapper">WE INSPIRE!</span></span>
					</h2>
					<p>GYANITH literally translates to “inspiring”. Hence we are here to inspire you and give you an unforgettable experience of learning, fun and creation.</p>
				</a>
			</div>
		</div>
				<!--
				<div class="section" id="section1">
					<div class="text-container">
			            <h2>
			                <span class="splited-line"><span class="splited-line__wrapper">Artificial </span></span>
			                <span class="splited-line"><span class="splited-line__wrapper">Intelligence</span></span>
			            </h2>
			            <p>Artificial intelligence (AI) is an area of computer science that emphasizes the creation of intelligent machines that work and react like humans. Some of the activities computers with artificial intelligence are designed for include: Speech recognition, Learning, Planning, Problem solving.</p>
			        </div>
				</div>

				<div class="section" id="section2">
					<div class="text-container">
						<h1><span>Artificial Intelligence</span></h1>
			            <h2>
			                <span class="splited-line"><span class="splited-line__wrapper">Natural </span></span>
			                <span class="splited-line"><span class="splited-line__wrapper">Language</span></span>
			                <span class="splited-line"><span class="splited-line__wrapper">Processing</span></span>
			            </h2>
			            <p>NLP is a way for computers to analyze, understand, and derive meaning from human language in a smart and useful way. By utilizing NLP, developers can organize and structure knowledge to perform tasks such as automatic summarization, translation, named entity recognition, relationship extraction, sentiment analysis, speech recognition, and topic segmentation.</p>
			        </div>
				</div>

				<div class="section" id="section3">
					<div class="text-container">
						<h1><span>Artificial Intelligence</span></h1>
			            <h2>
			                <span class="splited-line"><span class="splited-line__wrapper">Machine </span></span>
			                <span class="splited-line"><span class="splited-line__wrapper">Learning</span></span>
			            </h2>
			            <p>Machine learning is a method of data analysis that automates analytical model building. Using algorithms that iteratively learn from data, machine learning allows computers to learn without being explicitly programmed where to look. The result? High-value predictions that can guide better decisions and smart actions in real time without human intervention.</p>
			        </div>
				</div>

				<div class="section" id="section4">
					<div class="text-container">
						<h1><span>Artificial Intelligence</span></h1>
			            <h2>
			                <span class="splited-line"><span class="splited-line__wrapper">Deep </span></span>
			                <span class="splited-line"><span class="splited-line__wrapper">Learning</span></span>
			            </h2>
			            <p>Deep learning combines advances in computing power and special types of neural networks to learn complicated patterns in large amounts of data. Deep learning techniques are currently state- of-the-art for identifying objects in images and words in sounds. Researchers are now looking to apply these successes in pattern recognition to more complex tasks such as automatic language translation, medical diagnoses and numerous other important social and business problems.</p>
			        </div>
				</div>

				<div class="section" id="section5">
					<div class="text-container">
			            <h2>
			                <span class="splited-line"><span class="splited-line__wrapper">Computer </span></span>
			                <span class="splited-line"><span class="splited-line__wrapper">Vision</span></span>
			            </h2>
			            <p>Humans use their eyes and their brains to see and visually sense the world around them. Computer vision is the science that aims to give a similar, if not better, capability to a machine or computer. Computer Vision typically refers to the scientific discipline of giving machines the ability of sight, or perhaps more colourfully, enabling machines to visually analyse their environments and the stimuli within them. This process typically involves the evaluation of an image, images or video.</p>
			        </div>
				</div>

				<div class="section" id="section6">
					<div class="text-container">
						<h1><span>Computer Vision</span></h1>
			            <h2>
			                <span class="splited-line"><span class="splited-line__wrapper">Convolutional </span></span>
			                <span class="splited-line"><span class="splited-line__wrapper">Neural</span></span>
			                <span class="splited-line"><span class="splited-line__wrapper">Network</span></span>
			            </h2>
			            <p>In machine learning, a convolutional neural network (CNN, or ConvNet) is a class of deep, feed- forward artificial neural networks that has successfully been applied to analyzing visual imagery. Convolutional networks were inspired by biological processes in which the connectivity pattern between neurons is inspired by the organization of the animal visual cortex.</p>
			        </div>
				</div>

				<div class="section" id="section7">
					<div class="text-container">
			            <h2>
			                <span class="splited-line"><span class="splited-line__wrapper">Augmented </span></span>
			                <span class="splited-line"><span class="splited-line__wrapper">Reality</span></span>
			            </h2>
			            <p>Augmented Reality is an enhanced version of reality where live direct or indirect views of physical real-world environments are augmented with superimposed computer-generated images over a user's view of the real-world, thus enhancing one’s current perception of reality.</p>
			        </div>
				</div>

				<div class="section" id="section8">
					<div class="text-container">
			            <h2>
			                <span class="splited-line"><span class="splited-line__wrapper">Blockchain </span></span>
			                <span class="splited-line"><span class="splited-line__wrapper">Technology</span></span>
			            </h2>
			            <p>A blockchain is a continuously growing list of records, called blocks, which are linked and secured using cryptography. Each block typically contains a hash pointer as a link to a previous block, a timestamp and transaction data. By design, blockchains are inherently resistant to modification of the data.</p>
			        </div>
				</div>
-->
	</div>
</div>
<script src="js\jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js\scripts1.js"></script>

  		
  