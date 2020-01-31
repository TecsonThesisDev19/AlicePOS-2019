<?php
	include_once 'includes/dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="get">
		<table class="table table-bordered" id="reftable3" width="100%" cellspacing="0">
		  	<thead>
			  	<tr>
			  		<th>Dish Name</th>
			  		<th>Price</th>
					<th></th>
			  	</tr>
			</thead>
			<tbody>
			<?php 
				$sql = "SELECT * FROM menu";

		  		//echo $sql.'<br>';       //sql query debug

				$result = $conn->query($sql);

				if (!$result) {
					trigger_error('Invalid query: ' . $conn->error);
				}

				if ($result->num_rows > 0) {
				 	// output data of each row

					//echo $col_tags; //table and header tag included

					while($row = $result->fetch_assoc()) {
						echo '<tr>';
						foreach ($row as $value) {
						echo '<td>'.$value.'</td>';
						}
						echo '<th><button type="button" class="btn btn-primary btn-block">Add</button></th>';
						echo '</tr>';
					}
					//echo '</table>';
				} 
				else {
					echo "0 results";
				}
				?>

			</tbody>
		</table>
	</form>

	<script type="text/javascript">
		

	</script>
</body>
</html>