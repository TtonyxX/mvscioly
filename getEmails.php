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
			<h3>Meetings every week <strong>Friday</strong> and <strong>Saturday</strong> 6:30 to 10:00 in Room 617
			<br/>Lunch meetings on Tuesday<br/>
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
			<h3><a target="_blank" href="https://scioly.org/wiki/index.php/Mountain_View_High_School_(California)">Wikipedia</a></h3>
			<h5 class="grey-text">The public wikipedia page for MVHS Scioly</h5>
			<h3><a target="_blank" href="https://store.soinc.org/us/page/Manuals">Rules</a></h3>
			<h5 class="grey-text">The rules for the 2018-2019 season</h5>
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
						  <center><h3>Alex<br>Anton<br>Ash<br>Ben<br>Brandon<br>Cassie<br>Coral<br>Karina<br>
						  </h3></center>
						</div>
						<div class="col">
						  <center><h3>Luke<br>Nicole<br>Nitin<br>Noelle<br>Tejas<br>Tony<br>Vincent</h3></center>
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
						  <center><h3>Arie<br>Catrina<br>Daniel<br>Elissa<br>Emma<br>Ernest<br>Ethan<br>John
						  </h3></center>
						</div>
						<div class="col">
						  <center><h3>Kavi<br>Matthew<br>Olivia<br>Ryan<br>Saahil<br>Sarah<br>Versha</h3></center>
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
			<span class="grey-text">Presidents:</span> Nitin Kumar & Nicole Xin<br>
			<span class="grey-text">Vice President:</span> Noelle Crawford<br>
			<span class="grey-text">Secretary:</span> Cassie Lee<br>
			<span class="grey-text">Treasurer:</span> Kavi Gollamudi<br>
			<span class="grey-text">Public Relations:</span> Tony Xin<br>
			<span class="grey-text">Outreach:</span> Arie Rich<br>
			</h3>
		</div>
	</div>
</div>';

	$secret = '<div class="mt-0 pb-3 animated fadeInUp fast white">
	<div class="container text-light" id="contact-container">
		<div class="panel text-center">
			<h1 class="font-size animated fadeIn" style="font-weight: bold; margin-top: 5vh;"><strong>Resources</strong></h1>
			<h3><a target="_blank" href="https://mountainviewscienceolympiad2019.shutterfly.com">Shutterfly</a></h3>
			<h5 class="grey-text">Where we store all our pictures</h5>
			<h3><a target="_blank" href="https://mvscioly.slack.com/">Slack</a></h3>
			<h5 class="grey-text">Our method of communication</h5>
			<h3><a target="_blank" href="https://scioly.org/wiki/index.php/Mountain_View_High_School_(California)">Wikipedia</a></h3>
			<h5 class="grey-text">The public wikipedia page for MVHS Scioly</h5>
			<h3><a target="_blank" href="https://store.soinc.org/us/page/Manuals">Rules</a></h3>
			<h5 class="grey-text">The rules for the 2018-2019 season</h5>
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
						  <center><h3>Alex<br>Anton<br>Ash<br>Ben<br>Brandon<br>Cassie<br>Coral<br>Karina<br>
						  </h3></center>
						</div>
						<div class="col">
						  <center><h3>Luke<br>Nicole<br>Nitin<br>Noelle<br>Tejas<br>Tony<br>Vincent</h3></center>
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
						  <center><h3>Arie<br>Catrina<br>Daniel<br>Elissa<br>Emma<br>Ernest<br>Ethan<br>John
						  </h3></center>
						</div>
						<div class="col">
						  <center><h3>Kavi<br>Matthew<br>Olivia<br>Ryan<br>Saahil<br>Sarah<br>Versha</h3></center>
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
			<span class="grey-text">Presidents:</span> Nitin Kumar & Nicole Xin<br>
			<span class="grey-text">Vice President:</span> Noelle Crawford<br>
			<span class="grey-text">Secretary:</span> Cassie Lee<br>
			<span class="grey-text">Treasurer:</span> Kavi Gollamudi<br>
			<span class="grey-text">Public Relations:</span> Tony Xin<br>
			<span class="grey-text">Outreach:</span> Arie Rich<br>
			</h3>
		</div>
	</div>
</div>';

?>