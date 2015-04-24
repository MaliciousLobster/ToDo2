<?php
	require_once("/../php/model/config.php");
	require_once("/../php/scontroller/login-verify.php"); //takes code from login-verify.php

	if(!authenticateUser()) { //if the user is not logged in it kills the program and redirects the user back to index.php
		header("Location: " . "/../index.php");
		die();
	}
?>
<div id="post-form" class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1>Create Blog Post</h1>
		</div>
	</div>
	<form method="post" action="<?php echo "/../php/controller/create-post.php"; ?>"> <!-- links post.php to form.php -->
		<div class="row">	
			<div class="col-xs-12">
				<label for="title">Title: </label> <!-- inputs text for 'Title' in the table -->
				<br>
				<input class="title-box" type="text" name="title"/> <!-- makes the input a text type -->
			</div>
		</div>
		<div class="row">	
			<div class="col-xs-12">
				<label for "post">Post: </label> <!-- inputs text for 'Post' in the table -->
				<br>
				<textarea class="desc-box" name="post"></textarea> <!-- creates a text area -->
			</div>
		</div>
		<div class="row">	
			<div class="col-xs-12">
				<button type="submit" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off"> Submit </button> <!-- submits the information on the page -->
			</div>
		</div>	
	</form>
</div>