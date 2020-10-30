new WOW().init();

		console.log("Created and maintained by Tony Xin (http://tonyxin.com)");

        var emails = `<?php echo $emails ?>`.split("\n");
		var profile;
		var accessed;
		var currEmail;

		if(getCookie("signedIn") == "yes") {
		    profile = JSON.parse(getCookie("profile"))
		    console.log(profile)
			$("#avatar-container").show();
			$("#selection").removeClass("mr-auto");
			$("#selection").addClass("ml-auto");
			$("#google-btn").hide();
			animate("#avatar", "fadeInRight");
			$("#avatar").attr("src", profile[Object.keys(profile)[4]]);
			currEmail = profile[Object.keys(profile)[5]]
			verifyIdentity();
		}
        
        function onSignIn(googleUser) {
			console.log("saving profile")

			$("#avatar-container").show();
			profile = googleUser.getBasicProfile();
			document.cookie = "profile=" + JSON.stringify(profile);
			currEmail = profile.getEmail()
    
			$("#avatar").attr("src", profile.getImageUrl());

			if(getCookie("signedIn") != "yes") {
				setTimeout(function () { 
					animateOut("#google-btn", "fadeOutUp"); 
					animate("#selection", "fadeOut", function() {
						$("#selection").removeClass("mr-auto");
						$("#selection").addClass("ml-auto");
						animate("#selection", "fadeIn");
					});
				}, 800);
			}
            
            verifyIdentity()
		
    			
			document.cookie = "signedIn=yes";

		}
		
		function verifyIdentity() {
			accessed = false;
			
			if(typeof Sheetsu != 'undefined') {
    			if(getCookie('emails')) {
    			    successFunc(JSON.parse(getCookie('emails')));
    			} else {
    			    Sheetsu.read(
                      "https://sheetsu.com/apis/v1.0su/7cd1b0b4160e",
                      {},
                      successFunc
                    );
    			}
    		} else {
    		    if(`<?php echo $emails ?>`.split("\n").includes(currEmail)) {
    		        <?php 
					$access = true;
					?>
					accessed = true;
					$("#contact-link").html("Secret");
					$("#empty").html(`<?php echo $secret ?>`);
					$("#contact-box").hide();
					$("#footer").removeClass("footer");
    		    }
    		    
    		    if(!accessed && currEmail.split("@")[1] == "mvla.net") {
    				$("#contact-link").html("Info");
    				$("#empty").html(`<?php echo $info ?>`);
    				$("#footer").removeClass("footer");
    			}
    		}   
		}
		
		function successFunc(data) {
		    document.cookie = "emails=" + JSON.stringify(data);
		    
		    for(let i=0; i<data.length; i++) {
				if(data[i]['Email'] == currEmail) {
					<?php 
					$access = true;
					?>
					accessed = true;
					$("#contact-link").html("Secret");
					$("#empty").html(`<?php echo $secret ?>`);
					$("#contact-box").hide();
					$("#footer").removeClass("footer");
					break;
				}
			}


			if(!accessed && currEmail.split("@")[1] == "mvla.net") {
				$("#contact-link").html("Info");
				$("#empty").html(`<?php echo $info ?>`);
				$("#footer").removeClass("footer");
			}

        }

		function animateOut(element, animationName) {
			animate(element, animationName, () => $(element).hide());
		}

		function animateIn(element, animationName) {
			$(element).show();
			animate(element, animationName);
		}

		function animate(element, animationName, callback) {
			const node = document.querySelector(element)
			node.classList.add('animated', animationName)

			function handleAnimationEnd() {
				node.classList.remove('animated', animationName)
				node.removeEventListener('animationend', handleAnimationEnd)

				if (typeof callback === 'function') callback()
			}

			node.addEventListener('animationend', handleAnimationEnd)
		}

		function getCookie(cname) {
			var name = cname + "=";
			var decodedCookie = decodeURIComponent(document.cookie);
			var ca = decodedCookie.split(';');
			for(var i = 0; i <ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') {
				c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
				}
			}
			return "";
		}
		
		function signOut() {
			var auth2 = gapi.auth2.getAuthInstance();
			auth2.signOut().then(function () {
			console.log('User signed out.');
			});
			document.cookie = "signedIn=no";
			document.cookie = "emails= ; expires = Thu, 01 Jan 1970 00:00:00 GMT";
            document.location.reload();
		}

	</script>
</body>

</html>