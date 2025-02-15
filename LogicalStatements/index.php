<?php

function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo " This year is a leap year";
        return true;
    } else {
        echo "This year is not a leap year";
        return false;
    }
}
echo "<br>";
/////////////////////////
$temp = 22;
if ($temp < 20) {
    echo "It is wintertime!" . "<br>";
} else {
    echo "It is summertime!" . "<br>";
}
echo "<br>";
///////////////////////////////////
function sumOrTriple($x, $y) {
    $sum = $x + $y;
    
    if ($x == $y) {
        $sum *= 3;
    }
    return $sum;
}
echo "<br>";
////////////////////////////////
function checkSum($x, $y) {
    $sum = $x + $y;
    
    if ($sum == 30) {
        return $sum;
    } else {
        return "false";
    }
}
echo "<br>";
/////////////////////////////////
function isMultipleOfThree($number) {
    if ($number % 3 == 0) {
        return "true";
    } else {
        return "false";
    }
}
echo "<br>";
//////////////////////////////////////////
function isInRange($number) {
    if ($number >= 20 && $number <= 50) {
        return "true";
    } 
return "false";
    
}
echo "<br>";
/////////////////////////////////////////////
function largest($numbers) {
    return max($numbers);
}
echo largest([1, 5, 9]);
echo "<br>";
/////////////////////////////////////////
function bill ($units){
    $bill = 0;
    if ($units <=50){
        $bill = $units * 2.5;
    } elseif ($units <= 150){
        $bill = (50 * 2.5) + (($units - 50) * 5);
    } else if ($units <= 250){
        $bill = (50 * 2.5) + (100 * 5) + (($units - 150) * 6.2);
    } else {
        $bill = (50 *2.5) + (100 * 5) + (100 * 6.2) + (($units - 250) * 7.5);
    }

    return $bill;
}
echo "<br>";
///////////////////////////////////////////////////////////
function calculator($num1, $num2, $operation) {
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num1 / $num2;
        default:
            return "Error: Invalid operation.";
    }
}
echo "<br>";
////////////////////////////////////////////////
$age = 16;
if ($age >= 18) {
    echo "The person is eligible to vote.";
} else {
    echo "The person is not eligible to vote.";
}
echo "<br>";
///////////////////////////////////
$number = -6;
if ($number > 0) {
    echo "Positive";
} elseif ($number < 0) {
    echo "Negative";
} else {
    echo "Zero";
}
echo "<br>";
/////////////////////////////////////
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$average = array_sum($scores) / count($scores);

if ($average < 60) {
    echo 'F';
} elseif ($average < 70) {
    echo 'D';
} elseif ($average < 80) {
    echo 'C';
} elseif ($average < 90) {
    echo 'B';
} else {
    echo 'A';
}
?>