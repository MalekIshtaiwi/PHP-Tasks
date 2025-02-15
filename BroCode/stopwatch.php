<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="stopwatch.php" method="post">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php

    $seconds = 0;
    $running = true;
    echo isset($_POST["name"]);
    while ($running){

        if (isset($_POST["name"])){
            $running = false;
        }
        echo $seconds;
        $seconds++;
    }
?>