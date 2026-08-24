<?php
$name = "Ravi Patel";
$sem = 4;

$sub1 = "PHP";
$marks1 = 85;

$sub2 = "Java";
$marks2 = 78;

$sub3 = "DBMS";
$marks3 = 90;

$total = $marks1 + $marks2 + $marks3;
$percentage = $total / 3;

echo "Student Name: " . $name . "<br>";
echo "Semester: " . $sem . "<br>";
echo $sub1 . ": " . $marks1 . "<br>";
echo $sub2 . ": " . $marks2 . "<br>";
echo $sub3 . ": " . $marks3 . "<br>";
echo "Total Marks: " . $total . "<br>";
echo "Percentage: " . $percentage . "%<br>";
?>
