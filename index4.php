<?php
echo "<table border=1>";
for ($x= 1; $x<=9; $x++){
	echo "<tr>";
	for ($z= 1; $z<=9; $z++){
	
	$y=$x*$z;
	
	echo "<td><p> $x*$z=$y </p></td>";
	
	}
	
}
echo "</table>";
?>