<?php
	require_once("/../model/config.php");

	$task = filter_input(INPUT_POST, "task", FILTER_SANITIZE_STRING);
	

	//takes in exp vars and storing them in the username of whoever is logged in
	$query = $SESSION["connection"]->query("UPDATE users SET "
		. "task = $task,  WHERE username = \"" . $_SESSION["name"]. "\"");

	if($query){
		echo"true";	
	}else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}