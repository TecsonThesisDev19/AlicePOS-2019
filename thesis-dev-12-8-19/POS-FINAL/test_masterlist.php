<?php 
	include_once 'includes/dbh.php';
  	include 'includes/crud.inc.php';

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	 <table id='table'>
 	 	<thead>
			<tr>
				<th>Dish ID</th>
				<th>Name</th>
				<th>Category</th>
				<th>Price</th>
				<th>Actions</th>
				<th></th>
			</tr>
		</thead>
		<thead>
			<form method="GET">
			<tr>
				<th><input type="text" name = 'mid' class="form-control" placeholder="Dish ID"></th>
				<th><input type="text" name = 'tom' class="form-control" placeholder="Name"></th>
				<th><input type="text" name = 'nom' class="form-control" placeholder="Category" ></th>
				<th><input type="text" name = 'price' class="form-control" placeholder="Price"></th>
				<th> <button type="submit" class="btn btn-secondary btn-block" > Add</button></th>
				<th></th>
			</tr>
			</form>
			<?php 
				$table_name = 'menu';
				$val_array = array($_GET['mid'],$_GET['tom'],$_GET['nom'],$_GET['price']);

				//createRecord($table_name,$val_array,$conn);
			?>
		</thead>
		<tfoot>
			<tr>
				<th>Dish ID</th>
				<th>Name</th>
				<th>Category</th>
				<th>Price</th>
				<th></th>
				<th></th>
			</tr>
		</tfoot>
		<tbody>
			<form method="GET">
				<input type="text" name= "h_menu_id" id= "h_menu_id">
				<?php 
				//            $table_name = 'menu';
				//            $col_array = array('menu_id','menu_name','menu_description','menu_price');
				//            readRecord($table_name,$col_array,$conn);
				$sql = "SELECT * FROM menu";

				//echo $sql.'<br>';       //sql query debug
				//echo $col_tags.'<br>';    //column tags debug

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
						echo '<td><button type="submit" id="btnedt" class="btn btn-secondary btn-block" > Edit</button> </td>';
						echo '<td><button type="submit" id="btndel" class="btn btn-secondary btn-block" > Delete</button></td>';
						//echo '<td><input type="text" name= "h_menu_id" id= "h_menu_id"></td>';
						echo '</tr>';
					}
				} 
				else {
				echo "0 results";
				}
				?>
				<?php
					$h_menu_id = $_GET['h_menu_id'];
					echo $h_menu_id;
					//deleteRecord('menu','menu_ID',$h_menu_id,$conn);
				?>
			 	
			</form>
			
		</tbody>
	</table>
	<script type="text/javascript">
		var table = document.getElementById('table');
	    
	    for(var i = 1; i < table.rows.length; i++){
	        table.rows[i].onclick = function()
	        {
	             //rIndex = this.rowIndex;
	             document.getElementById("h_menu_id").value = this.cells[0].innerHTML;
	        };
	    }

	</script>
 </body>
 </html>