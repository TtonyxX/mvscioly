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
			font-size: calc(60px + (26 - 14) * ((100vw - 300px) / (1600 - 300)));
			line-height: calc(1.3em + (1.5 - 1.2) * ((100vw - 300px)/(1600 - 300)));
		}

		.font-size-big {
			font-size: calc(80px + (26 - 14) * ((100vw - 300px) / (1600 - 300)));
			line-height: calc(1.3em + (1.5 - 1.2) * ((100vw - 300px)/(1600 - 300)));
		}

		#achievements-container {
			width: 70vw;
			min-width: 400px;
			border-radius: 20px;
			background-color: rgb(51, 51, 51);
			padding: 20px;
			margin-top: 10vh;
			margin-bottom: 10vh;
		}
	</style>

	</style>
</head>

<body>

	<?php include("navbar.php") ?>

	<div class="mt-0 pb-3 odd animated tada fast white">
		<div class="container text-light" id="achievements-container">
			<div class="panel text-center" id="achievements-display">
				<h1 class="font-size animated fadeIn slower" style="font-weight: bold; margin-top: 5vh;">
					<strong>Achievements</strong>
				</h1>
				<span class="wow fadeInUp">
				<h3>2019 Season</h3>
				2019 NorCal State Championship - 2nd <br>
				
				2019 Santa Clara Regional Tournament - 1st <br>
				
				2019 Ukiah Invitational (Tracy, CA) - 1st <br>
				
				2019 Golden Gate Invitational - 1st <br>
				
				2019 Mira Loma Invitational - 2nd <br><br>
				</span>
				<span class="wow fadeInUp">
				<h3>2018 Season</h3>
				2018 NorCal State Championship - 2nd <br>
				
				2018 Santa Clara Regional Tournament - 1st <br>
				
				2018 Golden Gate Invitational - 3rd <br>
				
				2018 Tracy Invitational (Tracy, CA) - 1st <br>
				
				2018 Mira Loma Invitational - 2nd <br><br>
				</span>
				<span class="wow fadeInUp">
				<h3>2017 Season</h3>
				2017 NorCal State Championship - 2nd <br>
				
				2017 Santa Clara Regional Tournament (San Jose, CA) - 2nd <br>
				
				2017 Golden Gate Invitational (UC Berkeley, CA) - 3rd <br>
				
				2017 Troy Invitational - 2nd <br>
				
				2017 Mira Loma Invitational - 2nd <br><br>
				</span>
				<span class="wow fadeInUp">
				<h3>2016 Season</h3>
				2016 NorCal State Championship - 3rd <br>
				
				2016 Santa Clara County Regional Tournament (San Jose, CA) - 2nd <br>
				
				2016 Troy Invitational (Fullerton, CA) - 4th <br>
				
				2016 Mira Loma Invitational (Sacramento, CA) - 3rd <br><br>
				</span>
				<span class="wow fadeInUp">
				<h3>2015 Season</h3>
				2015 NorCal State Championship - 7th <br>
				
				2015 Santa Clara County Regional Tournament - 4th <br>
				
				2015 Troy Invitational (Fullerton, CA) - 4th <br>
				
				2015 Mira Loma Invitational (Sacramento, CA) - 5th <br><br>
				</span>
				<span class="wow fadeInUp">
				<h3>2014 Season</h3>
				2014 Bay Area Regional Tournament - 7th <br>
				
				2014 Mira Loma Invitational (Sacramento, CA) - 16th <br><br>
				</span>
				<span class="wow fadeInUp">
				<h3>2013 Season</h3>
				
				2013 Bay Area Regional Tournament - last or second to last
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
		$("#achievements").addClass("active");

		html = $("#achievements-display").html();
		split = html.split(" ");

		for (let i = 0; i < split.length; i++) {
			if (split[i] === "1st") {
				console.log("first");
				newString = '<span class="yellow-text">' + split[i] + '</span>';
				split[i] = newString;
			} else if (split[i] === "2nd") {
				newString = '<span class="grey-text">' + split[i] + '</span>';
				split[i] = newString;
			} else if (split[i] === "3rd") {
				newString = '<span class="brown-text">' + split[i] + '</span>';
				split[i] = newString;
			}
		}

		newHtml = "";
		for (let i = 0; i < split.length; i++) {
			newHtml += split[i] + " ";
		}

		$("#achievements-display").html(newHtml);
		
		<?php include("footer.php") ?>