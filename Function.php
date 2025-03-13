<?php

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

function myCalculator($num01, $oper, $num02) {
    $sum = 0;
    switch($oper) {
        case 'add':
            $sum = $num01 + $num02;
            break;
        case 'sub':
            $sum = $num01 - $num02;
            break;
        default:
            $sum = "There was an error: Invalid operation.";
            break;
    }
    return $sum;
}

// Get the inputs from the URL parameters
$num01 = isset($_GET["num01"]) ? (float) $_GET["num01"] : null;
$oper = isset($_GET["oper"]) ? $_GET["oper"] : null;
$num02 = isset($_GET["num02"]) ? (float) $_GET["num02"] : null;

// Debugging statements
echo "num01: " . $num01 . "<br>";
echo "oper: " . $oper . "<br>";
echo "num02: " . $num02 . "<br>";

if ($num01 !== null && $oper !== null && $num02 !== null) {
    echo "Result: " . myCalculator($num01, $oper, $num02);
} else {
    echo "Please provide num01, oper, and num02 parameters in the URL.";
}
?>
