<?php
	//connects it to localhost, parsing in username and password to access the database "todo2"
	$mysqli = new mysqli("localhost", "root", "root", "todo2");

	//if the connection doesn't work, kill the connection and give a message
	if($mysqli->connect_error){
		die("connect error(" . $mysqli->connect_errno . ")"
			. $mysqli->connect_error);
	}
	else{
		
	}
	
	$mysqli->close();

?>