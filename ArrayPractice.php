<?php

/* Assign a value to the same empty array, 
then use print_r to see which index
each value was assigned to. */

$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

print_r($paper);
echo "<br>";
echo "<br>";

/* Each value is assigned to an index in ascending order, with
"Copier" being assigned to index [0], "Inket" to index [1], 
and so on. */

/* You can use a for loop to print out the array values
instead of using print_r */

for ($i = 0; $i < 4; $i++) {
    echo "$i: $paper[$i]<br>";
}


?>
