<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action = "index.php" method="post">
    <label for="x">x:</label>
    <input type="text" name="x"><br>
    <label for="y">y:</label>
    <input type="text" name="y"><br>
    <label for="z">z:</label>
    <input type="text" name="z"><br>
    <input type="submit" value="total">

</form>

</body>
</html>

<?php
    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];
    // $total = null;
    // $total = abs($x);
    // $total = round($x);
    // $total = floor($x);
    // $total = ceil($x);
    // $total = sqrt($x);
    // $total = pow($x,$y);
    // $total = $x ** $y;
    // $total = max($x,$y,$z);
    // $total = min($x,$y,$z);
    // $total = pi();
    // $total = rand();
    // $total = rand(1,6);
    // $total = round($x, 2);  // rounds to the second digit
    // echo $total;

    $cars = array("Mitsubishi", "Kia", "Ferrari", "Mercides");
    $cars[1] = "Honda";
    array_push($cars, "Hyundai", "Porche", "Dodge");
    array_pop($cars);
    array_shift($cars);
    $reversed_cars = array_reverse($cars);
    echo count($reversed_cars);
    
    foreach ($reversed_cars as $car){
        echo $car . "<br>";
    }
?>