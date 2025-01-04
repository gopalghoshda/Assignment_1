<?php

// Given array of random strings
$randomStrings = ["Apple", "banana", "Apricot", "grape", "avocado", "Mango", "almond"];

// Step 1: Filter strings that start with the letter 'A' (case-insensitive)
$filteredStrings = array_filter($randomStrings, function ($string) {
    return stripos($string, 'A') === 0;
});

// Step 2: Convert all strings in the filtered array to uppercase
$uppercaseStrings = array_map('strtoupper', $filteredStrings);

// Step 3: Display the resulting array
print_r($uppercaseStrings);

?>
