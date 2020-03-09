<?php
require_once('delete.php');
?>
<html>
<form action="submit.php" method="POST">
<input type="text" name="inputoflocation">
<br>
<body>Please input a time of departure</body>
<br>
<form action="submit.php" method="POST">
<input type="time" id="time" name="time"
       min="06:00" max="19:00" required>

<small>Hours are 6am to 7pm</small>

<p><button type="submit"> Submit</button></p>
</form>
</html>