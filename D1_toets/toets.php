<!DOCTYPE html>
<html lang="nl">
<head>
    <title>PHP Toets D1</title>
</head>
<body>

<h1>PHP Toets D1</h1>

<?php

echo "<pre>\n";

// *** Exercise 1 ***

/*    echo​ "Sed ut perspiciatis unde omnis iste natus error sit
voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
dicta sunt explicabo."; */

// for​($i=0; $i<100; $i++) {}

// *** Exercise 2 ***
echo "\n*** Exercise 2 ***\n\n";

$a = 1000;
$b = 1200;
$c = 1400;

echo "The sum of a,b and c is " . ($a + $b + $c) . "\n";

// *** Exercise 3 ***
echo "\n*** Exercise 3 ***\n\n";

/* The values of the variables $number1 and $number2 are not available
within the function, the variables are initialized in the global scope,
not in the local scope. */

// *** Exercise 4 ***
echo "\n*** Exercise 4 ***\n\n";

$testString = "Hello World";
echo strtolower($testString) . "\n";

// *** Exercise 5 ***
echo "\n*** Exercise 5 ***\n\n";

$name = "George";
$age = 50;
$male = true​;
$list = [1,2,5,8,9];

// Ik krijg een merkwaardige fout:
// Warning:  Use of undefined constant true​ - assumed 'true​' (this will throw an Error in a future version of PHP) in C:\xampp\htdocs\toets.php on line 50
// Dit maakt van de string een boolean:
settype($male, 'boolean');

echo "Value is " . gettype($name) . "\n";
echo "Value is " . gettype($age)  . "\n";
echo "Value is " . gettype($male) . "\n";
echo "Value is " . gettype($list) . "\n";

// *** Exercise 6 ***
echo "\n*** Exercise 6 ***\n\n";

echo (5 + 10) . "\n";
echo (5 - 10) . "\n";
echo (5 / 10) . "\n";
echo (5 * 10) . "\n";
echo (5 ** 10) . "\n";

// *** Exercise 7 ***
echo "\n*** Exercise 7 ***\n\n";

$string = "the quick brown fox jumps over the lazy dog.";
echo substr_replace($string, "That", 0, 3) . "\n";

// *** Exercise 8 ***
echo "\n*** Exercise 8 ***\n\n";

$temperature = 10;

if ($temperature <= 50) {
    echo "temperature is low\n";
} else {
    echo "temperature is ok\n";
}

// *** Exercise 9 ***
echo "\n*** Exercise 9 ***\n\n";

$array = [ 'New York City', 'Seoul', 'Tokyo', 'Mexico City', 'Shanghai', 'Lagos', 'Cairo', 'Buenos Aires', 'London and Mumbai' ];
sortAndPrint($array);
array_push($array, 'Calcutta', 'Los Angeles', 'Osaka', 'Beijing');
sortAndPrint($array);

function sortAndPrint($array) {
    sort($array);
    echo join(',', $array) . "\n";
}

echo "</pre>\n";

// *** Exercise 10 ***
echo "\n<pre>*** Exercise 10 ***</pre>\n\n";

echo "<table border=\"1\">\n";
for ($i=1; $i<=5; $i++) {
    echo "  <tr>\n";
    for ($j=1; $j<=5; $j++) {
        echo "    <td>" . $i * $j . "</td>\n";
    }
    echo "  </tr>\n";
}
echo "</table>\n";

// *** Exercise 11 ***
echo "\n<pre>*** Exercise 11 ***</pre>\n\n";

echo "<form>\n";
echo '  Width: <input type="text" name="width">' . "\n";
echo '  Height: <input type="text" name="height">' . "\n";
echo '  <input type="submit" value="Calculate Area">' . "\n";
echo "</form>\n";

if (isset($_GET['width']) &&
    isset($_GET['height']) &&
    is_numeric($_GET['width']) &&
    is_numeric($_GET['height'])
) {
    calculateArea($_GET['width'], $_GET['height']);
}

function calculateArea($width, $height) {
    echo "The calculated area of width $width and height $height is: "
        . $width * $height;
}


?>

</body>
</html>
