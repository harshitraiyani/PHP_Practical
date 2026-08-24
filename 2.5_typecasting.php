<?php
// 2.5 Write a PHP code for Type casting with settype, gettype function

$var1 = "123";
echo "Original value: $var1, Type: " . gettype($var1) . "<br>";

settype($var1, "integer");
echo "After settype to integer: $var1, Type: " . gettype($var1) . "<br>";

$var2 = 45.67;
echo "<br>Original value: $var2, Type: " . gettype($var2) . "<br>";
settype($var2, "string");
echo "After settype to string: $var2, Type: " . gettype($var2) . "<br>";

$var3 = 0;
echo "<br>Original value: $var3, Type: " . gettype($var3) . "<br>";
settype($var3, "boolean");
echo "After settype to boolean: ";
var_dump($var3);

// Type casting using (type) syntax
$num = "50";
$intNum = (int)$num;
echo "<br>Casted using (int): $intNum, Type: " . gettype($intNum) . "<br>";

$floatNum = (float)"12.5abc";
echo "Casted using (float): $floatNum, Type: " . gettype($floatNum) . "<br>";
?>
