<?php
	require_once("/../php/model/config.php");
?>
<div id="login-form" class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1>Login</h1>
		</div>	
	</div>
	<form method="post" action="<?php echo "/../php/controller/login-user.php"?>">
		<div class="row">
			<div id="login-username" class="col-xs-12">
				<label for="username">Username: </label> <!-- Label for people to input their username -->
				<input type="text" name="username" />
			</div>
		</div>
		<div class="row">	
			<div id="login-password" class="col-xs-12">
				<label for="password">Password: </label> <!-- Label for people to input their password -->
				<input type="password" name="password" />
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<button type="submit" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off"> Submit </button> <!-- submits the information on the page -->
			</div>
		</div>	
	</form>
</div>