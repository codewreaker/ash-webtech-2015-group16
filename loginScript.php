<?php include_once("adb.php"); class loginScript extends adb {
    function check($username, $password) { 
        $query="select user_name, password from t_personnel where user_name='$username'and password='$password'" ; 
                                          $result=$this->query($query); $row = mysql_fetch_assoc($this->result); 
                                          $correct_u = $row['user_name']; $correct_p = $row['password']; 
                                          if ($username == $correct_u && $password == $correct_p) 
                                          { header('Location: in.php'); } 
                                          else { echo"Incorrect username or password."; } 
    }

    function check2($username){
        $query="select user_name from t_personnel where user_name='$username'";
        $result=$this->query($query);
        $row = mysql_fetch_assoc($this->result);
        $correct_u = $row['user_name'];
        if ($username == $correct_u){
            echo "Selected username is already in use";
        }
         }
}
?>
