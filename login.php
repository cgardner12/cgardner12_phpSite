<html>

<head>
<title>Cameron's Login Page</title>
<?php
require("library/phpfunctions.php");

function printUser(){
	echo getPost('first_name'). '' . getPost('last_name');
}

function getPost($name){
	if ( isset($_POST[$name]) ){
		return htmlspecialchars($_POST[$name]);
	}
	return "";
}
Aheader();
echo "<br>";
session_start();

if (isset($_POST["submit"]))
{
	if ($_POST["155username"] == "test" and $_POST["155password"] == "4321")
	{
		$_SESSION["user"] = $_POST["155username"];
		echo "<center>";
		echo "Thank you for signing in!";
		echo "</center>";
		echo "<br>";
		header("refresh:2;url=welcome.php");
	}
	else
	{
		echo "Either the username and/or Password is Incorrect";
	}
}
?>
</head>
<body>
<center>
<form method='POST'>
UserName: <input type='text' name='155username' value='<?php echo getPost("155username");?>'><br>
Password: <input type='password' name='155password' value='<?php echo getPost("155password");?>'><br>
<input type='submit' name='submit' value='Log In'>
</form>
<p>Hint: The username is 'test' and  the password is  '4321' </p>
</center>
</body>
</html>
