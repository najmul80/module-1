<?php

define("FACTORE", 9/5);
define("OFFSET", 32);

echo "Enter a temperature value: ";
$temperature = (float) readline();

echo "Convert to (1: Fahrenheit, 2: Celius): ";
$choice = (int) readline();

switch ($choice) {
    case 1:
        $result = $temperature * FACTORE + OFFSET;
        echo "Tempurature in Fahrenheit: $result";
        break;

    case 2:
        $result = ($temperature - OFFSET) / FACTORE;
        echo "Tempurature in Celcius: $result";
        break;

    default:
        echo "Invalid choice";
        break;
}