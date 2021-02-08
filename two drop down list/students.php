<?php 
$db = new mysqli("localhost","root","","jquery_evidance");
$id = $_GET['id'];
 $data = $db->query("SELECT * FROM students WHERE round='$id'");

?>

<select name="" id="">
	<?php 
	while ($row = $data->fetch_assoc()) { ?>
		<option value=""><?php echo $row['name']. "(".$row['course'].")" ?></option>

	<?php	
	}

	?>
</select>