<?php
// This is a single line comment
echo "Hello World!\n";  // Adding \n for line break

$name = "june";
echo "My name is $name\n";  // Adding \n for line break
var_dump($name);  // Outputs: string(4) "june"
echo "\n";  // Line break after var_dump output

$age = 20;
echo "I am $age years old\n";  // Adding \n for line break
var_dump($age);  // Outputs: int(20)
echo "\n";  // Line break after var_dump output

$base = 10;
$height = 5;
$area = ($base * $height) / 2;  // Correct formula for the area of a triangle
echo "The area of the triangle is $area\n";  // Adding \n for line break

$name = "june";
echo "The length of the name is " . strlen($name) . "\n";  // Adding \n for line break

$name = "june";
$name = str_replace("j", "J", $name);
echo $name . "\n";  // Outputs: June


?>
