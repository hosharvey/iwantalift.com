<html>

<! –– admin page for editing and deleting data. -->

<center>
  <h3>Current Journeys</h3>
      <div id="footer" class="footer">
		<p>Content is &copy; Henry Harvey.</p>
		<p>This page is valid HTML5.</p>
	</div>
<?php
include("connection.php");
include("security.php");
$result = mysqli_query($conn, "SELECT * FROM locationinput");

echo "<table border='1'>
<tr>
<th>location_ID</th>
<th>location</th>
<th>time</th>
<th>action</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['location_ID'] . "</td>";
echo "<td>" . $row['inputoflocation'] . "</td>";
echo "<td>" . $row['inputoftime'] . "</td>";


echo "<td><a href='edit.php?id=$row[location_ID]'><button>edit</button></a></td>";
echo "<td><a href='delete.php?id=$row[location_ID]'><button>delete</button></a></td>";


echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
<br>
<a href='logout.php'>Logout</a>
</center>
</html>