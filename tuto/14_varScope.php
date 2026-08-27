<?php

    // --- 1. LOCAL VARIABLE SCOPE ---
    // Variables declared INSIDE a function only exist INSIDE that function.

    function myFunc(){
        $price = 10; // $price is local to myFunc()
        echo $price;
    }

    // myFunc(); // Output: 10
    // echo $price; 
    // ^ ERROR: Undefined variable $price! The outside code cannot see inside the function.


    function myFuncTwo($age){
        echo $age; // Parameters like $age are also local variables
    }

    // myFuncTwo(25); // Output: 25
    // echo $age; 
    // ^ ERROR: Undefined variable $age! Arguments passed in stay local.


    // --- 2. GLOBAL VARIABLE SCOPE ---
    // Variables declared OUTSIDE functions are global, but functions CANNOT see them by default.

    $name = 'aayracool'; // Global variable

    /*
    function sayHello(){
        global $name; // 'global' keyword pulls the outside $name inside this function
        $name = 'aayra'; // Overwrites the original global variable value!
        echo "hello $name";
    }

    sayHello(); // Output: hello aayra
    echo $name; // Output: aayra (The global $name was changed permanently!)
    */


    // --- 3. PASS BY REFERENCE (&$variable) ---
    // Using '&' passes the actual variable memory address, not just a copy.

    function sayBye(&$name){
        $name = 'ammar'; // Modifies the original $name variable directly
        echo "bye $name <br />";
    }

    // Output: bye ammar
    sayBye($name);

    // If you run 'echo $name;' down here now, it will output 'ammar' because &$name changed it!

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials - Variable Scope</title>
</head>
<body>

    <!-- Displaying the updated global variable -->
    <h1>Current Name: <?php echo $name; ?></h1>

</body>
</html>