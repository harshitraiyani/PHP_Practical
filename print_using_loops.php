<?php
// Method A: Using For Loop
echo "<b>Printing 5 to 10 using a FOR loop:</b><br>";
for ($i = 5; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br><br>";

// Method B: Using ForEach Loop
echo "<b>Printing 5 to 10 using a FOREACH loop:</b><br>";
// Creating an array containing numbers from 5 to 10
$numbersArray = range(5, 10); 

foreach ($numbersArray as $number) {
    echo $number . " ";
}
?>