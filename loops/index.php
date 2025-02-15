<?php
    for ($i = 1; $i < 11; $i++){
        echo ($i === 10) ? $i : $i . "-";
    }

    /////////////////////////////////////////
    echo "<br>";
    $num = 0;

    for ($i = 0; $i < 31; $i++){
        $num += $i;
    }
    echo $num . "<br>";
    ////////////////////////////////////

    function diamond($char) {
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $pos = strpos($chars, $char);
        
        if ($pos === false) {
            echo "Invalid character!";
            return;
        }
        
        $totalLines = 2 * $pos + 1;
        
        for ($i = 0; $i < $totalLines; $i++) {
            // For the first half (including the middle line)
            if ($i <= $pos) {
                $len = $i + 1;
            } 
            // For the lower half
            else {
                $len = $totalLines - $i;
            }
            // Print the first $len letters of the alphabet string
            echo substr($chars, 0, $len) . "<br>";
        }
    }

diamond("C");
?>
