<?php
include_once("adb.php");
class t_report extends adb{
function t_report(){
}

	function add_report($report_id, $limitations,$errors,$progress_status){
		$str_query="insert into t_report set
		report_id = '$report_id',
		limitations='$limitations',
		errors='$errors',
		progress_status ='$progress_status'";
		return $this ->query($str_query);
	}

	function update_report($report_id,$limitations,$errors,$progress_status){
		$str_query="update t_report set
		limitations='$limitations',
		errors='$errors',
		progress_status ='$progress_status'
		where report_id=$report_id";
		return $this ->query($str_query);
	}

	function delete_report($report_id){
		$str_query="delete from t_report where report_id=$report_id";
		return $this ->query($str_query);
	}

	function view_report(){
		$str_query = "select * from t_report";
		if(!$this->query($str_query)){
			return false;
		}
		return $this ->fetch();
		}
		/*
		$query="select * from t_report";
		$i=0;
		while ($i < mysql_fetch_assoc($query)){
		  echo"Task Report.'";
	  }

        return $this-> query($query);
*/
}


?>
