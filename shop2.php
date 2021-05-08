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
		$_SESSION['parts']++;
	}
	if ($_POST['submit'] == 'Buy Five')
	{
		$_SESSION['parts'] = $_SESSION['parts'] + 5;
	}
	else if ($_POST['submit'] == 'Remove One')
	{
		if ($_SESSION['parts'] > 0)
		{
			$_SESSION['parts']--;
		}
	}
	else if ($_POST['submit'] == 'Remove All')
	{
		$_SESSION['parts'] = 0;
	}
}
else
{
	$_SESSION['parts'] = 0;
}
?>
</head>
<body>
<center>
<h2>Mufflers</h2>.
<form method='POST'>
<input type='submit' name='submit' value='Buy One'>
<input type='submit' name='submit' value='Buy Five'>
<input type='submit' name='submit' value='Remove One'>
<input type='submit' name='submit' value='Remove All'>
</form>

<p> You have <?php echo $_SESSION['parts'] ?> Mufflers in your basket. </p>
</center>
<?php footer(); ?>
</body>
</html>
