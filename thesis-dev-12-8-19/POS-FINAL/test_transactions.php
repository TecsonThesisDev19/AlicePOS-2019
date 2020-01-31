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
 	<input type="text" name="val1" id="val1">
 	<input type="text" name="val2" id="val2">
 	<input type="text" name="val3" id="val3">
 	<button onclick='addRow()'>Add</button>

 	<form method="GET">
 		<table id="table_id">
	 		<tr>
	 			<th>Menu ID</th>
	 			<th>Menu Name</th>
	 			<th>Quantity</th>
	 			<th></th>
	 		</tr>
	 		<tr>
	 			<td>MENU001</td>
	 			<td>sample name</td>
	 			<td>3</td>
	 			<td><button>X</button></td>
	 		</tr>
 		</table>

 		<button type="submit">submit</button>
 	</form>
	<script type="text/javascript">
		var table = getElementById('table_id');
		
	</script>
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>Dish Name</th>
				<th>Price</th>
				<th></th>
			</tr>
		</thead>

		<tbody>
		<?php 
			$sql = "SELECT menu_name, menu_price FROM menu WHERE menu_description = 'Fish'";

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
					echo '<th><button type="button" onclick="addRow()" class="btn btn-primary btn-block"><i class="far fa-plus-square"></i></button></th>';
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

 	<script type="text/javascript">
 	function addRow(){
 		var table = document.getElementById('table_id');
 		var refTable = document.getElementById('dataTable');

 		var newRow = table.insertRow(-1);
 		var newCell1 = newRow.insertCell(0);
 		var newCell2 = newRow.insertCell(1);
 		var newCell3 = newRow.insertCell(2);
 		var newCell4 = newRow.insertCell(3);

 		for(var i = 1; i < refTable.rows.length; i++){
	        refTable.rows[i].onclick = function()
	        {
	            //rIndex = this.rowIndex;
	            console.log(this.cells[0].innerHTML);
	            console.log(this.cells[1].innerHTML);

	            //document.getElementById('val1').value = (this.cells[0].innerHTML);
	            //document.getElementById('val2').value = (this.cells[1].innerHTML);

            	var val1 = document.createTextNode(this.cells[0].innerHTML);
				var val2 = document.createTextNode(this.cells[1].innerHTML);
				newCell1.appendChild(val1);
 				newCell2.appendChild(val2);
	        };
	    }

 		//var val1 = document.createTextNode(document.getElementById('val1').value);
 		//var val2 = document.createTextNode(document.getElementById('val2').value);
 		//var val3 = document.createTextNode(document.getElementById('val3').value);
 		var button = document.createElement('button');
 		button.innerHTML = "X";
 		button.setAttribute('id','remove');
 		button.setAttribute('onclick','removeRow()');


 		//newCell1.appendChild(val1);
 		//newCell2.appendChild(val2);
 		//newCell3.appendChild(val3);
 		newCell4.appendChild(button);
 	}

 	function removeRow(){
 		var table = document.getElementById('table_id');
 		for(var i = 1; i < table.rows.length; i++){
	        table.rows[i].onclick = function()
	        {
	             rIndex = this.rowIndex;
	             table.deleteRow(rIndex);
	        };
	    }


 	}
 	</script>
 </body>
 
 </html>