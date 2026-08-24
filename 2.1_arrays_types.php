<?php
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "Numeric Array (Days):<br>";
foreach ($days as $day)
{
    echo $day . "<br>";
}

$months = array(
    "January" => 31, "February" => 28, "March" => 31, "April" => 30,
    "May" => 31, "June" => 30, "July" => 31, "August" => 31,
    "September" => 30, "October" => 31, "November" => 30, "December" => 31
);

echo "<br>Associative Array (Months):<br>";
foreach ($months as $month => $days)
{
    echo $month . " => " . $days . "<br>";
}

$laptops = array(
    "Dell" => array("model" => "Inspiron 15", "price" => 55000),
    "HP" => array("model" => "Pavilion 14", "price" => 62000)
);

echo "<br>Multidimensional Array (Laptops):<br>";
foreach ($laptops as $company => $details)
{
    echo $company . " - " . $details['model'] . " - Rs." . $details['price'] . "<br>";
}
?>
