<html>
	<head>
		<title>Index</title>
		<link rel="stylesheet" href="assets/css/style.css">		
		<script>
		
		</script>
		<?php 		
		include_once("task.php");

		function addTask(){
			$obj = new task();
			if(isset($_REQUEST['add'])){
				$task_name = $_REQUEST['tn'];
				$desc = $_REQUEST['desc'];
 				$admin=$_REQUEST['ta'];
 				$personnel=$_REQUEST['tp'];
 				$date = $_REQUEST['td'];
 				$task_start = $_REQUEST['st'];
 				$task_end = $_REQUEST['et'];
 				if($obj->add_task($task_name,$desc,$admin,$personnel,$date,$task_start,$task_end)){
 					echo "SuccessFully Added";
 				}else{
 					mysql_error();
 					echo "Failed";
 				}				
				}
			}
		 ?>
		</head>
		<body>
 				
		
<!--form for adding task-->	
<div>
<form action="addtask.php" method="GET">
<div>Task Name	<input type="text" size="30" name="tn" placeholder="Task Name"> </div>
<div>Description</div>
<div>
	<textarea name="desc"	cols="30" rows="5" placeholder="Please input a Short Description of The Task"></textarea>
	</div>
<div><input type="text" size="30" name="ta" placeholder="Task Administrator"> </div>
<div><input type="text" size="30" name="tp" placeholder="Select Task Personnel"> </div>
<div><input type="date" size="14" name="td" placeholder="Select A Date"> </div>
<div><input type="time" size="14" name="st" placeholder="Select A Start Time"> </div>
<div><input type="time" size="14" name="et" placeholder="Select an End Time"> </div>
<div> <input type="submit" value="Add" name="add"> </div>
</form>

<?php 	addTask();  ?>
</div>
		
<!--form for editing task-->	

<div>
<form action="edittask.php" method="GET">
<div>Task Name	<input type="text" size="30" name="tn"> </div>
<div>Description</div>
<div>
	<textarea name="pd"	cols="30" rows="5"></textarea>
	</div>
<div>Task Administrator	:<input type="text" size="30" name="ta" placeholder="Admin Name"> </div>
<div><input type="text" size="30" name="tp" placeholder="Select Task Personnel"> </div>
<div><input type="date" size="14" name="price"> </div>
<div><input type="time" size="14" name="st" placeholder="Select A Start Time"> </div>
<div>End Time	:<input type="time" size="14" name="et" placeholder="Select an End Time"> </div>
<div> <input type="submit" value="Edit" name="edit"> </div>

</form>
</div>
