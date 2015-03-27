<?php

include_once("adb.php");
class t_task extends adb{
	function task(){

	}
	function add_task($task_name, $description, $task_admin, $task_personnel, $due_date){
			$str_query="insert into t_task set
						task_name='$task_name',
						description='$description',
						task_admin= $task_admin,
						task_personnel='$task_personnel',
						due_date='$due_date'";
			return $this->query($str_query);
	}
	function edit_task($task_id){
			$str_query="UPDATE t_task SET
						task_name='$task_name',
						description='$description',
						task_personnel='$task_personnel',
						due_date='$due_date' WHERE task_id= $task_id";
			return $this->query($str_query);
	}
	function delete_task($task_id){
			$str_query="delete from t_task
						WHERE task_id= $task_id";
			return $this->query($str_query);
	}
	function get_task($task_id){
			$str_query="select * from t_task where Task_ID =$task_id";
			if ($this->query($str_query)){
				return false;
            }
			else{
				return $this->fetch_assoc();
			}
	}
	/*
	function test_input($checkTest) {
			$checkTest = trim($checkTest);
			$checkTest = stripslashes($checkTest);
			$checkTest = htmlspecialchars($checkTest);
			return $checkTest;
}
*/

}
?>
