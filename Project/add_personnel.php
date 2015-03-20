<html>
<head>
	<title>Add Personnel</title>
	<link rel="stylesheet" href="css/style.css">
</script>
</head>
<body>
	

<form method="GET" action="add_personnel.php">
	First Name <input type="text" name ="fn">  </br>
	Last Name <input type="text" name ="ln"></br>
	Username <input type="text" name ="un"></br>
	Password <input type="text" name ="pass"></br>
	Position <input type="text" name ="pos" ></br>
	Contact Details <input type="text" name ="cd">
	
	
	</br>
	<input type="submit" value="save">

</form>

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