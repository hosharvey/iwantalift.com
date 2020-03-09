<?php
include('connection.php');
//include('security.php');

$id=$_GET['id'];

$result=mysqli_query($conn,"DELETE FROM locationinput WHERE location_ID = '$id'");

IF($result){

    header("Location: admin.php");
    exit;

} ELSE {

	echo "Something went wrong";
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);


}

?>