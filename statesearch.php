<?php

$country=$_POST["ctry"];
require ("connection.php");
$res=$con->query("SELECT * FROM `states` WHERE `country_id`='$country'");
$count=$res->num_rows;

if ($count > 0) {
	?>
<option value="">Select State</option>
<?php
while ($row=$res->fetch_assoc()) {
	?>

<option value="<?php echo $row['stat_id']; ?>"> <?php echo $row['sname']; ?></option>
<?php
}
}
else {
	echo "no results";
}
?>