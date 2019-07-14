<?php

	$link = mysqli_connect("localhost", "mvscioly_tony", "tony", "mvscioly_emails");
	$failed = true;

	if(mysqli_connect_error()) {
		die("Database Connection Error");
	}

?>