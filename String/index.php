<?php
 $input_string ="input_string";
 
 $uppercase_string = strtoupper($input_string);
 echo "Uppercase: " . $uppercase_string . "<br>";

 $lowercase_string = strtolower($input_string);
 echo "Lowercase: " . $lowercase_string . "<br>";

 $ucfirst_string = ucfirst($input_string);
 echo "First letter uppercase: " . $ucfirst_string . "<br>";

 $ucwords_string = ucwords($input_string);
 echo "First letter of each word capitalized: " . $ucwords_string . "<br>";
/////////////

$time = "085119";

list($hours, $minutes, $seconds) = sscanf($time, "%2d%2d%2d");

$formatted_time = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);

echo "Formatted Time: " . $formatted_time;
//////////////
$sentence = "I am a full stack developer at orange coding academy";

// Word to search for
$word = "Orange";


if (stripos($sentence, $word) !== false) {
    echo "<br> Word Found!";
} else {
    echo "<br> Word Not Found!";
}
/////////////

$url = "www.orange.com/index.php";
$filename = basename($url);
echo "<br> File Name: " . $filename;
/////////////////////

$email = "info@orange.com";
$username = strstr($email, '@', true);
echo "<br> Username: " . $username;
////////////////////////////
$string = "info@orange.com";
echo "<br>" . substr($string,-3);
//////////////////////
$characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$passwordLength = 12;
$password = '';


for ($i = 0; $i < $passwordLength; $i++) {

    $randomIndex = random_int(0, strlen($characters) - 1);
    $password .= $characters[$randomIndex];
}
echo "<br> Generated Password: " . $password;
/////////////////
$sentence = 'That new trainee is so genius.';
$newWord = 'the';


$words = explode(' ', $sentence);
$words[0] = $newWord;
$modifiedSentence = implode(' ', $words);

echo "<br>Modified Sentence: " . $modifiedSentence;
////////////////////////
$word1 = "dragonball";
$word2 = "dragonboll";
$length = strlen($word1);

    for ($i = 0; $i < $length; $i++){
        if ($word1[$i] != $word2[$i]){
            echo "<br> First difference between two strings at position {$i}: {$word1[$i]} vs {$word2[$i]}";
        }
    }
////////////////
$stringg = "Twinkle, twinkle, little star.";
$array = explode(' ', $stringg);
var_dump($array);
/////////////////
$letters = str_split("abcdefghijklmnopqrstuvwxyz");
$count = count($letters);
$char = 'z';
for ($i = 0; $i < count($letters); $i++) {
    if ($letters[$i] === $char) {
        echo $letters[($i + 1) % $count];
    }
}
echo "<br>";
///////////////////////////////
  $original = "The brown fox";


  $newString = substr($original,0,  strpos($original,"brown")) . "quick" . " " . substr($original, strpos($original,"brown"));

    echo $newString;

//////////////////////////
echo "<br>";
$number = '0000657022.24';
echo  str_replace("0","", $number);
echo "<br>";
//////////////////////////////////////
$someString = "The quick brown fox jumps over the lazy dog";
$wordPos = strpos($someString, "fox");

$result = substr($someString,0,$wordPos) . substr($someString, $wordPos + strlen("fox"));
echo $result . "<br>";
////////////////////////////////////////
$words = "The quick brown fox jumps over the lazy dog---";

echo rtrim($words,"-") . "<br>";
///////////////////////////
$input = '\"\\1+2/3*2:2-3/4*3';
$output = preg_replace('/[^0-9]+/', ' ', $input);
echo "<br>" . trim($output);
//////////////////////////////////////
$input = 'The quick brown fox jumps over the lazy dog';

$output = implode(' ', array_slice(explode(' ', $input), 0, 5));

echo "<br>" . $output;
///////////////////////////////////////
$number = '2,543.12';
$output = str_replace(',', '', $number);
echo "<br>" . $output;
//////////////////////////////////////
echo "<br>" . implode(' ', range('a', 'z'));
//////////////////////////////////////////
?>