<?php
include_once("adb.php");

class login_class extends adb {

    function check($username, $password) {
        $query = "select user_name, password from t_personnel where user_name='$username'and password='$password'";

        if(!$this->query($query)){
            return false;
        }

    }

}

?>
