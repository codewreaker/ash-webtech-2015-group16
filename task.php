<?php

include_once("adb.php");
class task extends adb{
	function task(){
		
	}
	function add_task($task_name, $description, $task_admin, $task_personnel, $date, $start_time, $end_time){
			$str_query="INSERT INTO t_task SET task_name='$task_name', description='$description', task_admin=$task_admin, task_personnel=$task_personnel,date='$date',start_time='$start_time',end_time='$end_time'";
			$query = $this->query($str_query);
			 if($query){
			 	echo "Succesfull";
			 	return $query;
			 }else{
			 	echo "false query<br>";
			 	mysql_error(); 	

			 }


	}
	function edit_task($name){			
			$str_query="UPDATE t_task
						SET	task_name='$name',
						description='$description',
						task_admin='$task_admin',
						task_personnel='$task_personnel',
						date='$date',
						start_time='$start_time',
						end_time='$end_time',
						report_id='$report_id' WHERE task_id= $id";
			return $this->query($str_query);
	}
	function delete_task($id){			
			$str_query="delete from t_task
						WHERE task_id= $id";
			return $this->query($str_query);
	}
}



?>