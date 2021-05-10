<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Cameron Gardner
CSC-155-201F_2021SP -->
<html>
<head>
<title>Welcome to my webpage!</title>
<?php
require("library/phpfunctions.php");
Aheader();

session_start();

if (!isset($_SESSION['user']))
{
	header("Location: login.php");
}
if (isset($_POST['submit']))
{
	if (empty($_POST["name"])){
		$nameErr = "Name is required";
	}else{
		$name = test_input($_POST["name"]);
	}
	setcookie($name, $_POST['name'], time() + (86400 * 30));
}
if (!isset($_POST['name'])){
	$name = "type here...";
}else{
	$name = $_POST['name'];
}
?>

</head>
<body>
<center>
<br>
<form method='POST'>
<label for='name'> Enter Your First Name: </label><input type='text' id='name' name='name' placeholder='<?php echo $name; ?>'/>
<input type='submit' name='choice' value='Submit'/>
</form>
<h1>Welcome <?php echo $name; ?>, to the Stuff Store.</h1>
<h3> Where <span style="color:red">Stuff</span> And/Or <span style="color:blue">Things</span> Are Bought.</h3>
</center>
<?php footer(); ?>
</body>
</html>
