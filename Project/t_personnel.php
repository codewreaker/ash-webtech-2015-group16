<?php
//check that database table name corresponds
include_once("adb.php");
class t_personnel extends adb{
    
	function t_personnel(){
	}
	
	function add_personnel($f_name,$l_name, $username, $password, $position, $contact){         
	$str_query="insert into t_personnel set first_name='$f_name', last_name= '$l_name', user_name='$username', password='$password', position ='$position', contact = '$contact'";
	return $this->query($str_query);
	}
        
    function update_personnel($pid, $f_name,$l_name, $username, $password, $position, $contact){
	$str_query="update t_personnel set first_name='$f_name', last_name= '$l_name', user_name='$username', password='$password', position ='$position', contact = '$contact
	where pid= '$pid'";
	return $this->query($str_query);
	}
	
    function delete_personel($pid){
	$str_query ="delete from t_personnel where pid = '$pid'";
	return $this->query($str_query);
		} 
        
    function get_personnel($pid){
	$str_query="select * from t_personnel where pid = '$pid' ";
            if(!$this->query($str_query)){
               return false;
            }
            
	return $this->fetch();
        }
        
}
/*
$obj=new t_personnel();
$obj->add_personnel("kandie","dan", "xxxxxx", "kkk","chief",498030);

$obj->add_personnel("blad", "ltnt", 398430, "fire","king");
$obj->add_personnel("kofi", "supervisor", 11111, "friday","sharp");
$obj->update_personel(2, "fried-fish", "road-kill", 00000, "void", "deleted");
$obj->delete_personnel(3);
*/
?>