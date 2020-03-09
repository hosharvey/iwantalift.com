<?php
require_once ("connection.php");
$typesofpastainput = $_POST['typesofpasta'];
$why1 = $_POST['why'];
$sql = "INSERT INTO pasta (typesofpasta, why) VALUES ('$typesofpastainput', '$why1')";
if (mysqli_query($conn, $sql)) {
      echo "Your answer has been submitted";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<html>
<body>
<br>
<font size="20">Thank you for your input</font>
<br>
<a href="http://172.25.8.160:81/pasta.html">Return</a>
<br>
<img src="https://thumbs.dreamstime.com/z/italian-chef-4995744.jpg">
</body>
</html>