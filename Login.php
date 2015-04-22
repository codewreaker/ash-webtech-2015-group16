<html>

<head>
    <title>Login</title>
    <script src="assets/js/jquery-2.1.1.min.js"></script>
    <script src="assets/js/login.js"></script>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/form_style.css" />



</head>

<body>
    <div id="left">
        <img src="assets/img/doctor.png" alt="doctor" height="300px" width="200px">
        <div id="text_center">
            <h1>Task Manager</h1>
        </div>
        <div id="info">
            <p>Task Manager is a web application developed by Prophet Ageman, Makafui Amezah, Frances Wireko and Israel Olajo of Ashesi University. It is versatile and may be used in all sectors of the economy for managing tasks, and will be especially useful in project management supervision. It boasts a very interactive, user friendly interface.</p>
            <p>©2015</p>
        </div>
    </div>
    
   
    <div id="form_style">
        <form method="POST" action="login.php">
            <br>
            <div>
                <h3>Login</h3>
            </div>
            <div>Username:
                <input type="text" placeholder="eg. randy.kay" autofocus name="username" />
            </div>  
            <br>
            <div>Password:
                <input type="password" name="password">
            </div>
            <br>
            <div>
                <input type="submit" value="Login">
            </div>
            <br>
            <div>
                <input id="sign" type="button" value="Sign Up">
            </div>

        </form>
    </div>


    <div id="form_style2">
        <form method="POST" action="add_personnel.php">
            <div>
                <h3>Sign Up</h3>
            </div>
            First Name
            <input type="text" name="fn" autofocus>
            <br> Last Name
            <input type="text" name="ln">
            <br> Username
            <input type="text" name="un">
            <br> Password
            <input type="password" name="pass">
            <br> Position
            <input type="text" name="pos">
            <br> Contact Details
            <input type="text" name="cd">
            <br>
            <input type="button" id="back" value="Back    ">
            <br>
            <input type="submit" id="save" value="save">

        </form>
    </div>

    <div id="signup">
        <!--javascript-->

    </div>

    <?php include_once ("loginScript.php"); 
    if (isset($_POST[ 'username']) && isset($_POST[ 'password'])) { 
        $user=( isset($_POST[ 'username'])) ? $_POST[ 'username'] : "";
        $pass=( isset($_POST[ 'password'])) ? $_POST[ 'password'] : ""; 
        $obj=new loginScript(); 
        if (strlen($user) !=0 && strlen($pass) !=0 ){ 
            $obj->check($user, $pass); 
        } 
        else { echo "Please enter a username and password."; }
    }
    else{
        if (isset($_POST[ 'un']))
            { 
            $userS =( isset($_POST['un'])) ? $_POST[ 'un'] : "";
            $obj=new loginScript(); 
            
                                 if (strlen($userS) !=0)
                                     { 
                                         $obj->check2($userS); 
                                     }
        }
    }
                                     
    ?>

</body>

</html>