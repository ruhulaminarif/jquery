<?php 
$db = new mysqli("localhost","root","","jquery_evidance");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		/*#districts{
			display: none !important;
		}*/
	</style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
		$(document).ready(function(){
			$("#batch").change(function(){
				var d = $(this).val();

				$.get(
					'students.php',
					{id:d},
					function(data){
						$("#districts").html(data).show();
					});
			});


		})
	</script>
</head>
<body>
	<?php 
		$sql = "SELECT * FROM batches";
		$data = $db->query($sql);
		 ?>

	<form action="" method="POST">
		<select name="" id="batch">
			<?php while ($row = $data->fetch_assoc()) { ?>

				<option value="<?php echo $row['round']; ?>"><?php echo $row['round']; ?></option>";

			<?php } ?>
		</select>
		<div id="districts"></div>
	</form>

</body>
</html>