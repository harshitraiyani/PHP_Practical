<?php
// Fetching current month as a numeric string (01 to 12) and converting to an integer
$monthNumeric = (int)date('m'); 

echo "Current Month Number: " . $monthNumeric . "<br><br>";

// Method A: Using If...Else
echo "<b>[Method A: If...Else Result]</b><br>";
if ($monthNumeric == 1) { echo "It's January.<br>"; }
elseif ($monthNumeric == 2) { echo "It's February.<br>"; }
elseif ($monthNumeric == 3) { echo "It's March.<br>"; }
elseif ($monthNumeric == 4) { echo "It's April.<br>"; }
elseif ($monthNumeric == 5) { echo "It's May.<br>"; }
elseif ($monthNumeric == 6) { echo "It's June.<br>"; }
elseif ($monthNumeric == 7) { echo "It's July.<br>"; }
elseif ($monthNumeric == 8) { echo "It's August.<br>"; }
elseif ($monthNumeric == 9) { echo "It's September.<br>"; }
elseif ($monthNumeric == 10) { echo "It's October.<br>"; }
elseif ($monthNumeric == 11) { echo "It's November.<br>"; }
elseif ($monthNumeric == 12) { echo "It's December.<br>"; }
else { echo "Invalid Month.<br>"; }

echo "<br>";

// Method B: Using Switch Case
echo "<b>[Method B: Switch Case Result]</b><br>";
switch ($monthNumeric) {
    case 1: echo "It's January.<br>"; break;
    case 2: echo "It's February.<br>"; break;
    case 3: echo "It's March.<br>"; break;
    case 4: echo "It's April.<br>"; break;
    case 5: echo "It's May.<br>"; break;
    case 6: echo "It's June.<br>"; break;
    case 7: echo "It's July.<br>"; break;
    case 8: echo "It's August.<br>"; break;
    case 9: echo "It's September.<br>"; break;
    case 10: echo "It's October.<br>"; break;
    case 11: echo "It's November.<br>"; break;
    case 12: echo "It's December.<br>"; break;
    default: echo "Invalid Month.<br>"; break;
}
?>