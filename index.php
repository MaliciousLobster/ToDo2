<!DOCTYPE html>
<html>
<head>
	<title>To-Do 2</title>
	<li rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="task-list">
			<ul>
				<?php require("includes/connect.php"); ?>
			</ul>
		</div>
		<form class="add-new-task" autocomplete="off">
			<input type="text" name="new-task" placeholder="Add new item..."/>
		</form>
</body>
</html>