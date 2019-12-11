<?php 
	include 'dbh.php';


	/*
	Function Name:	Create Record
	Description:	
	Arguements:		array(table_name,col1,col2,col3,...,coln,value1,value2,value3,...,valuen)
	SQL:			INSERT INTO table_name VALUES (value1,value2,value3); *all fields require input to succeed
	*/
	

	function createRecord($table_name,$val_array,$conn){
		$insert_value = '';
		for($i=0;$i<count($val_array);$i++){
			
			if ($i==(count($val_array)-1)) {
				$insert_value = $insert_value."'".$val_array[$i]."'";

			}
			else{
				$insert_value = $insert_value."'".$val_array[$i]."', ";
			}
		}
		//echo $table_name.'<br>'; 		//table name debug
		//echo $insert_value.'<br>';	//insert values debug
		$sql = "INSERT INTO $table_name VALUES ($insert_value);";

		//echo $sql.'<br>';				//sql query debug
		
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}	
		

	}

	/*
	Function Name:	Read Record
	Description:	
	Arguements:		array(table_name, id, sValue, [asc/dsc])
	SQL:			SELECT * from table_name WHERE id = sValue ORDER BY [asc/dsc];
	*/
	function readRecord($table_name,$col_array,$conn){
		$col_select = '';
		$col_tags = '<table><tr>';
		for($i=0;$i<count($col_array);$i++){
			
			if ($i==(count($col_array)-1)) {
				$col_select = $col_select.$col_array[$i];

			}
			else{
				$col_select = $col_select.$col_array[$i].", ";
			}

			$col_tags = $col_tags.'<th>'.$col_array[$i].'</th>';
		}
		$col_tags = $col_tags.'</tr>';

		$sql = "SELECT $col_select FROM $table_name";
		
		//echo $sql.'<br>';				//sql query debug
		//echo $col_tags.'<br>';		//column tags debug

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
		    	echo '</tr>';
		    }
		    //echo '</table>';
		} else {
		    echo "0 results";
		}
		
		
	}

	/*
	Function Name:	Update Record
	Description:	
	Arguements:		array(table_name, id, selected_row, col1, new_value1, col2, new_value2, ..., coln, new_valuen)
	SQL:			UPDATE table_name
					SET col1 = new_value1,
						col2 = new_valeu2,
						...
						coln = new_valuen
					WHERE id = selected_row;
	*/
	function updateRecord($table_name,$uid,$update_field,$update_value,$conn){
		$update_echo = '';

		for($i=0;$i<count($update_field);$i++){

			if ($i==(count($update_field)-1)) {
				$update_echo = $update_echo.$update_field[$i]."='".$update_value[$i]."'";

			}
			else{
				$update_echo = $update_echo.$update_field[$i]."='".$update_value[$i]."', ";
			}
			
		}

		$sql = "UPDATE $table_name SET $update_echo WHERE uid=$uid";

		echo $sql;
		
		if ($conn->query($sql) === TRUE) {
		    echo "Record updated successfully";
		} else {
		    echo "Error updating record: " . $conn->error;
		}
	}

	/*
	Function Name:	Delete Record
	Description:	
	Arguements:		array(table_name, id, selected_row)
	SQL:			DELETE FROM table_name WHERE id = selected_row;
	*/
	function deleteRecord($table_name,$col_uid,$uid,$conn){
		$sql = "DELETE FROM $table_name WHERE $col_uid='$uid'";

		if ($conn->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}
	}
 ?>