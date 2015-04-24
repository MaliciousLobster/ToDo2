<?php
	require_once("/../php/model/config.php"); //uses code from config.php
	require_once("/../php/controller/login-verify.php");
?>
<div class="fluid-container">
	<div class="row">
		<div class="col-xs-12">
			<nav>
				<ul>
				
					<?php
						if(!authenticateUser()){
							echo"<li><a href=" . "/../login.php" . ">Login</a></li>";
						}
					
						if(authenticateUser()){
							echo "<li><a href=" . "/../logout.php" . ">Logout</a><li>";
						}
						if(!authenticateUser()){
							echo "<li><a href=" . "/../register.php" . ">Register</a><li>";
						}
					?>
				</ul>	
			</nav>
		</div>
	</div>
</div>