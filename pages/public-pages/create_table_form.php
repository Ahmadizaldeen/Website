<?php
require_once "funktionen.php";
?>
<form action= "" method ="get">
	<label for="rows">rows</label>
	<input type= "text" name ="rows" id ="rows">
	<label for="column">Column</label>
	<input type= "text" name ="column" id ="column">
	<input type = "submit" value ="senden" name = "submit">
</form>
<?php
	print_r ($_GET);
	
	//echo mk_table(5, 5);
	if (isset($_GET['submit'])){
		if(!empty($_GET['rows']) && !empty($_GET['column'])){
			$rows = $_GET['rows'];
			$column = $_GET['column'];
			echo mk_table($rows, $column);
		}
	
		else if(empty($_GET['column'])){
			$rows = $_GET['rows'];
			echo mk_table($rows);
		}
		else if(empty($_GET['rows'])){
			$column = $_GET['column'];
			echo mk_table($column);
		}
		if(empty($_GET['column']) && empty($_GET['rows'])) echo "enter Nr pls";
	}
	
	
?>