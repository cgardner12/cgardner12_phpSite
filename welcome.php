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
?>
</head>
<body>
<center>
<h1>Welcome <?php echo $_SESSION['user']; ?>, to the Stuff Store.</h1>
<h3> Where <span style="color:red">Stuff</span> And/Or <span style="color:blue">Things</span> Are Bought.</h3>
</center>
<?php footer(); ?>
</body>
</html>
