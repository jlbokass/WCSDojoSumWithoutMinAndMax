<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dojo Sum Without Min and Max</title>
</head>
<body>
<h1>Enoncé:</h1>

<p>Sum all the numbers of the array except the highest and the lowest element (the value, not the index!).
    (Only one element at each edge, even if there are more than one with the same value!).<br>Example:</p>
<ul>
    <li>
        [6, 2, 1, 8, 10] => 16
    </li>
    <li>
        [1, 1, 11, 2, 3] => 6
    </li>
</ul>
<p>If array is empty or null, or if only 1 Element exists, return 0.</p>

<h2>Test</h2>
<?php
include_once "function.php";
$testOne = [1, 1, 2, 2, 4];
var_dump(min($testOne));
die();
$testTwo = [2];
$testTree = [2, 4, 7, 15];
$testFour = [5, 20, 89, 0];

echo sumArray($testOne);
?>
</body>
</html>