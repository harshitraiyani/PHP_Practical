<?php
$arr = array(45, 12, 78, 23, 5, 90);

echo "Original Array:<br>";
foreach ($arr as $value)
{
    echo $value . " ";
}

sort($arr);
echo "<br><br>Sorted Ascending:<br>";
foreach ($arr as $value)
{
    echo $value . " ";
}

rsort($arr);
echo "<br><br>Sorted Descending:<br>";
foreach ($arr as $value)
{
    echo $value . " ";
}
?>
