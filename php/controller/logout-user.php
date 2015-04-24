<?php
	require_once("/../model/config.php");//takes code from config.php

	function Logout(){
		unset($_SESSION["authenticated"]); //clears the variable of values. in this case logs out the user

		session_destroy(); //ends the session
		header("Location: " . "/../../index.php"); //directs the user back to index.php
	}

	Logout();