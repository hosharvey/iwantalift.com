<?php

//for inputting a location into the database

require_once ("connection.php");
$location = $_POST['inputoflocation'];
$time = $_POST['time'];
$sql = "INSERT INTO locationinput (inputoflocation, inputoftime) VALUES ('$location', '$time')";
if (mysqli_query($conn, $sql)) {
      echo "Your location has been submitted";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header("Location: index.php");
exit;
?>