<?php

	include("getEmails.php");

?>

<html lang="en" class="yellow">

	<head>

		<!-- Created and maintained by Tony Xin -->

	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="Keywords" content="Mountain View Highschool Science Olympiad, Scioly, Mountain View">
        <meta name="Description" content="The MVHS Science Olympiad club educates and inspires students in all STEM (science, technology, engineering, and math) disciplines through hands-on activities and learning.">
	<meta name="google-signin-client_id" content="959383274677-o9c54q8dimqlpt5gng0ukpe9g16hc8p5.apps.googleusercontent.com">


		<title>Mountain View High School Science Olympiad</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/mdb.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />

		<style>
			.font-size {
				font-size: calc(60px + (26 - 14) * ((100vw - 300px) / (1600 - 300))); line-height: calc(1.3em + (1.5 - 1.2) * ((100vw - 300px)/(1600 - 300)));
			}

			.font-size-big {
				font-size: calc(80px + (26 - 14) * ((100vw - 300px) / (1600 - 300))); line-height: calc(1.3em + (1.5 - 1.2) * ((100vw - 300px)/(1600 - 300)));
			}

			#mentors-container {
				width: 72vw;
				min-width: 400px;
				border-radius: 20px;
				background-color: rgb(51,51,51);
				padding: 20px;
				margin-top: 10vh;
				margin-bottom: 10vh;
			}
		</style>

		</style>
	</head>

	<body>

			<?php include("navbar.php") ?>

			<div class="mt-0 pb-3 odd animated fadeInUp fast white">
				<div class="container text-light" id="mentors-container">
					<div class="panel text-center">
						<h1 class="font-size animated fadeIn slower" style="font-weight: bold; margin-top: 5vh;"><strong>Mentors</strong></h1>
						<p>
						<h2><strong>2019 Coaches and Mentors:</strong></h2>
						<h3>
Head Coaches: Ke & Hyunah<br/>
Assistant Coaches: Anita, Jeff, Clare, Mark D, William, Claire, Mark N, & Dr. Jackie<br/>
Club Advisor: Dr. Ning<br/>
Shir: Write it/Do it, Mission Possible, Fermi Questions, Code Busters<br/>
William: Game On, Write it/Do It, Mission Possible<br/>
Becca: Fossils, Herpetology<br/>
Mark N: Mousetrap Vehicle, Boomilever<br/>
Claire: Astronomy, Remote Sensing (Black team)<br/>
Mark D: Code Busters, Wright Stuff, Sounds of Music<br/>
Jeff: Forensics, Hovercraft, Thermodynamics, Material Science<br/>
Anita: Experimental Design<br/>
Clare: Water Quality<br/>
Jeff: Boomilever, Mission Possible<br/>
Parul: Dynamic Planet<br/>
Jin: Designer Genes<br/>
Dr. Jackie: Anatomy<br/>
</h3>
					</div>
				</div>
			</div>

	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<script type="text/javascript" src="js/modules/wow.js"></script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>


	<script type="text/javascript">

		$("#home").removeClass("active");
		$("#mentors").addClass("active");

	<?php include("footer.php") ?>