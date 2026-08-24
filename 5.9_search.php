<?php
// Server-side script for search suggestions (used by 5.9)

$fruits = array("Apple", "Apricot", "Banana", "Blueberry", "Cherry", "Grapes", "Guava", "Mango", "Orange", "Papaya");

if (isset($_GET['term'])) {
    $term = strtolower($_GET['term']);
    $matches = array();

    foreach ($fruits as $fruit) {
        if (strpos(strtolower($fruit), $term) !== false) {
            $matches[] = $fruit;
        }
    }

    if (count($matches) > 0) {
        echo "<ul>";
        foreach ($matches as $match) {
            echo "<li>" . $match . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No matches found.";
    }
}
?>
