<?php

//checks whether the username and password matches with the "users" table

SESSION_START();

require_once ("connection.php");
$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$_POST[username]' AND password='$_POST[password]'");

$numrows=mysqli_num_rows($result);

IF ($numrows=="1"){
	$_SESSION['username']=$_POST['username'];
} ELSE {
	echo "The username and password entered are incorrect";

	echo "<br><br><a href='index.php'>Return</a>";
	exit();
}

header('Location: admin.php');

?>