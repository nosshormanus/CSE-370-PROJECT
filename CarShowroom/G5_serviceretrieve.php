<?php
	include("G5_serviceconnection.php");
	$query = "SELECT * FROM service-requests;";

	$result = mysqli_query($link,$query);

	
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>data</title>
</head>
<body>
	<table border="2">
		<tr>
			<td>Vehicle Name</td>
			<td>Car Brand</td>
			<td>Car Model</td>
			<td>License Number</td>
			<td>Problem Description</td>
		</tr>
		<?php
			if($result) {
			while ($row = mysqli_fetch_array($result)) {

		?>

		<tr>
			<td><?php echo $row['Vehicle-name'];  ?></td>
			<td><?php echo $row['Car-brand'];  ?></td>
			<td><?php echo $row['Car-model'];  ?></td>
			<td><?php echo $row['License-number'];  ?></td>
			<td><?php echo $row['Problem-description'];  ?></td>
		</tr>
		<?php
			echo "result is more than 1";
			}} else {
				echo "result is empty";
			}

		?>
	</table>
</body>
</html>