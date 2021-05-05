<html>

<head>
<title>Cameron's Login Page</title>
<?php
require("library/phpfunctions.php");

function writtenBy(){
	echo "Tester";
}
function printUser(){
	echo getPost('first_name'). '' . getPost('last_name');
}

function getPost($name){
	if ( isset($_POST[$name]) ){
		return htmlspecialchars($_POST[$name]);
	}
	return "";
}

?>
</head>
<body>
<?php Aheader(); ?><br><br>
<form method='POST'>
UserName: <input type='text' name='155username' value='<?php echo getPost("155username");?>'><br>
Password: <input type='password' name='155password' value='<?php echo getPost("155password");?>'><br>
<input type='submit' name='submit' value='Log In'>
</form>
<p>Hint: The username is 'test' and  the password is  '4321' </p>

<?php
if (isset($_POST["submit"]))
{
	if ($_POST["155username"] == "test" and $_POST["155password"] == "4321")
	{
		echo "Thank you <?php writtenBy(); ?> for signing into my page!";
		header("Location: welcome.php");
	}
	else
	{
		echo "Either the username and/or Password is Incorrect";
	}
}
?>
<br>
<br>
<?php footer(); ?>
</body>
</html>
