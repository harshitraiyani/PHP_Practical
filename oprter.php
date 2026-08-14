<?php
$a = 15;
$b = 4;

echo "<h3>1. Arithmetic Operators</h3>";
echo "Addition ($a + $b): " . ($a + $b) . "<br>";
echo "Subtraction ($a - $b): " . ($a - $b) . "<br>";
echo "Multiplication ($a * $b): " . ($a * $b) . "<br>";
echo "Division ($a / $b): " . ($a / $b) . "<br>";
echo "Modulus ($a % $b): " . ($a % $b) . "<br>";

echo "<h3>2. Assignment Operators</h3>";
$c = 10;
echo "Initial value: " . $c . "<br>";
$c += 5; // Same as $c = $c + 5
echo "After += 5: " . $c . "<br>";

echo "<h3>3. Comparison Operators</h3>";
$x = 10;
$y = "10";
echo "Is $x equal to '$y' (==)? " . ( $x == $y ? "True" : "False" ) . "<br>";
echo "Is $x identical to '$y' (===)? " . ( $x === $y ? "True" : "False" ) . "<br>";
echo "Is $a greater than $b (>)? " . ( $a > $b ? "True" : "False" ) . "<br>";

echo "<h3>4. Logical Operators</h3>";
$isTrue = true;
$isFalse = false;
echo "AND (true && false): " . (($isTrue && $isFalse) ? "True" : "False") . "<br>";
echo "OR (true || false): " . (($isTrue || $isFalse) ? "True" : "False") . "<br>";
?>