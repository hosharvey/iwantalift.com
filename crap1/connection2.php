<html>
<?php
require_once('connection.php');
$sql = "SELECT * FROM pasta";
#$sql = "SELECT name FROM emp";
$pasta = mysqli_query($conn,$sql);
#$stmt = $conn->prepare($sql);

#$stmt->execute();

#$pasta = $stmt->mysqli_fetch_all();
?>
<select>
	<?php foreach($pasta as $row): ?>
		<option value="<?= $row['pasta_ID']; ?>"><?= $row['pasta_ID']; ?></option>
	<?php endforeach; ?>
</select>
<select>
	<?php foreach($pasta as $row): ?>
		<option value="<?= $row['pasta_ID']; ?>"><?= $row['typesofpasta']; ?></option>
	<?php endforeach; ?>
</select>
<select>
	<?php foreach($pasta as $row): ?>
		<option value="<?= $row['pasta_ID']; ?>"><?= $row['why']; ?></option>
	<?php endforeach; ?>
</select>
</html>