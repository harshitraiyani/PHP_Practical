<?php
$month = date("n");

if ($month == 1)
{
    echo "Current Month: January<br>";
}
elseif ($month == 2)
{
    echo "Current Month: February<br>";
}
elseif ($month == 3)
{
    echo "Current Month: March<br>";
}
elseif ($month == 4)
{
    echo "Current Month: April<br>";
}
elseif ($month == 5)
{
    echo "Current Month: May<br>";
}
elseif ($month == 6)
{
    echo "Current Month: June<br>";
}
elseif ($month == 7)
{
    echo "Current Month: July<br>";
}
elseif ($month == 8)
{
    echo "Current Month: August<br>";
}
elseif ($month == 9)
{
    echo "Current Month: September<br>";
}
elseif ($month == 10)
{
    echo "Current Month: October<br>";
}
elseif ($month == 11)
{
    echo "Current Month: November<br>";
}
else
{
    echo "Current Month: December<br>";
}

echo "<br>Using switch case:<br>";
switch ($month)
{
    case 1:
        echo "January<br>";
        break;
    case 2:
        echo "February<br>";
        break;
    case 3:
        echo "March<br>";
        break;
    case 4:
        echo "April<br>";
        break;
    case 5:
        echo "May<br>";
        break;
    case 6:
        echo "June<br>";
        break;
    case 7:
        echo "July<br>";
        break;
    case 8:
        echo "August<br>";
        break;
    case 9:
        echo "September<br>";
        break;
    case 10:
        echo "October<br>";
        break;
    case 11:
        echo "November<br>";
        break;
    case 12:
        echo "December<br>";
        break;
}
?>
