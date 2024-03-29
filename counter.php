<?php
// File to store the count
$counter_file = 'count.txt';

// Read the count from the file
$counter = (file_exists($counter_file)) ? intval(file_get_contents($counter_file)) : 0;

// Increment the count
$counter++;

// Write the updated count back to the file
file_put_contents($counter_file, $counter);

// Output the count
echo $counter;
?>
