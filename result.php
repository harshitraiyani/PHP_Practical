<?php
// Defining Constants for data that shouldn't change
define("INSTITUTE_NAME", "Tech University");
define("SEMESTER", "3rd Semester");

// Defining Variables for student and grade data
$studentName = "Alex Mercer";
$enrollmentId = "EN2026094";
$gpa = 3.85;
$status = "Passed";

// Outputting the result
echo "<h2>--- Semester Result Card ---</h2>";
echo "<b>Institution:</b> " . INSTITUTE_NAME . "<br>";
echo "<b>Semester:</b> " . SEMESTER . "<br>";
echo "<b>Student Name:</b> " . $studentName . "<br>";
echo "<b>Enrollment ID:</b> " . $enrollmentId . "<br>";
echo "<b>GPA Obtained:</b> " . $gpa . "<br>";
echo "<b>Final Status:</b> " . $status . "<br>";
?>