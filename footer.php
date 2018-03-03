	<link href="css/all.css" rel="stylesheet">
	<style type="text/css">

		footer{
			position:fixed;
			left: 0;
		  	bottom: 0;
			width: 100%;
			color:	#c1272d;
			background-color:#282828;
			text-align:center;
			padding:3px;
			font-size:1em;
		}

		footer i{
			font-size:1.2em;
			vertical-align: middle;
		}

		footer a{
			color:#c1272d;
			text-decoration:none;
		}
		
		#soc{
			padding:0px 10px;
		}

		footer p{
			margin:0px;
			margin-top:10px;
		}
		.fa-facebook-f:hover, .fa-twitter:hover, .fa-instagram:hover{
			color:#fff;
		}
	</style>
	<script>
		function chcol(color) {
			document.getElementById('webteam').style.color = color;
		} 
	</script>
	

<footer>
	<a href="https://goo.gl/KqxJ6u"><i id="soc" class="fab fa-facebook-f"></i></a>
	<a href="https://goo.gl/9x7ccG"><i id="soc" class="fab fa-twitter"></i></a>
	<a href="https://goo.gl/wbJ842"><i id="soc" class="fab fa-instagram"></i></a>
	<a href="#" onmouseover="chcol('#fff')" onmouseout="chcol('#c1272d')"><p>Made With <i class="fas fa-heart"></i> by <span id="webteam">Web Team Gyanith</span> | NIT Puducherry</p></a>
</footer>
