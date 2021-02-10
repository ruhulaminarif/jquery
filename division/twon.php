

<?php 
if (isset($_GET['districts'])) {
	$id=$_GET['districts'];
	//echo $id;
}
?>

<?php 
$db= new mysqli("localhost", "root", "", "mysqliquery"); 
$sql = "SELECT * FROM towns WHERE dist_id = '$id' ";

$data = $db->query($sql);
?>
<option value="" hidden>Select</option>
<?php while($rows = $data->fetch_assoc() ){ ?>

	<option value="<?php echo $rows['town_id']; ?>"><?php echo $rows['townname']; ?></option>

<?php } ?>


