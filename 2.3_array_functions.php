<?php
// 2.3 Write a program to perform following array functions

echo "<h3>1) array_change_key_case()</h3>";
$arr1 = array("Name" => "Ravi", "Age" => 21);
print_r(array_change_key_case($arr1, CASE_LOWER));
print_r(array_change_key_case($arr1, CASE_UPPER));

echo "<h3>2) array_chunk() - array of months</h3>";
$months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
$chunks = array_chunk($months, 3);
print_r($chunks);

echo "<h3>3) array_count_values()</h3>";
$fruits = array("apple", "banana", "apple", "mango", "banana", "apple");
print_r(array_count_values($fruits));

echo "<h3>4) array_pop()</h3>";
$stack = array("a", "b", "c", "d");
$popped = array_pop($stack);
echo "Popped element: $popped<br>";
print_r($stack);

echo "<h3>5) array_push()</h3>";
$arr2 = array("a", "b");
array_push($arr2, "c", "d");
print_r($arr2);

echo "<h3>6) array_unshift()</h3>";
$arr3 = array("b", "c");
array_unshift($arr3, "a");
print_r($arr3);

echo "<h3>7) array_shift()</h3>";
$arr4 = array("a", "b", "c");
$shifted = array_shift($arr4);
echo "Shifted element: $shifted<br>";
print_r($arr4);
?>
