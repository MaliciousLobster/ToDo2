<?php
	require_once("/../php/model/config.php");

?>

<div id="register-form" class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1>Register</h1>
		</div>	
	</div>	
		<form method="post" action="<?php echo "/../php/controller/create-user.php"; ?>" > <!-- a place for a user to register -->
			<div calss="row">
				<div class="col-xs-12">
					<label for="email">Email: </label> <!-- Label for people to input email -->
					<input type="text" name="email" />
				</div>
			</div>
			<div class="row">	
				<div class="col-xs-12">
					<label for="username">Username: </label> <!-- Label for people to input their username -->
					<input type="text" name="username" />
				</div>
			</div>	
			<div class="row">
				<div class="col-xs-12">
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
</div>