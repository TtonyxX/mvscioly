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

		button {
			text-color: black;
		}

		html {
			scroll-behavior: smooth;
		}

		#about-container {
			width: 68vw;
			min-width: 400px;
			border-radius: 20px;
			background-color: black;
			padding: 20px;
			margin-top: 10vh;
			margin-bottom: 10vh;
			opacity: 0.8;
			padding: 30px 5vw;
		}

		.transition-gradient {
			background: rgb(254, 241, 26);
			background: linear-gradient(180deg, rgba(254, 241, 26, 1) 0%, rgba(255, 255, 255, 1) 100%);
		}

		#google-btn {
			position: absolute;
			top: 2vh;
			right: 1vw;
		}
	</style>
</head>

<body>

	<!--
			<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light 	yellow animated fadeInDown" style="z-index: 100; position: relative; text-color: black;">

			  <a class="navbar-brand" style="font-size: 3vw; font-weight: bold;" href="index.php">Mountain View HS SciOly</a>

			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse ml-3" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item active" id="about">
			        <a class="nav-link" href="index.php">About me<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item dropdown" id="portfolio">
			        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Portfolio
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#creations">Creations</a>
			          <a class="dropdown-item" href="#volunteering">Volunteering</a>
			          <a class="dropdown-item" href="#activities">Activities</a>
			          <a class="dropdown-item" href="#work-experience">Work Experience</a>
			        </div>
			      </li>
			      <li class="nav-item" id="contact">
			        <a class="nav-link" href="contact.php">Contact Me<span class="sr-only">(current)</span></a>
			      </li>
			    </ul>
			  </div>
			</nav>
			-->

	<div class="mt-0 odd slow yellow">
		<div class="container mt-3" style="padding-bottom: 10vh;">
			<div class="panel text-center mt-2">
				<div class="g-signin2 animated fadeInDown" id="google-btn" data-onsuccess="onSignIn"></div>
				<h1 class="font-size animated fadeIn" style="font-weight: bold; margin-top: 3vh;">
					<strong>Mountain View High School
						<br/>
						<span class="font-size-big">Science Olympiad</span>
					</strong>
				</h1>
				<h3 class="animated fadeInUp" style="font-size: calc(16px + (26 - 14) * ((100vw - 300px) / (1600 - 300))); line-height: calc(1.3em + (1.5 - 1.2) * ((100vw - 300px)/(1600 - 300)));">The MVHS Science Olympiad club educates and inspires students in all STEM disciplines through hands-on activities, learning,
					and competing.</h3>
				<!-- Add more -->
				<img class="animated fadeInUp mb-2" src="images/scioly.png" style="width: 30vw; min-width: 200px;" />
				<br/>
				<a id="about-link" href="#about">
					<button type="button" class="btn btn-yellow animated fadeInUp slow">
						<span class="text-dark">About</span>
					</button>
				</a>
				<button type="button" class="btn btn-yellow animated fadeInUp slow" onclick="location.href = 'gallery.php'">
					<span class="text-dark">Gallery</span>
				</button>
				<button type="button" class="btn btn-yellow animated fadeInUp slow" onclick="location.href = 'mentors.php'">
					<span class="text-dark">Mentors</span>
				</button>
				<button type="button" class="btn btn-yellow animated fadeInUp slow" onclick="location.href = 'alumni.php'">
					<span class="text-dark">Alumni</span>
				</button>
				<button type="button" class="btn btn-yellow animated fadeInUp slow" onclick="location.href = 'achievements.php'">
					<span class="text-dark">Achievements</span>
				</button>
				<button type="button" class="btn btn-yellow animated fadeInUp slow" onclick="location.href = 'contact.php'">
					<span id="contact-btn" class="text-dark">Contact</span>
				</button>
			</div>
		</div>
	</div>

	<!--<div class="transition-gradient" style="width: 100vw; height: 10vh;">
			</div>-->

	<div class="mt-0 pb-3 odd wow fadeIn white" id="about">
		<div class="container text-light" id="about-container">
			<div class="panel text-center">
				<h1 class="font-size wow fadeIn" style="font-weight: bold; margin-top: 2vh;">
					<strong>About</strong>
				</h1>
				<br>
				<p class="wow fadeInUp">
					<h2><strong>Who are we?</strong></h3>
					<h5>The
						<strong>MVHS Science Olympiad club</strong> educates and inspires students in all STEM (science, technology, engineering, and
						math) disciplines through hands-on activities and learning. The club includes team members that compete at the annual
						Science Olympiad competition, the National Ocean Sciences Bowl, and also provides learning opportunities to explore
						science further. During lunch the club meets to address administrative and management tasks, and at weekend workshop
						meetings we do lab activities, have subject expert lectures, and prepare for the upcoming competitions.</h5>
					<br/>
					<br/>
					<h2><strong>What is Science Olympiad?</strong></h3>
					<h5>
						Science Olympiad teams function much like an athletic team, requiring preparation, commitment, coaching, and practice throughout
						the year.
						<br/>
						<br/>Our team competes annually in the regional tournament, with plans to continue to qualify for the state tournament,
						and eventually, the national tournament. We also attend numerous invitationals as preparation.
						<br/>
						<br/>Each team is composed of up to 15 members. This year, the Santa Clara County Regional Science Olympiad tournament allows
						up to 2 teams per high school.
						<br/>
						<br/>The tournaments are similar to track meets consisting of a series of 23 team events covering anatomy, chemistry, earth
						science, engineering, genetics, geology, mechanical engineering, physics, and technology. By combining events from
						all disciplines, Science Olympiad encourages a wide cross-section of students to get involved. All subjects are based
						on national Common Core standards. There is also a balance between events with requiring knowledge of science concepts,
						process skills, and applications.
						<br/>
						<br/>Visit
						<a target="_blank" href="https://www.soinc.org/">www.soinc.org</a> to learn more</h5>
				</p>
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


	<?php include("footer.php") ?>