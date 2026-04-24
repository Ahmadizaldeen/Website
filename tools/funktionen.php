<?php

function richtig($param){
	$param = trim($param);
	$richtig = strtoupper(substr($param, 0, 1)).strtolower(substr($param, 1));
	return $richtig;
}
	
function mk_table($row , $colm = 0){

    if ($colm == 0){
        $colm = $row;
    }

    $table = "<table border='1'>";

    for ($i = 0; $i < $row; $i++ ){
        $table .= "<tr>";

        for ($j = 0; $j < $colm; $j++){
            $table .= "<td width = 50px height = 50px></td>";
        }

        $table .= "</tr>";
    }

    $table .= "</table>";

    return $table;	
}

function generate_lottozahlen($anzahl){
	$lotto_zahlen = [];
	for($i = 1; $i<=100;$i++){
		$lotto_zahlen[] = $i;
	}
	//print_r( $lotto_zahlen);
	$lotto_loop_keys = array_rand($lotto_zahlen, 5);// gibt Keys zurück!!
	$lotto_super_key = array_rand($lotto_zahlen, 1);
	//print_r ($lotto_loop) ;
	//print_r($lotto_super);
	$lotto_loop = [];
	foreach($lotto_loop_keys as $key){
		$lotto_loop[] = $lotto_zahlen[$key];
	}
	$lotto_super = $lotto_zahlen[$lotto_super_key];
	for($n = 1 ; $n <= $anzahl; $n++){
		$lotto_loop_keys = array_rand($lotto_zahlen, 5);// gibt Keys zurück!!
		$lotto_super_key = array_rand($lotto_zahlen, 1);
		$lotto_loop = [];
		foreach($lotto_loop_keys as $key){
			$lotto_loop[] = $lotto_zahlen[$key];
		}
		$lotto_super = $lotto_zahlen[$lotto_super_key];
		echo "<hr>". $n.". Loop: <li>". implode(", ", $lotto_loop) .
		", Super Zahl: ".$lotto_super."</li><br>";
	}
}
?>