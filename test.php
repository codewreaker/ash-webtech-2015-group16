<?php
include_once("operations/t_report.php");
        $obj = new t_report();
        $report_id = $_POST['report_id'];
        if(!$obj->view_report($report_id)){
            echo '{"result":0,"message":"failed to fetch report"}';
        }else{
            $row=$obj->fetch();
            echo '{"result":1,"tasks":';
            echo json_encode($row);
	        echo '}';
        }
?>
