<?php
$file = "/Users/USER OS/Desktop/All Files/php course/Module 5/text1.txt";
$data = "Please add Tamin Iqbal in squard";

// Open the file in append mode
$fileHandle = fopen($file, 'a');

if ($fileHandle) {
    // Write the data to the file
    fwrite($fileHandle, $data);
    
    // Close the file
    fclose($fileHandle);
    echo "Data appended successfully!";
} else {
    echo "Failed to open the file for appending.";
}

