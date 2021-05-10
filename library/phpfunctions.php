<?php
///library functions ....version 00
function Aheader()
{
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

   	if ($_SESSION['group'] == "admin")
   	{
      		echo 'admin footer';
   	}
}
function getSession($name)
{
	if (isset($_SESSION[$name]))
	{
		return $_SESSION[$name];
	}
	return "";
}

function getConn()
{
	$user = "cgardner12";
	$conn = mysqli_connect("localhost",$user,$user,$user);
	if (mysqli_connect_errno()) {
    		echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() . "</b>";
    	}
    return $conn;
}
function lookupUsername($conn, $username)
{
	$stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
	$stmt->bind_param("s", $username);

	$stmt->execute();
	$result = $stmt->get_result();
	$num_rows = mysqli_num_rows($result);
	if ($num_rows == 0){
		return 0;
	}
	else if ($num_rows > 1){
		header("Location: logout.php");
	}
	else{
		return $result->fetch_assoc();
	}
}

function getPost( $name )
{
	if ( isset($_POST[$name]) )
    	{
        	return htmlspecialchars($_POST[$name]);
    	}
    	return "";
}
?>
