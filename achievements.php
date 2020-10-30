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
		
		#achievements-animate {
		    display: none;
		}
		
		.loader {
          border: 16px solid #f3f3f3;
          border-radius: 50%;
          border-top: 16px solid #000000;
          width: 120px;
          height: 120px;
          -webkit-animation: spin 1s linear infinite; /* Safari */
          animation: spin 1s linear infinite;
        }
        
        /* Safari */
        @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }
        
        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
	</style>

	</style>
</head>

<body>

	<?php include("navbar.php") ?>
	
	<center><div id="spinner"><div class="loader mt-5"></div><p>Loading data</p></div></center>
	
	<div class="mt-0 pb-3 odd white" id="achievements-animate">
		<div class="container text-light" id="achievements-container">
			<div class="panel text-center" id="achievements-display">
				<h1 class="font-size animated fadeIn slower" style="font-weight: bold; margin-top: 5vh;">
					<strong>Achievements</strong>
				</h1>
				<!---->
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
	<script async defer src="https://apis.google.com/js/api.js"
      onload="this.onload=function(){};handleClientLoad()"
      onreadystatechange="if (this.readyState === 'complete') this.onload()">
    </script>

	<script type="text/javascript">

		$("#home").removeClass("active");
		$("#achievements").addClass("active");
		
		var backup = `<span class="wow fadeInUp">
				<h2>2020 Season</h2>
				<h5>
				2020 Golden Gate Invitational - 1st <br>
				
				2020 Aggie Invitational - 1st <br>
				
				2020 Mira Loma Invitational - 2nd <br><br>
				</h5>
				</span>
				<span class="wow fadeInUp">
				<h2>2019 Season</h2>
				<h5>
				2019 NorCal State Championship - 2nd <br>
				
				2019 Santa Clara Regional Tournament - 1st <br>
				
				2019 Ukiah Invitational (Tracy, CA) - 1st <br>
				
				2019 Golden Gate Invitational - 1st <br>
				
				2019 Mira Loma Invitational - 2nd <br><br>
				</h5>
				</span>
				<span class="wow fadeInUp">
				<h2>2018 Season</h2>
				<h5>
				2018 NorCal State Championship - 2nd <br>
				
				2018 Santa Clara Regional Tournament - 1st <br>
				
				2018 Golden Gate Invitational - 3rd <br>
				
				2018 Tracy Invitational (Tracy, CA) - 1st <br>
				
				2018 Mira Loma Invitational - 2nd <br><br>
				</h5>
				</span>
				<span class="wow fadeInUp">
				<h2>2017 Season</h2>
				<h5>
				2017 NorCal State Championship - 2nd <br>
				
				2017 Santa Clara Regional Tournament (San Jose, CA) - 2nd <br>
				
				2017 Golden Gate Invitational (UC Berkeley, CA) - 3rd <br>
				
				2017 Troy Invitational - 2nd <br>
				
				2017 Mira Loma Invitational - 2nd <br><br>
				</h5>
				</span>
				<span class="wow fadeInUp">
				<h2>2016 Season</h2>
				<h5>
				2016 NorCal State Championship - 3rd <br>
				
				2016 Santa Clara County Regional Tournament (San Jose, CA) - 2nd <br>
				
				2016 Troy Invitational (Fullerton, CA) - 4th <br>
				
				2016 Mira Loma Invitational (Sacramento, CA) - 3rd <br><br>
				</h5>
				</span>
				<span class="wow fadeInUp">
				<h2>2015 Season</h2>
				<h5>
				2015 NorCal State Championship - 7th <br>
				
				2015 Santa Clara County Regional Tournament - 4th <br>
				
				2015 Troy Invitational (Fullerton, CA) - 4th <br>
				
				2015 Mira Loma Invitational (Sacramento, CA) - 5th <br><br>
				</h5>
				</span>
				<span class="wow fadeInUp">
				<h2>2014 Season</h2>
				<h5>
				2014 Bay Area Regional Tournament - 7th <br>
				
				2014 Mira Loma Invitational (Sacramento, CA) - 16th <br><br>
				</h5>
				</span>
				<span class="wow fadeInUp">
				<h2>2013 Season</h2>
				<h5>
				2013 Bay Area Regional Tournament - last or second to last
				</h5>
				</span>`
			
            if(localStorage['achievements'] && !shown) {
                showAchievements(JSON.parse(localStorage['achievements']))
                console.log("Backup Loaded");
            }
				
	    var achievementData = [];
				
		var CLIENT_ID = '747961758376-7a3luqn57tlc8o91j0k4npgfh6cp8tdh.apps.googleusercontent.com';
      var API_KEY = 'AIzaSyC3jN1mAibiZKIWs8LH_UlguNmOdAOh7XI';

      var DISCOVERY_DOCS = ["https://sheets.googleapis.com/$discovery/rest?version=v4"];

      var SCOPES = "https://www.googleapis.com/auth/spreadsheets.readonly";

      
      function handleClientLoad() {
        gapi.load('client:auth2', initClient);
      }

      function initClient() {
        gapi.client.init({
          apiKey: API_KEY,
          clientId: CLIENT_ID,
          discoveryDocs: DISCOVERY_DOCS,
          scope: SCOPES
        }).then(() => {
          listData();
        })
      }
      
      function listData() {
        gapi.client.sheets.spreadsheets.values.get({
          spreadsheetId: '14cddzs3ALxP0Md0eMhXXpq43yX7xG-hxlghERbjWo8Y',
          range: 'Achievements!A:E',
        }).then(function(response) {
          var range = response.result;
          var headers = [];
          if (range.values.length > 0) {
            for (i = 0; i < range.values.length; i++) {
              var row = range.values[i];
              if(i==0) {
                  headers = row;
              } else {
                  var achievement = {}
                  for(let j=0; j<headers.length; j++) {
                      achievement[headers[j]] = row[j]
                  }
                  achievementData.push(achievement);
              }
            }
          } 
          if(localStorage['achievements']) {
              if(localStorage['achievements'] == JSON.stringify(achievementData)) {
                  return;
              }
          }
          showAchievements(achievementData);
        }, function(response) {
        });
      }
				
	   /* if(typeof Sheetsu == "undefined") {
            showCode($("#achievements-display").html() + backup)
        } else {
    		Sheetsu.read(
              "https://sheetsu.com/apis/v1.0su/4af4005be6a4",
              {},
              showAchievements
            );
        }*/
        
        var shown = false
        
        function showAchievements(result) {
            localStorage['achievements'] = JSON.stringify(result)
            var shownYears = []
            var code = `
				<h1 class="font-size animated fadeIn slower" style="font-weight: bold; margin-top: 5vh;">
					<strong>Achievements</strong>
				</h1>`
            for(let i=0; i<result.length; i++) {
                if(!shownYears.includes(result[i]['Year'])) {
                    shownYears.push(result[i]['Year'])
                    if(i > 0) {
                        code += `<br></h5></span>`
                    }
                    code += `<span class="wow fadeInUp"><h2>` + result[i]['Year'] + ` Season</h2><h5>`
                } 
                code += `${result[i]['Year']} ${result[i]['Name']} - ${result[i]['Place']} `
                if(result[i]['Link'] != '') {
                    code += `<a target="_blank" href="${result[i]['Link']}">Results</a>`
                }
                code += `<br>`
            }
            showCode(code)
        }
        
        function showCode(code) {
            shown = true
            $("#achievements-display").html(code)
            placeColors()
            $("#spinner").hide();
            $("#achievements-animate").fadeIn()
        }
        
        function placeColors() {
            html = $("#achievements-display").html();
    		split = html.split(" ");
    
    		for (let i = 0; i < split.length; i++) {
    			if (split[i] === "1st") {
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
        }

        
		
		<?php include("footer.php") ?>