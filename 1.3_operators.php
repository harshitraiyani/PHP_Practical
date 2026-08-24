<?php
$a = 20;
$b = 6;

echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";

if ($a > $b)
{
    echo "a is greater than b<br>";
}
else
{
    echo "b is greater than a<br>";
}

$p = true;
$q = false;

if ($p && $q)
{
    echo "Both true<br>";
}
else
{
    echo "AND condition false<br>";
}

if ($p || $q)
{
    echo "OR condition true<br>";
}
?>
