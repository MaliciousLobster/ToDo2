<?php
	require_once("/../model/config.php");	//creates connection to the server


	//runs a query to create a table for users, none of the values can be null
	$query = $_SESSION["connection"]->query("CREATE TABLE users (" //creates a table called post using the _SESSION variable connection to do a query
		. "id int(11) NOT NULL AUTO_INCREMENT, "                   //creates an ID for the user
		. "username varchar(30) NOT NULL, "						   //creatses a username for user
		. "password char(128) NOT NULL, "                          //creates a password for user
		. "salt char(128) NOT NULL, "							   //protects against malware
		. "task varchar(60), "
		. "PRIMARY KEY (id))");
	
