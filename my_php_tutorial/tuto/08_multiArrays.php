<?php

    // --- MULTIDIMENSIONAL ARRAYS ---
    // Note: Multidimensional arrays contain other arrays inside them, helpful for structuring complex data like blog posts.
    $blogs = [
        ['title'=> 'mario party', 'author'=>'mario', 'content'=>'lorem', 'likes'=>30],
        ['title'=> 'mario kart cheats', 'author'=>'toad', 'content'=>'lorem', 'likes'=>25],
        ['title'=> 'zelda hidden chests', 'author'=>'link', 'content'=>'lorem', 'likes'=>50]
    ];

    // Note: Use count() to check how many outer items/rows are in the array.
    echo count($blogs); // Outputs 3

    // Note: Append a completely new associative array row using empty brackets [].
    $blogs[] = ['title'=> 'castle party', 'author'=>'peach', 'content'=>'lorem', 'likes'=>100];

    // Note: array_pop() removes the last element off the end of an array and returns it.
    $popped = array_pop($blogs);
    print_r($popped);

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials - Multidimensional Arrays</title>
</head>
<body>

</body>
</html>