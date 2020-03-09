<?php
require_once ("connection.php");
$result = mysqli_query($conn, "SELECT * FROM locationinput");

echo "<table border='1'>
<tr>
<th>locationinput</th>
<th>inputoftime</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['inputoflocation'] . "</td>";
echo "<td>" . $row['inputoftime'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>