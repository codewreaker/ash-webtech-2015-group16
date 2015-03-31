<?php

include_once("adb.php");
class t_task extends adb{
	function task(){

	}
	function add_task($task_name, $description,$task_personnel, $due_date){
			$str_query="insert into t_task set
						task_name='$task_name',
						description='$description',
						task_personnel='$task_personnel',
						due_date='$due_date';
                        ";
			return $this->query($str_query);
	}

  
	function edit_task($task_id,$task_name, $description,$task_personnel, $due_date){
			$str_query="UPDATE t_task SET
                        task_id=$task_id,
						task_name='$task_name',
						description='$description',
                    task_personnel=$task_personnel,
						due_date='$due_date',
                        report_id=$task_id WHERE `task_id`=$task_id";
			return $this->query($str_query);
	}
	function delete_task($task_id){
			$str_query="delete from t_task
						WHERE task_id= $task_id";
			return $this->query($str_query);
	}

    function get_task(){
        $str_query = "SELECT `task_id`, `task_name`, `description`,`task_personnel`, `due_date`, `report_id` FROM `t_task` ";
        if(!$this->query($str_query)){
            return false;
        }else{
            return true;
        }
    }


}
?>
