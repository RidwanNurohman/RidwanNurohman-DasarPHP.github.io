<?php
    $a = true;
    $b = false;

    $c = $a && $b;
    print("%b && %b = %b , $a,$b,$c");
    echo "<br>";
    var_dump($c);
    echo "<br>";

    $c = $a || $b;
    print("%b || %b = %b , $a,$b,$c");
    echo "<br>";
    var_dump($c);
    echo "<br>";

    $c = !$a;
    print("!%b = %b = %b , $a,$c");
    echo "<br>";
    var_dump($c);
    echo "<br>";
    ?>