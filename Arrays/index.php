<?php
$colors = ['red', 'green', 'white'];

$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$colors[0]} carpet,
the {$colors[1]} lawn, the {$colors[2]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo $paragraph . "<br>";
//////////////////////////////////////////
$colors = array('white', 'green', 'red');
echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>" . "<br>";
///////////////////////////////
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", 
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", 
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

asort($cities);

foreach($cities as $key => $value){
    echo "The capital of {$key} is {$value} <br>";
}
/////////////////////////////////////////// this one solved in 2 ways
/////////the stupid way : 
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
 echo $color[4] . "<br>";
//////////////the better way : 
echo reset($color) . "<br>";
//////////////////////////////////
$array = [1, 2, 3, 4, 5];

array_splice($array, 3, 0, '$');

echo implode(' ', $array) . "<br>";
////////////////////////////////

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $value) {
    echo "$key = $value\n";
}
echo "<br> <br>";
////////////////////////////////////
$values = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 
65, 64, 68, 73, 75, 79, 73];
$average = number_format(array_sum($values) / count($values),1);

sort($values);
$fiveLowest = array_slice($values, 0, 5);
$fiveHighest = array_slice($values, -5);
echo "Average Temperature is: " . $average . "<br>";
echo "List of five lowest temperatures: " . implode(", ", $fiveLowest) . "<br>";
echo "List of five highest temperatures: " . implode(", ", $fiveHighest) . "<br> <br>";
///////////////////////////////////////
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
echo "<br>";
///////////////////////////////////////
function convertToUpper($array) {
    print_r (array_map('strtoupper', $array));
}

$colors = array("red", "blue", "white", "yellow");
convertToUpper($colors);
echo "<br>";
/////////////////////////////////////////
function convertToLower($array) {
    print_r (array_map('strtolower', $array));
}

$colors = array("RED","BLUE", "WHITE","YELLOW");
convertToLower($colors);
echo "<br>";

/////////////////////////////////
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0){
        echo $i . " ";
    }
}
echo "<br>";
//////////////////////////////////
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");
$shortestLength = strlen($words[0]);
$longestLength = strlen($words[0]);

foreach ($words as $word) {
    if (strlen($word) < $shortestLength) {
        $shortestLength = strlen($word);
    }
    if (strlen($word) > $longestLength) {
        $longestLength = strlen($word);
    }
}
echo "The shortest array length is " . $shortestLength . ". " . "<br>";
echo "The longest array length is " . $longestLength . "." . "<br>";
/////////////////////////////////

$numbers = [];
 for ($i = 0; count($numbers) < 10; $i++) {
     $rand = rand(11, 20);
      if (!in_array($rand, $numbers)){
      array_push($numbers, $rand); 
      echo $rand . " ";
      }
    }
echo "<br>";
///////////////////////////////////////////////////////////
$array = array(2, 0, 10, 12, 6);
$lowest = $array[0];
foreach ($array as $number){
    if ($number < $lowest && $number !== 0)
    $lowest = $number;
}
echo $lowest;
?>