<?php


function create_rgb_color($muster = "one_color"){
	
		return "rgb(" . rand(0,255) . "," . rand(0,255) . "," . rand(0,255) . ")";

}
function color_matrix ($row,$col, $muster = ""){
	$color_matrix =[];
	switch ($muster) {
		case "rows":
		
			for($i = 0; $i<$row; $i++){
				$row_color = create_rgb_color(); 
				for($j = 0;$j<$col ;$j++){
						$color_matrix[$i][$j] = $row_color;

				}
			}
			break;
		case "columns":
			for($j = 0; $j<$col; $j++){
				$col_color = create_rgb_color();
				for($i = 0;$i<$row ;$i++){
						$color_matrix[$i][$j] = $col_color;
				}
			}
			break;
		case "diagonale":
			$color = create_rgb_color();
			for($i = 0; $i<$row; $i++){
				for($j = 0;$j<$col ;$j++){
					if($i==$j)
						$color_matrix[$i][$j] = create_rgb_color();
					else 
						$color_matrix[$i][$j] = "white";
				}
			}
			break;
			
		
		case "shach":
			$color1 = create_rgb_color();
			$color2 = create_rgb_color();
			for($i = 0; $i<$row; $i++){
				for($j = 0;$j<$col ;$j++){
					if(($i+$j)%2==0)
						$color_matrix[$i][$j] = $color1;
					else 
						$color_matrix[$i][$j] = $color2;
				}
			}
			break;
		case "in":
			$color = create_rgb_color();
			for($i = 0; $i<$row; $i++){
				for($j = 0;$j<$col ;$j++){
					if($i > 0 && $i < $row/2 && $j > 0 && $j < $col/2)
						$color_matrix[$i][$j] = $color;
					else 
						$color_matrix[$i][$j] = "white";
				}
			}
			break;
		case "out":
			$color = create_rgb_color();
			for($i = 0; $i < $row; $i++){
				for($j = 0; $j < $col; $j++){
					if($i == 0 || $i == $row - 1 || $j == 0 || $j == $col - 1)
						$color_matrix[$i][$j] = $color;
					else
						$color_matrix[$i][$j] = "white";
					}
			}
			break;
		default: // random
			for($i = 0; $i<$row; $i++){
				for($j = 0;$j<$col ;$j++){
					$color_matrix[$i][$j] = create_rgb_color();
				}
			}
	
	
}
return $color_matrix;
}

function create_tb($colors){
	$row = count($colors);
	$col = count ($colors[0]);
	$table = "<table border : 1px>";
	for($i = 0; $i<$row ; $i++){
		$table .= "<tr>";
		for($j = 0; $j<$col; $j++){
			$table .= "<td style='background-color: {$colors[$i][$j]}; width:50px; height:50px;'></td>";
		}
		$table .="</tr>";
	}
	$table .="</table>";
	return $table;	
}

?>
<form action = "" method = "post">
<label for = "col">Anzahl die Spalten</label>
<input type ="number" name = "col" id ="col" >
<label for= "row"> Anzahle die Zeilen</label>
<input type ="number" name ="row" id = "row"> 
<input type = "submit" value = "create" name = "create">
</form>
<div style="display:flex; gap:20px;">
<?php
$musters= ["rows","columns","diagonale","shach","in","out","default"];
if (isset($_POST['create'])){
	if(!empty($_POST['row']) && !empty($_POST['col'])){
		$column = $_POST['col'];
		$row = $_POST["row"];
		foreach ($musters as $muster)
			echo create_tb(color_matrix($row,$column,$muster)); 
	}
	else
		echo "not set";
}


?>
</div>