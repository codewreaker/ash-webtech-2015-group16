<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />



</head>

<body>
    <div id="left">
        <img src="assets/images/doctor.png" alt="doctor" height="300px" width="200px">
        <h1>Task Manager</h1>
        <p>Task Manager is a web application developed by Prophet Ageman, Makafui Amezah, Frances Wireko and Israel Olajo of Ashesi University. It is versatile and may be used in all sectors of the economy for managing tasks, and will be especially useful in project management supervision. It boasts a very interactive, user friendly interface.</p>
        <div>©2015</div>
    </div>


    <div id="form_style">
        <div id="loginStatus" class="lstatus">Here</div>

        <form id="login_form">
            <br>
            <div>
                <h3>Login</h3>
            </div>
            <div>
                <label for="username">Username</label>
                <input type="text" placeholder="eg. randy.kay" autofocus id="username" />
            </div>
            <br>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" />
            </div>
            <br>
            <div>
                <input type="button" value="Login" id="login">
            </div>
            <br>
            <div>
                <input id="login_signup" type="button" value="Sign Up">
            </div>
        </form>
    </div>

    <div id="form_style2"  class="hide">
       <div id="loginStatus2" class="lstatus"></div>
        <form id="signup_form">
            <div>
                <a href="login.php"><i class="fa fa-arrow-left" style="color:#e74c3c; font-size:1.4em;"></i></a>
                <h3>Sign Up</h3>
            </div>
            <div>
                <label for="fn">First Name</label>
                <input type="text" id="fn">
            </div>
            <div>
                <label for="ln">Last Name</label>
                <input type="text" id="ln">
            </div>
            <div>
                <label for="">Username</label>
                <input type="text" id="un">
            </div>
            <div>
                <label for="pass">Password</label>
                <input type="text" id="pass">
            </div>
            <div>
               <label for="pos">Position</label>
                <select id="pos">
                    <option value="0">Snr Doctor</option>
                    <option value="1">Doctor</option>
                    <option value="2">Nurse</option>
                    <option value="3">Janitor</option>
                    <option value="4">Staff</option>
                </select>
            </div>
            <div>
               <label for="type">Type</label>
                <select id="ptype">
                    <option value="0">admin</option>
                    <option value="1">non-admin</option>
                </select>
            </div>
            <div>
            <label for="cd">Contact Details</label>
            <input type="text" id="cd">
            </div>
            <input type="button" id="sign_up" value="Sign Up">
        </form>
    </div>



    <div id="signup">
        <!--javascript-->
    </div>
    <script src="assets/js/jquery-2.1.1.min.js"></script>
    <script src="assets/js/loginScript.js"></script>
