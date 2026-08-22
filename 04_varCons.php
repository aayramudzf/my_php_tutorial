<?php

    // Note: define() creates a constant. Constants CANNOT be changed later in the script.
    // Note: Constant names are typically written in ALL_CAPS by convention.
    define('NAME', 'Yoshi');

    // Note: $ creates a variable. Variables CAN be reassigned or changed.
    $age = 20;

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials</title>
</head>
<body>

    <h1>User Profile Page</h1>

    <!-- Note: Outputting the constant (no $ sign needed for constants) -->
    <div><?php echo NAME; ?></div>

    <!-- Note: Outputting the regular variable -->
    <div><?php echo $age; ?></div>

</body>
</html>