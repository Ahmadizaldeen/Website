<?php require_once "funktionen.php";?>
<form action ="" method = "post">
<label for ="anzahl">wie viele Tipps?</label>
<input type = "text" name = "anzahl"/>
<input type = "submit" value ="generieren" name = "generieren">
</form>
<?php
	//print_r ($_POST);
	if(isset($_POST['generieren'])){
		if(empty($_POST['anzahl'])){
			echo "plz enter anzahl großer als 0";// Negative !?
		}
		else {
			$anzahl = $_POST['anzahl'];
			generate_lottozahlen($anzahl);
		}
	}
	
	//generate_lottozahlen(5);
 
?>