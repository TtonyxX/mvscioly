        
        
        new WOW().init();

		console.log("Created and maintained by Tony Xin");
        
		var emails = `<?php echo $emails ?>`.split("\n");

		if(getCookie("signedIn") == "yes") {
			$("#avatar-container").show();
			$("#selection").removeClass("mr-auto");
			$("#selection").addClass("ml-auto");
			$("#google-btn").hide();
			animate("#avatar", "fadeInRight");
		}
        
        function onSignIn(googleUser) {
			
			$("#avatar-container").show();
			var profile = googleUser.getBasicProfile();

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

			var accessed = false;

			for(let i=0; i<emails.length; i++) {
				if(emails[i] == profile.getEmail()) {
					<?php 
					$access = true;
					?>
					accessed = true;
					$("#contact-link").html("Secret");
					$("#empty").html(`<?php echo $secret ?>`);
					break;
				}
			}


			if(!accessed && profile.getEmail().split("@")[1] == "mvla.net") {
				$("#contact-link").html("Info");
				$("#empty").html(`<?php echo $info ?>`);
			}

			document.cookie = "signedIn=yes";
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
            document.location.reload();
		}

	</script>
</body>

</html>