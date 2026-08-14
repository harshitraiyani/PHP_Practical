<?php
$num1 = 45;
$num2 = 82;
$num3 = 18;

echo "Numbers to compare: $num1, $num2, $num3 <br><br>";

// Finding the Maximum Number
if ($num1 >= $num2 && $num1 >= $num3) {
    $max = $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    $max = $num2;
} else {
    $max = $num3;
}

// Finding the Minimum Number
if ($num1 <= $num2 && $num1 <= $num3) {
    $min = $num1;
} elseif ($num2 <= $num1 && $num2 <= $num3) {
    $min = $num2;
} else {
    $min = $num3;
}

echo "<b>Maximum Number is:</b> " . $max . "<br>";
echo "<b>Minimum Number is:</b> " . $min . "<br>";
?>