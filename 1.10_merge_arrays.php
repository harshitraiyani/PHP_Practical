<?php
$arr1 = array("Apple", "Mango", "Banana");
$arr2 = array("Orange", "Grapes", "Papaya");

echo "Array 1:<br>";
foreach ($arr1 as $value)
{
    echo $value . "<br>";
}

echo "<br>Array 2:<br>";
foreach ($arr2 as $value)
{
    echo $value . "<br>";
}

$result = array_merge($arr1, $arr2);
echo "<br>Merged Array:<br>";
foreach ($result as $value)
{
    echo $value . "<br>";
}
?>
