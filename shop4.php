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
		$_SESSION['rocks']++;
	}
	else if ($_POST['submit'] == 'Buy Five')
	{
		$_SESSION['rocks'] = $_SESSION['rocks'] + 5;
	}
	else if ($_POST['submit'] == 'Remove One')
	{
		if ($_SESSION['rocks'] > 0)
		{
			$_SESSION['rocks']--;
		}
	}
	else if ($_POST['submit'] == 'Remove All')
	{
		$_SESSION['rocks'] = 0;
	}
}
else
{
	$_SESSION['rocks'] = 0;
}
?>
?>
</head>
<body>
<center>
<h2>Rocks</h2>.
<form method='POST'>
<input type='submit' name='submit' value='Buy One'>
<input type='submit' name='submit' value='Buy Five'>
<input type='submit' name='submit' value='Remove One'>
<input type='submit' name='submit' value='Remove All'>
</form>

<p> You want <?php echo $_SESSION['rocks'] ?> rocks...for some reason (Not Judging or Anything)</p>
</center>
<?php footer(); ?>
</body>
</html>
