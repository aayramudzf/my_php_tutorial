<?php

    // --- LOOPS LESSON ---

    $ninjas = ['shaun', 'ryu', 'yoshi'];

    // Note: 'for' loops execute a block of code a specified number of times using an initializer ($i=0), condition ($i<count), and increment ($i++).
    for($i = 0; $i < count($ninjas); $i++) {
        echo $ninjas[$i] . '<br />';
    }

    // Note: 'foreach' loops iterate over each element in an array, automatically assigning the current item to a variable ($ninja).
    foreach($ninjas as $ninja){
        echo $ninja . '<br />';
    }

    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lighting bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]
    ];

    // Note: foreach loops can easily access key/value data within multidimensional array items.
    foreach($products as $product){
        echo $product['name'] . ' - ' . $product['price'];
        echo '<br />';
    }

    $i = 0;

    // Note: 'while' loops execute continuously AS LONG AS the specified condition evaluates to true. 
    // Always remember to update the counter ($i++) inside to prevent infinite loops!
    while($i < count($products)){
        echo $products[$i]['name'];
        echo '<br />';
        $i++;
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials - Loops</title>
</head>
<body>

    <h1>Products</h1>
    <ul>
        <!-- Note: We can open/close PHP tags inside HTML to render structured lists using foreach -->
        <?php foreach($products as $product){ ?>

            <h3><?php echo $product['name']; ?></h3>
            <p>£ <?php echo $product['price']; ?></p>

        <?php } ?>
    </ul>

</body>
</html>