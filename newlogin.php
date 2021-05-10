<html>
<head>
<title>New Login Page</title>
<?php

require("library/phpfunctions.php");
$conn = getConn();

$formerror = "&nbsp;";
lookupUsername($conn, "test");

if (isset ($_POST["submit"]))
{
    if ($_POST["submit"] == "Create Account")
    {
    	if (empty($_POST['username155']))
    	{
        	$formerror = 'USERNAME REQUIRED';
    	}
    	else if (empty($_POST['password155']))
    	{
        	$formerror = 'PASSWORD REQUIRED';
    	}
    	else if ( $_POST['password155'] != $_POST['password155confirm'])
    	{
        	$formerror = 'PASSWORDS DO NOT MATCH';
    	}
    	else if ( lookupUsername($conn, $_POST['username155']) != 0 )
    	{
        	$formerror = 'Username already exists';
    	}
    	else {
        	$stmt = $conn->prepare("INSERT INTO users (username, encrypted_password, usergroup, email) VALUES (?, ?, ?, ?)");
        	$stmt->bind_param("ssss", $username, $encrypted_password, $email, $usergroup);
                $username = getPost('username155');
        	$encrypted_password = password_hash($_POST['password155'], PASSWORD_DEFAULT);
        	$email = getPost('email155');
        	$usergroup = getPost('usergroup155');
        	$stmt->execute();
        	header("Location: login.php");
    	}
    }
    else
    {
    	header("Location: login.php");
    }
}
?>
</head>
<body>
<br>
<center>
<form method='POST'>
New Username<input type='text' name='username155' value='<?php echo getPost("username155");?>'><br>
New Password<input type='text' name='password155' value='<?php echo getPost("password155");?>'><br>
Confirm Password:<input type='password' name='password155confirm'  value='<?php echo getPost("password155confirm");?>'><br>
email<input type='text' name='email155' value='<?php echo getPost("email155");?>'><br>
group<select name='group155'><br>
<option>user</opton>
<option>admin</option>
</select>
<br>
<?php echo $formerror;?>
<input type='submit' name='submit' value='Create Account'>
<input type='submit' name='submit' value='Cancel'>
</form>
</center>
<?php footer() ?>
</body>
</html>
