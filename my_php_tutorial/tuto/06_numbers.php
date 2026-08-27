<?php

    $radius = 25;
    $pi = 3.14; // Note: Pi is approximately 3.14
    
    // Note: Basic math operators include *, /, +, -, and ** (power/exponent).
    echo $pi * $radius ** 2;
    
    // Note: PHP follows BIDMAS/PEMDAS rules for order of operations (brackets first, then powers, division/multiplication, addition/subtraction).
    echo 2 * (4 + 9) / 3;

    // Note: ++ increases a variable's value by 1, while -- decreases it by 1.
    $radius++;
    echo $radius;

    // Note: Shorthand operators combine a math operation with assignment (e.g., $age += 10 is the same as $age = $age + 10).
    $age = 20;
    $age += 10;
    echo $age;

    // --- NUMBER FUNCTIONS ---

    // Note: floor() rounds a floating-point number DOWN to the nearest integer.
    echo floor($pi);

    // Note: ceil() rounds a floating-point number UP to the nearest integer.
    echo ceil($pi);

    // Note: pi() is a built-in PHP function that returns the value of Pi.
    echo pi();

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials - Numbers</title>
</head>
<body>

</body>
</html>