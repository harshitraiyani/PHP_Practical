<?php
// 1.8 Write a PHP Program to print the values of array entered by user.

$numbers = $_GET['numbers'];
$array = explode(",", $numbers);

echo "Array values entered by user:<br>";
foreach ($array as $index => $value) {
    echo "Element " . $index . " : " . trim($value) . "<br>";
}
?>
