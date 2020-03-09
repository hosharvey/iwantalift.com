<?php
$id = $_GET['id'];
include ("connection.php");
$sql = "DELETE locationinput WHERE inputoflocation = $id"; 

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: admin.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>
<html>
<br>
<a href="admin.php">Return</a>
</html>
