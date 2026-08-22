<?php

    // --- BOOLEAN BASICS ---
    // Note: Booleans represent true or false. Echoing true outputs '1', while false outputs an empty string ("").
    echo true;  // Outputs 1
    echo false; // Outputs empty string

    // --- NUMBER COMPARISONS ---
    // Note: Comparison operators (<, >, ==, !=, <=, >=) return boolean values.
    echo 5 < 10;   // Outputs 1 (true)
    echo 5 > 10;   // Outputs empty string (false)
    echo 5 == 10;  // False
    echo 10 == 10; // True
    echo 5 != 10;  // True
    echo 5 <= 5;   // True
    echo 5 >= 5;   // True

    // --- STRING COMPARISONS ---
    // Note: Strings are compared alphabetically using character ASCII values.
    echo 'shaun' < 'yoshi'; // True (s comes before y)
    echo 'shaun' > 'yoshi'; // False
    echo 'shaun' == 'Shaun'; // False (case-sensitive)
    echo 'mario' == 'mario'; // True
    echo 'mario' == 'maria'; // False

    // --- LOOSE VS STRICT EQUALITY ---
    // Note: Loose equality (==) checks value only and converts types automatically (e.g., integer 5 equals string '5').
    echo 5 == '5';    // Outputs 1 (true)
    echo true == "1";  // Outputs 1 (true)
    echo false == "";  // Outputs 1 (true)

    // Note: Strict equality (===) checks both value AND data type.
    echo 5 === '5';   // Outputs empty string (false)
    echo 5 === 5;     // Outputs 1 (true)

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials - Booleans & Comparisons</title>
</head>
<body>

</body>
</html>