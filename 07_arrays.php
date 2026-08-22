<?php

    // --- INDEXED ARRAYS ---
    // Note: Indexed arrays use numeric positions starting from index 0.
    $peopleOne = ['shaun', 'crystal', 'ryu'];
    $peopleTwo = array('ken', 'chun-li');
    echo $peopleOne[1]; // Outputs 'crystal'

    $ages = [20, 30, 40, 50];

    // Note: Overwrite an existing array element by targeting its index position.
    $ages[1] = 25;

    // Note: Empty brackets [] automatically append a new value to the end of the array.
    $ages[] = 60;

    // Note: array_push() adds one or more elements to the end of an array.
    array_push($ages, 70);
    print_r($ages);

    // Note: count() returns the total number of items stored inside an array.
    echo count($ages);

    // Note: array_merge() combines two indexed arrays into a single array.
    $peopleThree = array_merge($peopleOne, $peopleTwo);
    print_r($peopleThree);

    
    // --- ASSOCIATIVE ARRAYS ---
    // Note: Associative arrays use custom key => value pairs instead of numeric indexes.
    $ninjasOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
    echo $ninjasOne['mario']; // Outputs 'orange'

    $ninjasTwo = array('michael' => 'pink', 'peach' => 'yellow');

    // Note: Add a new key-value pair by specifying the new key name in brackets.
    $ninjasTwo['simon'] = 'blue';
    print_r($ninjasTwo);

    // Note: array_merge() works on associative arrays to combine their key-value pairs.
    $ninjasThree = array_merge($ninjasOne, $ninjasTwo);
    print_r($ninjasThree);

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials - Arrays</title>
</head>
<body>

</body>
</html>