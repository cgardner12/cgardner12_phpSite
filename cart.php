<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Cameron Gardner
CSC-155-201F_2021SP -->
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
?>
</head>
<body>
This is the checkout page.
<table>
<tr>
<td>Socks</td><td><?php echo getSession('socks');?></td>
</tr>
<td>Mufflers</td><td><?php echo getSESSION('parts');?></td>
</tr>
<td>Candy</td><td><?php echo getSESSION('candy');?></td>
</tr>
<td>Rocks</td><td><?php echo getSESSION('rocks');?></td>
</tr>
</table>
<?php footer(); ?>
</body>
</html>
