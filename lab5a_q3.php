<?php
// Function to calculate the area of a rectangle
function calculateArea($length, $width) {
    return $length * $width;
}

// Call the function with sample values
$length = 5; // Example value for length
$width = 10; // Example value for width
$area = calculateArea($length, $width);

// Display the result
echo "The area of the rectangle with a width of $width and $length and width is $area.";
?>
