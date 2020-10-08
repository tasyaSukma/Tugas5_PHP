<?php
	$input1 = ["Ayo", "Bersama"];
	$input2 = ["Belajar", "Niomic"];
	$gabungan="";

	echo "<h2>Operator String</h2>";
	echo "<table border=1>
			<tr>
				<td>Input 1</td>
				<td>Input 2</td>
				<td>Hasil</td>
			</tr>";

	for($i = 0 ; $i<count($input1) ; $i++){
		$gabungan .= $input1[$i]." ".$input2[$i]." ";
		echo "<tr><td>".$input1[$i]."</td>
			  <td>$input2[$i]</td><td>";
		echo $input1[$i]." ".$input2[$i];
		echo "</td></tr>";
	}

	echo "</table>";
	echo "<br><h3>$gabungan<h3>";
?>
