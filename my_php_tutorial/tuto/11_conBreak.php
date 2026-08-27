<?php

    // --- CONDITIONAL STATEMENTS (IF / ELSEIF / ELSE) ---

    $price = 20;

    // Note: 'if' statements execute code only if a condition evaluates to true. 
    // 'elseif' checks a secondary condition if the first fails, and 'else' acts as a fallback for all remaining cases.
    if ($price < 10) {
        echo 'the condition is met (less than 10)';
    } elseif ($price < 20) {
        echo 'elseif condition met (less than 20)';
    } else {
        echo 'condition met fallback (20 or greater)';  
    }

    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lighting bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]
    ];

    // Note: You can use logical AND (&&) inside an 'if' statement to verify multiple conditions simultaneously.
    foreach ($products as $product) {
        if($product['price'] < 15 && $product['price'] > 2){
            echo $product['name'] . '<br />';
        }

        if($product['price'] < 20 || $product['price'] > 10){
            echo $product['name'] . '<br />';
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials - Conditional Statements</title>
</head>
<body>

  <div>
    <ul>
        <!-- Note: When embedding 'if' statements inside HTML blocks, use curly braces or alternative syntax to wrap the HTML elements -->
        <?php foreach($products as $product) { ?>
            <?php if($product['price'] > 15) { ?>
                <li><?php echo $product['name']; ?></li>
            <?php } ?>
        <?php } ?>
    </ul>
  </div>

</body>
</html>