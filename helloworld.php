<?php
    echo "Section A";
    echo "<br>";
    $a = 5;
    $b = 10;
    $c = $a + $b;
    echo "<br>";
    echo $c;
    echo "<br>";
    echo "<br>";
    echo "Section B";
    echo "<br>";
    $magicword = "Donkey";
    echo "<br>";
    echo "Wonkey " . $magicword . " Monster!";
    echo "<br>";
    echo "<br>";
    echo "Section C";
    echo "<br>";
    $t = date("H");
    echo "<br>";
    if ($t % "2" == 0) {
        echo "Even!";
    } else {
        echo "Odd!";
    }
        
?>

