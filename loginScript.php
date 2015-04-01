<?php
include_once("adb.php");

class loginScript extends adb {

    function check($username, $password) {
        $query = "select user_name, password from t_personnel where user_name='$username'and password='$password'";

        $result = $this->query($query);
        $row = mysql_fetch_assoc($this->result);

        $correct_u = $row['user_name'];
        $correct_p = $row['password'];

        if ($username == $correct_u && $password == $correct_p) {
            header('Location: index.php');

        }

        else {
            echo "Incorrect username or password.";
        }
    }

}

?>
