<?php
$MasterCodes = array (
	array (1, "Bulbasaur", "Grass", "Poison", "Overgrow", 45, 49, 49),
	array(2, "Ivysaur", "Grass", "Poison", "Overgrow", 60, 62, 63),
	array(3, "Venusaur", "Grass", "Poison", "Overgrow", 80, 82, 83),
	array(4, "Charmander", "Fire", "N/A", "Blaze", 39, 52, 43),
	array(5, "Charmeleon", "Fire", "N/A", "Blaze", 58, 64, 58),
	array(6, "Charizard", "Fire", "Flying", "Blaze" ,78 ,84, 78),
	array(7, "Squirtle", "Water", "N/A", "Torrent", 44, 48, 65),
	array(8, "Wartortle", "Water", "N/A", "Torrent" ,59 ,63 ,80),
	array(9, "Blastoise", "Water", "N/A", "Torrent", 79, 83, 100),
	array(10, "Caterpie", "Bug", "N/A", "Shield Dust", 50, 20, 55)
);



echo "<table>";
    foreach ($MasterCodes as $value) {
    echo "<tr><td>" . $value[0] . "</td>";
    echo "<td>" . $value[1] . "</td>"; echo "<td>" . $value[2] . "</td>";echo "<td>" . $value[3] . "</td>";echo "<td>" . $value[4] . "</td>";echo "<td>" . $value[5] . "</td>";echo "<td>" . $value[6] . "</td>";
    echo "<td>" . $value[7] . "</td></tr>";
    }

echo "</table>";





echo "<br><br>";

echo 'Echo the number of elements in an array : ';

echo count($MasterCodes);
echo "<br><br>";

$favorite = $MasterCodes[1][1];

echo "<ul>";
foreach($MasterCodes as $row) {
	echo "<li>";
	echo $row[1];
	echo "</li>";
}
echo "</ul>";

 echo " My favorite specie: ".$MasterCodes[4][1];

/*Sources: https://stackoverflow.com/questions/6413589/php-foreach-with-multidimensional-array/6413677
*/
?>

