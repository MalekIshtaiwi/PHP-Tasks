<?php


function isPrime($x){
    if ($x <= 1) {
        echo "{$x} is not a prime number";
        return false;
    }

    for ($i = 2; $i < $x; $i ++){
        if ($x % $i === 0){
            echo "{$x} is not a prime number";
            return false;
        }
    }
    echo "{$x} is a prime number";
    return true;
}

isPrime(6);
echo "<br>";
///////////////////////////// repeated exercise so i'll just use a predefined method
$string = "remove";
function reverse($string){
    return strrev($string);
}
echo reverse($string) . "<br>";
////////////////////////////////
$string = "remove";
function isAllLower($string){
if ($string === strtolower($string))
    return "Your String is Ok";
return "Your String is not Ok";
}

echo isAllLower($string) . "<br>";
/////////////////////////////// refactor so that we can still call $x and $y instead of indexes
function swap($x, $y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
    return array("\$x" => $x ,"\$y" => $y);
}
$x = 4;
$y = 10;
$newArr = swap($x,$y);

echo $newArr["\$x"] . "<br>";
///////////////////////////////////
function isArmstrong($x){
$arr = str_split($x);
$sum = 0;
    foreach ($arr as $y){
    $sum += $y ** count($arr);
}
    if ($sum === $x)
        echo "{$x} is an Armstrong number";
    else
        echo "{$x} is not an Armstrong number";
}
isArmstrong(1634);
echo "<br>";
//////////////////////////// repeated exercies so i'll use a predefined function
function isPalindrome($string){
    if(strtolower(preg_replace('/[^A-Za-z0-9]/', '', $string)) === strtolower(strrev(preg_replace('/[^A-Za-z0-9]/', '', $string)))){
        echo "Yes it is a palindrome" . "<br>";
    }
    else
    echo "No it's not a palindrome" . "<br>";
}
$string = "Eva, can I see bees in a cave?";
isPalindrome($string);

////////////////////////////////////////
function removeDuplicates ($array){
    $uniArr = [];
    foreach ($array as $num){
    $uniArr[$num] = $num;
    }
    foreach ($uniArr as $num){
        echo $num . " ";
    }
    return $uniArr;
}
$array = [81,2, 4, 7, 4, 8, 4];

removeDuplicates($array);





?>