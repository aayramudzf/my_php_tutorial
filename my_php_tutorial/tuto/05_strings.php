<?php

  $stringOne = 'my email is ';
  $stringTwo = 'aayracool@gmail.com';

  // Note: Use a dot (.) to concatenate (join) two strings together.
  echo $stringOne . $stringTwo;

  $name = 'aayrahebat';

  // Note: Double quotes (" ") allow variable interpolation, meaning variables are evaluated inside the string.
  // Single quotes (' ') treat everything literally.
  echo "Hey my name is $name";

  // Note: Use a backslash (\) as an escape character to include double quotes inside double quotes.
  echo "the noob screamed \"wowza\"";

  // Note: Access individual characters in a string using square brackets and index numbers (starts at 0).
  echo $name[1]; // Outputs 'a'

  // --- COMMON STRING FUNCTIONS ---

  // Note: strlen() returns the total length of a string.
  echo strlen($name);

  // Note: strtoupper() converts all characters in a string to uppercase.
  echo strtoupper($name);

  // Note: strtolower() converts all characters in a string to lowercase.
  echo strtolower($name);

  // Note: str_replace(search, replace, subject) replaces specific characters inside a string.
  echo str_replace('h', 'w', $name);

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials - Strings</title>
</head>
<body>

</body>
</html>