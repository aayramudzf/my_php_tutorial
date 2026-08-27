<?php

    // --- FUNCTIONS & DEFAULT PARAMETERS ---

    // Note: Default values ($name = 'aayra', $time = 'morning') are used if arguments are omitted when calling the function.
    // Fixed: Added the missing comma between parameters.
    function say_hello($name = 'aayracool', $time = 'morning'){
        echo "good $time $name <br />";
    }

    // Output: good morning aayracool (uses default $time)
    say_hello('aayracool');

    // Output: good night morning (Overriding the 1st parameter '$name', leaving '$time' as default)
    say_hello('night'); 


    // --- RETURNING VALUES FROM FUNCTIONS ---

    // Note: Best practice is using 'return' to pass data back to the caller instead of directly echoing inside the function.
    function formatProduct($product){
        return "{$product['name']} costs £{$product['price']} to buy <br />"; 
    }

    // Store the returned string into a variable first
    $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
    
    // Echo the result to the browser
    echo $formatted;

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials - Functions</title>
</head>
<body>

  <!-- Example of calling the function directly inside HTML body -->
  <p><?php echo formatProduct(['name' => 'green shell', 'price' => 10]); ?></p>

</body>
</html>