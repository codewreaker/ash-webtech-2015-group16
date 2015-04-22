<html>
<head>
	<title>Add Personnel</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<fieldset>
<legend>Add Personnel</legend>
<form method="GET" action="add_personnel.php">
	First Name <input type="text" name ="fn" style = 'margin-left:25px'> </br>
	Last Name <input type="text" name ="ln" style = 'margin-left:27px'></br>
	Username <input type="text" name ="un" style = 'margin-left:32px'></br>
	Password <input type="text" name ="pass" style = 'margin-left:32px'></br>
	Position <input type="text" name ="pos" style = 'margin-left:43px'></br>
	Contact Details <input type="text" name ="cd" style = 'margin-left:-1'></br>
	<input type="submit" value="save" style = 'margin-left:205px'>

</form>
</fieldset>
<?php
include("t_personnel.php");
if(isset($_REQUEST['fn'])){
	$f_name=$_REQUEST['fn'];
	$l_name=$_REQUEST['ln'];
	$username=$_REQUEST['un'];
	$password=$_REQUEST['pass'];
	$position=$_REQUEST['pos'];
	$contact=$_REQUEST['cd'];
	$obj = new t_personnel();
	if(!$obj->add_personnel($f_name,$l_name, $username, $password, $position, $contact)){
		echo "Error adding";
	}
	else{
		echo "Adding" . $f_name;
	}
}

?>
</body>
</html>