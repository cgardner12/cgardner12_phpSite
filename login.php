<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Cameron Gardner
CSC-155-201F_2021SP -->
<html>

<head>
<title>Cameron's Login Page</title>
<?php
require("library/phpfunctions.php");
Aheader();
echo "<br>";

session_start();
$conn = getConn();

if (isset($_POST["submit"]))
{
	$row = lookupUsername($conn, getPost("155username"));
	if ($row == 0) 
    	{
    		echo "Invalid -->username and/or password";
    	}
    	else if ( password_verify($_POST["155password"], $row['encrypted_password'] ))
    	{
    		$_SESSION["user"] =  getPost("155username");
    		$_SESSION["group"] =  $row['usergroup'];
    		header("Location: welcome.php");
    	}
    	else 
    	{
    		echo "Invalid username and/or -->password";
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
<p><a href='newlogin.php'>Create New Login</a></p>
</center>
</body>
</html>
