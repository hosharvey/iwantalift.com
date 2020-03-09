<?php

//establishes a connection to the database

$servername = "localhost";
$database = "locationsite";
$username = "hosharvey";
$password = "locationpassword123!";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
//echo "Connected successfully; ";
?>
