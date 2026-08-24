<?php
// 2.6 Write a PHP code for user define function for calculator, take input from user by creating simple html form.

function calculate($n1, $n2, $op) {
    switch ($op) {
        case "add": return $n1 + $n2;
        case "sub": return $n1 - $n2;
        case "mul": return $n1 * $n2;
        case "div":
            if ($n2 == 0) return "Error: Division by zero";
            return $n1 / $n2;
        default: return "Invalid Operation";
    }
}

$num1 = (float)$_GET['num1'];
$num2 = (float)$_GET['num2'];
$operation = $_GET['operation'];

$result = calculate($num1, $num2, $operation);
echo "Result: " . $result;
?>
