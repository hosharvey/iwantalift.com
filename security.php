<?php

//requires the user to have a username and password present in the "users" table.

include("connection.php");
SESSION_START();

IF (!isset($_SESSION['username'])){
	echo "Sorry. You can't use this page";
	echo "<br><br><a href='index.php'>Return</a>";
	exit();
}

$result=mysqli_query($conn,"select * from users WHERE Username='$_SESSION[username]'");

$numrows=mysqli_num_rows($result);

IF ($numrows!="1"){
	echo "Sorry. You can't use this page";
	echo "<br><br><a href='index.php'>Return</a>";
	exit();
}
?>