<?php

$array_one = array("one","two","three");
$array_two = array("four","five",6,7.5);

foreach($array_one as key == $one){ 
    echo "$one";
    echo "<pre>";
}

echo "<pre>";
print_r($array_one);
print_r($array_two);
echo "</pre>";

echo "<pre>";
print_r($array_push($array_one,"four"));
echo "</pre>";

echo "<pre>";
print_r($array_one);
echo "</pre>";

echo "<pre>";
print_r($array_pop($array_one));
echo "</pre>";

echo "<pre>";
print_r($array_one);
echo "</pre>";

echo "<pre>";
print_r($array_merge($array_one,$array_two));
echo "</pre>";


echo "<pre>";
print_r($array_flip($array_one,"four"));
echo "</pre>";


?>