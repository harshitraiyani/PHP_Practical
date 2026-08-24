<?php
$arr = array(5, 10, 15, 20, 25);

echo "Original Array:<br>";
foreach ($arr as $value)
{
    echo $value . "<br>";
}

$reverse = array_reverse($arr);
echo "<br>Reversed Array:<br>";
foreach ($reverse as $value)
{
    echo $value . "<br>";
}
?>
