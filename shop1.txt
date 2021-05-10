<html>
<head>
<title>Redirector</title>
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
	if ($_POST['submit'] == 'Buy One')
	{
		$_SESSION['socks']++;
	}
	else if ($_POST['submit'] == 'Buy Five')
	{
		$_SESSION['socks'] = $_SESSION['socks'] + 5;
	}
	else if ($_POST['submit'] == 'Remove One')
	{
		if ($_SESSION['socks'] > 0)
		{
			$_SESSION['socks']--;
		}
	}
	else if ($_POST['submit'] == 'Remove All')
	{
		$_SESSION['socks'] = 0;
	}
}
else
{
	$_SESSION['socks'] = 0;
}
?>
</head>
<body>
<center>
<h2>Socks</h2>.
<form method='POST'>
<input type='submit' name='submit' value='Buy One'>
<input type='submit' name='submit' value='Buy Five'>
<input type='submit' name='submit' value='Remove One'>
<input type='submit' name='submit' value='Remove All'>
</form>

<p> You have <?php echo $_SESSION['socks'] ?> pairs of socks in your basket. </p>
</center>
<?php footer(); ?>
</body>
</html>
