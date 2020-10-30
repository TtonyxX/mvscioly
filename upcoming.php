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
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

		<style>
			.font-size {
				font-size: calc(60px + (26 - 14) * ((100vw - 300px) / (1600 - 300))); line-height: calc(1.3em + (1.5 - 1.2) * ((100vw - 300px)/(1600 - 300)));
			}

			.font-size-big {
				font-size: calc(80px + (26 - 14) * ((100vw - 300px) / (1600 - 300))); line-height: calc(1.3em + (1.5 - 1.2) * ((100vw - 300px)/(1600 - 300)));
			}

			#upcoming-container {
				width: 72vw;
				min-width: 400px;
				border-radius: 20px;
				background-color: rgb(51,51,51);
				padding: 20px;
				margin-top: 10vh;
			}

			.comp-div {
                display: flex;
                justify-content: space-between;
                flex-direction: row;
                align-items: center;
				width: 350;
			}

			.tourn-name {
				font-weight: 400;
			}

			.tourn-date {
				font-weight: 100;
			}

		</style>

	</head>

	<body>

			<?php include("navbar.php") ?>
			
			<div class="mt-0 pb-3 animated fadeInUp fast white">
				<div class="container text-light" id="upcoming-container">
					<div class="panel text-center">
						<h1 class="font-size animated fadeIn slower" style="font-weight: bold; margin-top: 5vh;"><strong>2021 Tournaments</strong></h1>
						<br>
						<h2>
						<center>
							<div class="comp-div">
								<div class="tourn-name">
									BearSO<br>
									UT<br>
									SOLVI<br>
									Mira Loma<br>
									Aggie<br>
									MIT<br>
									SCC<br>
									Golden Gate<br>
									Regionals<br>
									States<br>
									Nationals<br>
								</div>
								<div class="tourn-date">
									Oct 10<br>
									Oct 24<br>
									Dec 19<br>
									Jan 9<br>
									Jan 16<br>
									Jan 23<br>
									Jan 30<br>
									Feb 13<br>
									March 6<br>
									April 3<br>
									May 22<br>
								</div>
							</div>
						</center>
						</h2>
					</div>
				</div>
			</div>

			<div class="mt-0 pb-3 animated fadeInUp fast white">
				<div class="container text-light mb-5" id="upcoming-container">
					<div class="panel text-center">
						<h1 class="font-size animated fadeIn slower" style="font-weight: bold; margin-top: 5vh;"><strong>2020 Tournaments</strong></h1>
						<br>
						<h2>
						<center>
							<div class="comp-div">
								<div class="tourn-name">
									Mira Loma<br>
									UC Davis<br>
									Golden Gate<br>
									Regionals<br>
									States<br>
									Nationals<br>
								</div>
								<div class="tourn-date">
									Jan 11<br>
									Jan 25<br>
									Feb 22<br>
									March 28<br>
									April 18<br>
									May 15<br>
								</div>
							</div>
						</center>
						</h2>
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
	<script src="https://script.sheetsu.com/"></script>


	<script type="text/javascript">

		$("#home").removeClass("active");
		$("#mentors").addClass("active");

	<?php include("footer.php") ?>