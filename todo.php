<!DOCTYPE html>
<html>
<head>
	<title>To-Do 2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>

</head>
<body>
	<?php
	//require_once("/php/controller/login-verify.php"); //takes code from login-verify.php
	//require_once("/view/navigation.php"); //takes code from nagivation.php
	//require_once("/php/controller/create-db.php"); //takes all the code from create-db.php and puts it here
	?>
	<div class="task-list">
			<ul>
				<?php require("includes/connect.php"); 
				$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
				$query = "SELECT * FROM tasks ORDER BY date ASC, time ASC";
				if($result = $mysqli->query($query)){
					$numrows = $result->num_rows;
					if ($numrows>0) {
						while ($row = $result->fetch_assoc()) {
							$task_id = $row['id'];
							$task_name = $row['task'];

							echo '<li>
							<span>'.$task_name.'</span>
							<img id="'.$task_id.'" class= "delete-button" width= "10px" src ="images/close.svg"/>
							</li>';
						}
					}
				}
				?>
			</ul>
		</div>
		<form class="add-new-task" autocomplete="off">
			<input type="text" name="new-task" placeholder="Add new item..."/>
		</form>
</body>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
	add_task();

	function add_task(){
		$('.add-new-task').submit(function(){
			var new_task = $('add-new-task input[name=new-task]').val();

			if(new_task != ''){
				$.post('includes/add-task.php', {task: new_task}, function(data){
					$('add-new-task input[name=new-task]').val();
						$(data).appendTo('.task-list ul').hide().fadeIn();
				});
			}
			return false;
		});
	}

	$('.delete-button').click(function(){
		var current_element = $(this);
		var task_id = $(this).attr('id');

		$.post('includes/delete-task.php', {id: task_id}, function(){
			current_element.parent().fadeOut("fast", function(){
				$(this).remove();
			});
		});
	});
</script>
</html> 

