<?php
function linearSearch($array, $target) {
    // Loop through each element in the array
    for ($i = 0; $i < count($array); $i++) {
        // Check if the current element matches the target
        if ($array[$i] == $target) {
            return $i; // Return the index if found
        }
    }
    return -1; // Return -1 if the target is not found
}

// Creates an array of 10 elements
$numbers = [10, 25, 30, 45, 50, 65, 70, 85, 90, 100];

// asking user for input
echo "Enter value to search: ";
$handle = fopen("php://stdin", "r"); // Open standard input
$input = trim(fgets($handle)); // Read user input and remove whitespace

// this will search for the input value in the array
$index = linearSearch($numbers, $input);

// this is where the output result
if ($index != -1) {
    echo "$input found at index $index.\n";
} else {
    echo "$input not found.\n";
}
?>
