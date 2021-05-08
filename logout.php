<html>
<head>
<title>Redirector</title>
<?php
require("library/phpfunctions.php");
Aheader();
session_start();
unset($_SESSION['user']);
header("refresh:5;url=login.php");
?>
</head>
<body>
<h3><center>Good Bye!</center></h3>
<h3><center>You will be returned to the login page in 5 seconds</center></h3>
</body>
</html>
