<?php
///library functions ....version 00

function Aheader()
{
	echo "<!-- I honor Parkland's core values by affirming that I have followed all academic integrity ";
	echo "guidelines for this work.";
	echo "<br>";
	echo "Cameron Gardner";
	echo "<br>";
	echo "CSC-155-201F_2021SP -->";
	echo "<center>";
	echo "<img src='stuff.jpg' alt='stuff'>";
	echo "</center>";
}

function footer()
{
	if(isset($_COOKIE["name"]))
	{
		$name = $_COOKIE["name"];
	}
	else
	{
		$name = !empty($_POST["name"]);
	}
	?>
	<?php
	echo "<center>";
	echo "<img src='stuff.jpg' alt='stuff2' width='200' height='100'>";
	echo "</center>";
	echo "</hr><center>";
	echo "<a href='welcome.php'>Welcome</a>";
	echo " | ";
	echo "<a href='shop1.php'>Socks</a>";
	echo " | ";
	echo "<a href='shop2.php'>Mufflers</a>";
	echo " | ";
	echo "<a href='shop3.php'>Candy</a>";
	echo " | ";
	echo "<a href='shop4.php'>Rocks</a>";
	echo " | ";
	echo "<a href='cart.php'>Cart</a>";
	echo " | ";
	echo "<a href='logout.php'>Logout</a>";
	echo "</center>";
	echo "<center>";
	echo "<a href='http://www.csit.parkland.edu/~cgardner12/csc155-cgi/lab20'>Database--DELETE THIS</a>";
	echo "</center>";
}

function getSession($name)
{
	if (isset($_SESSION[$name]))
	{
		return $_SESSION[$name];
	}
	return "";
}
?>
