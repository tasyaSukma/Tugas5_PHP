<?php
	$input1 = [false, false, true,true];
	$input2 = [false, true, false, true];

	echo "<h2>Tabel Logika</h2>";
	echo "<table border=1>
			<tr>
				<td>Input 1</td>
				<td>Input 2</td>
				<td>AND</td>
				<td>OR</td>
			</tr>";

	for($i = 0 ; $i<count($input1); $i++){
		if($input1[$i]){
			echo "<tr><td>True</td>";
		}else {
			echo "<tr><td>False</td>";
		}

		if($input2[$i]){
			echo "<td>True</td>";
		}else {
			echo "<td>False</td>";
		}
		echo "<td>".printf($input1[$i] && $input2[$i])."</td>";
		echo "<td>".printf($input1[$i] || $input2[$i])."</td></tr>";
	}
	echo "</table>";
?>