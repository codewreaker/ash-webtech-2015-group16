<?php

// Option 1 add_task
// Option 2 delete_task
// Option 3 edit_task
// Option 4 add_report
// Option 5 delete_report
// Option 6 edit_report
$option = $_REQUEST['opt'];

switch($option){
    case 1:
        include_once("t_task.php");
        $obj = new t_task();
        $task_name = $_POST['tn'];
        $description = $_POST['desc'];
        $admin = $_POST['admin'];
        $personnel=$_POST['tp'];
        $due_date = $_POST['td'];
    if(!$obj->add_task($task_name,$description,$admin,$personnel,$due_date)){
        echo '{"result":0,"message":"Failed"}';
    }
    else{
        echo '{"result":1,"message":"Successfully Added Task"}';
}
        break;
    case 2:
         include_once("t_task.php");
         $obj = new t_task();
         $task_id = $_POST['tid'];
         if(!$obj->delete_task($task_id)){
            echo '{"result":0,"message":"Failed To Delete"}';
         }
         else{
            echo '{"result":1,"message":"Successfully Deleted Task"}';
         }
        break;
    case 3:
        include_once("");
        $obj = new t_task();
        break;
    case 4:
        include_once("t_report.php");
        $obj = new t_report();
        $report_id = $_POST['rid'];
        $limitations = $_POST['lim'];
        $errors = $_POST['err'];
        $status = $_POST['st'];
        if(!$obj->add_report($report_id, $limitations,$errors,$status)){
            echo '{"result":0,"message":"Failed to Add Report"}';
        }else{
            echo '{"result":1,"message":"Your Report has been added"}';
        }
        break;
    case 5:
        include_once("t_report.php");
        $obj = new t_task();
        break;
    case 6:
        include_once("t_report.php");
        $obj = new t_task();
        break;
    default:
}

?>
