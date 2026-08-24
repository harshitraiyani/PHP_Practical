<?php
$arr = array(45, 12, 78, 23);

$max = max($arr);
$min = min($arr);

echo "Array: ";
foreach ($arr as $value)
{
    echo $value . " ";
}

echo "<br>Maximum: " . $max . "<br>";
echo "Minimum: " . $min . "<br>";
?>
