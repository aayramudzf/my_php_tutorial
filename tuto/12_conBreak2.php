<?php

    // --- CONDITIONAL RECAP (IF / ELSEIF / ELSE) ---
    // Note: Basic structure for checking conditions.
    // $price = 20;

    // if ($price < 10) {
    //   echo 'the condition is pro';
    // } elseif ($price < 20) {
    //   echo 'elseif condition pro';
    // } else {
    //   echo 'condition is noob';  
    // }

    // --- ASSOCIATIVE ARRAY SETUP ---
    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lighting bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]
    ];

    // --- LOOP CONTROL: BREAK & CONTINUE ---
    foreach ($products as $product) {

        // Note: 'break' stops the loop execution completely and exits early when the condition is met.
        if ($product['name'] === 'lighting bolt') {
            break;
        }

        // Note: 'continue' skips the rest of the current iteration's code and jumps directly to the next item in the loop.
        if ($product['price'] > 15) {
            continue;
        }

        // Outputs the product name only if it wasn't skipped by 'continue' or stopped by 'break'
        echo $product['name'] . '<br />';

    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials - Break & Continue</title>
</head>
<body>

</body>
</html>