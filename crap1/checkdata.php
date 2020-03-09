<?php
require_once ("connection.php");
$result = mysqli_query($conn, "SELECT * FROM pasta");

echo "<table border='1'>
<tr>
<th>typeofpasta</th>
<th>why</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['typesofpasta'] . "</td>";
echo "<td>" . $row['why'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
<html>
<body>
<br>
<a href="http://172.25.8.160:81/pasta.html">Return</a>
</body>
</html>