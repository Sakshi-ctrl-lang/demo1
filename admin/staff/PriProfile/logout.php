<?php
	session_start();
	session_destroy();
	
	header("location: SLogin.php");
	echo"You have been Logged out <a href='index.php'>Click here to login</a>";
	?>