<?php

	include("connection.php");
	$query = "SELECT email FROM `emails` WHERE id = '0' LIMIT 1";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_array($result);
	$emails = $row["email"];

	$query = "SELECT email FROM `emails` WHERE id = '1' LIMIT 1";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_array($result);
	$pass = $row["email"];

	$info = '<div class="mt-0 pb-3 animated fadeInUp fast white">
	<div class="container text-light" id="contact-container">
		<div class="panel text-center">
			<h1 class="font-size animated fadeIn" style="font-weight: bold; margin-top: 5vh;"><strong>Info</strong></h1>
			<h3>The Orientation is on August 30th from 6:30 to 8:00 in room 617
			<br/>
			<br/>There are <a target="_blank" href="https://www.soinc.org/events/2019-division-c-events">23 events</a> in Science Olympiad; in each event <br/>two or three people compete togther in. The placings of these events<br/>
			are added together to determine the team\'s final score.
			<br/><br/>
			Rules for each event can be found <a target="_blank" href="https://store.soinc.org/us/page/Manuals">here</a></h3>
		</div>
	</div>
</div>

<div class="mt-0 pb-3 animated fadeInUp fast white">
	<div class="container text-light" id="contact-container">
		<div class="panel text-center">
			<h1 class="font-size animated fadeIn" style="font-weight: bold; margin-top: 5vh;"><strong>Resources</strong></h1>
			<h3><a target="_blank" href="https://www.youtube.com/channel/UCg_5cZdeJvON06xnqcHlvHw?view_as=subscriber">YouTube</a></h3>
			<h5 class="grey-text">Visit our YouTube channel!</h5>
			<h3><a target="_blank" href="https://scioly.org/wiki/index.php/Mountain_View_High_School_(California)">Wikipedia</a></h3>
			<h5 class="grey-text">The public wikipedia page for MVHS Scioly</h5>
			<h3><a target="_blank" href="https://store.soinc.org/us/page/Manuals">Rules</a></h3>
			<h5 class="grey-text">The rules for this season</h5>
			<h3><a target="_blank" href="https://www.soinc.org/">Soinc.org</a></h3>
			<h5 class="grey-text">Official Science Olympiad website</h5>
			<h3><a target="_blank" href="https://scioly.org/">Scioly.org</a></h3>
			<h5 class="grey-text">Student-run Science Olympiad page</h5>
			<h3><a target="_blank" href="https://ttonyxx.github.io/codeBustersPractice/">Code Busters</a></h3>
			<h5 class="grey-text">Code Busters practice</h5>
			<h3><a target="_blank" href="https://www.instagram.com/mvhs_scioly/">Instagram</a></h3>
			<h5 class="grey-text">The MVHS Scioly Instagram page</h5>
		</div>
	</div>
</div>


<div class="mt-0 pb-3 wow fadeInUp white mb-3">
	<div class="container text-light" id="contact-container">
		<div class="panel text-center">
			<h1 class="font-size animated fadeIn slower" style="font-weight: bold; margin-top: 5vh;"><strong>2019 Roster</strong></h1>
			<h1 class="text-dark">Black Team</h1>
			<h4 class="grey-text">(Competitive Team)</h4>
			<p>
				<div class="container" style="width: 40vw; min-width: 300px;">

					<div class="mr-3 ml-3 row justify-content-md-center">
						<div class="col">
						<center><h3>
						Ash<br>
						Ben<br>
						Brian<br>
						Cassie<br>
						Ethan<br>
						Karina<br>
						Kavi<br>
						Matthew<br>
						</h3></center>
						</div>
						<div class="col">
						<center><h3>
						Nicole<br>
						Nitin<br>
						Noelle<br>
						Olivia<br>
						Saahil<br>
						<a style="color: white; text-decoration: none; font-weight: 300;" href="http://tonyxin.com">Tony</a><br>
						Yana<br>
						</h3></center>
						</div>
					</div>

				</div>

			</p>
			<br><br>
			<h1 class="yellow-text">Gold Team</h1>
			<h4 class="grey-text">(Team In Training)</h4>
			<p>
				<div class="container" style="width: 40vw; min-width: 300px;">

					<div class="mr-3 ml-3 row justify-content-md-center">
						<div class="col">
						<center><h3>
						Ahana<br>
						Aidan<br>
						Andrew<br>
						AneBritt<br>
						Ariana<br>
						Arnav<br>
						Dav<br>
						Elissa<br>
						</h3></center>
						</div>
						<div class="col">
						<center><h3>
						Eric<br>
						Joey<br>
						Lillian<br>
						Noah<br>
						Sriya<br>
						Suhrith<br>
						Versha<br>
						</h3></center>
						</div>
					</div>

				</div>

			</p>
		</div>
	</div>
</div>

<div class="mt-0 pb-3 wow fadeInUp white">
	<div class="container text-light" id="contact-container">
		<div class="panel text-center">
			<h1 class="font-size animated fadeIn" style="font-weight: bold; margin-top: 5vh;"><strong>Leadership Board</strong></h1>
			<h3>
			<span class="grey-text">Presidents:</span> Tony Xin & Cassie Lee<br>
			<span class="grey-text">Vice President:</span> Kavi Gollamudi<br>
			<span class="grey-text">Secretary:</span> Brian Ye<br>
			<span class="grey-text">Treasurer:</span> AneBritt Borchert<br>
			<span class="grey-text">Public Relations/Outreach:</span> Yana Kim<br>
			</h3>
		</div>
	</div>
</div>
<!--
<div class="mt-0 pb-3 odd animated fadeInUp fast white">
				<div class="container text-light" id="contact-container">
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
			</div>-->';

	$secret = '
<div class="mt-0 pb-3 animated fadeInUp fast white">
	<div class="container text-light" id="contact-container">
		<div class="panel text-center">
			<h1 class="font-size animated fadeIn" style="font-weight: bold; margin-top: 5vh;"><strong>Calendar</strong></h1>
			<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23333333&amp;ctz=America%2FLos_Angeles&amp;src=ZmJucTBrMXZiaGk2Y2UwZmgwZm5xYTZsYzBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23D81B60&amp;showPrint=0&amp;showNav=1&amp;showTitle=0&amp;showTz=0&amp;showCalendars=1&amp;showTabs=1" style="border-width:0" width="80%" height="600" frameborder="0" scrolling="no" style="min-width: 400px;"></iframe>		</div>
		</div>
	</div>
</div>
	
<div class="mt-0 pb-3 animated fadeInUp fast white">
	<div class="container text-light" id="contact-container">
		<div class="panel text-center">
			<h1 class="font-size animated fadeIn" style="font-weight: bold; margin-top: 5vh;"><strong>Resources</strong></h1>
			<h3><a target="_blank" href="https://www.youtube.com/channel/UCg_5cZdeJvON06xnqcHlvHw?view_as=subscriber">YouTube</a></h3>
			<h5 class="grey-text">Visit our YouTube channel!</h5>
			<h3><a target="_blank" href="https://mountainviewscienceolympiad2020.shutterfly.com">Shutterfly</a></h3>
			<h5 class="grey-text">Where we store all our pictures</h5>
			<h3><a target="_blank" href="https://mvscioly.slack.com/">Slack</a></h3>
			<h5 class="grey-text">Our method of communication</h5>
			<h3><a target="_blank" href="https://scioly.org/wiki/index.php/Mountain_View_High_School_(California)">Wikipedia</a></h3>
			<h5 class="grey-text">The public wikipedia page for MVHS Scioly</h5>
			<h3><a target="_blank" href="https://store.soinc.org/us/page/Manuals">Rules</a></h3>
			<h5 class="grey-text">The rules for this season</h5>
			<h3><a target="_blank" href="https://ttonyxx.github.io/codeBustersPractice/">Code Busters</a></h3>
			<h5 class="grey-text">Code Busters practice</h5>
			<h3><a target="_blank" href="https://www.instagram.com/mvhs_scioly/">Instagram</a></h3>
			<h5 class="grey-text">The MVHS Scioly Instagram page</h5>
			<h3><a target="_blank" href="https://docs.google.com/spreadsheets/d/1IIYIxsoFE3KuChD0gKpcrajvD1r1AKEvBJsIqKB3hf8/edit#gid=0">Textbook Index</a></h3>
			<h5 class="grey-text">Index of physical textbooks owned by MVHS Scioly</h5>
			<h3><a target="_blank" href="https://www.soinc.org/">Soinc.org</a></h3>
			<h5 class="grey-text">Official Science Olympiad website</h5>
			<h3><a target="_blank" href="https://scioly.org/">Scioly.org</a></h3>
			<h5 class="grey-text">Student-run Science Olympiad page</h5>
			
		</div>
	</div>
</div>

<div class="mt-0 pb-3 wow fadeInUp white mb-3">
	<div class="container text-light" id="contact-container">
		<div class="panel text-center">
			<h1 class="font-size animated fadeIn slower" style="font-weight: bold; margin-top: 5vh;"><strong>2019 Roster</strong></h1>
			<h1 class="text-dark">Black Team</h1>
			<h4 class="grey-text">(Competitive Team)</h4>
			<p>
				<div class="container" style="width: 40vw; min-width: 300px;">

					<div class="mr-3 ml-3 row justify-content-md-center">
						<div class="col">
						<center><h3>
						Ash<br>
						Ben<br>
						Brian<br>
						Cassie<br>
						Ethan<br>
						Karina<br>
						Kavi<br>
						Matthew<br>
						</h3></center>
						</div>
						<div class="col">
						<center><h3>
						Nicole<br>
						Nitin<br>
						Noelle<br>
						Olivia<br>
						Saahil<br>
						<a style="color: white; text-decoration: none; font-weight: 300;" href="http://tonyxin.com">Tony</a><br>
						Yana<br>
						</h3></center>
						</div>
					</div>

				</div>

			</p>
			<br><br>
			<h1 class="yellow-text">Gold Team</h1>
			<h4 class="grey-text">(Team In Training)</h4>
			<p>
				<div class="container" style="width: 40vw; min-width: 300px;">

					<div class="mr-3 ml-3 row justify-content-md-center">
						<div class="col">
						<center><h3>
						Ahana<br>
						Aidan<br>
						Andrew<br>
						AneBritt<br>
						Ariana<br>
						Arnav<br>
						Dav<br>
						Elissa<br>
						</h3></center>
						</div>
						<div class="col">
						<center><h3>
						Eric<br>
						Joey<br>
						Lillian<br>
						Noah<br>
						Sriya<br>
						Suhrith<br>
						Versha<br>
						</h3></center>
						</div>
					</div>

				</div>

			</p>
		</div>
	</div>
</div>
<!--
<div class="mt-0 pb-3 odd animated fadeInUp fast white">
				<div class="container text-light" id="contact-container">
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
</div>-->

<div class="mt-0 pb-3 wow fadeInUp white">
	<div class="container text-light" id="contact-container">
		<div class="panel text-center">
			<h1 class="font-size animated fadeIn" style="font-weight: bold; margin-top: 5vh;"><strong>Leadership Board</strong></h1>
			<h3>
			<span class="grey-text">Presidents:</span> Tony Xin & Cassie Lee<br>
			<span class="grey-text">Vice President:</span> Kavi Gollamudi<br>
			<span class="grey-text">Secretary:</span> Brian Ye<br>
			<span class="grey-text">Treasurer:</span> AneBritt Borchert<br>
			<span class="grey-text">Public Relations/Outreach:</span> Yana Kim<br>
			</h3>
		</div>
	</div>
</div>
';

?>