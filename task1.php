<?php
$file = "/Users/USER OS/Desktop/All Files/php course/Module 5/text1.txt";

if (file_exists($file)) {
    // Open the file
    $fileHandle = fopen($file, 'r');
    
    if ($fileHandle) {
        // Read the content of the file
        $content = fread($fileHandle, filesize($file));
        
        // Close the file
        fclose($fileHandle);
        
        // Display the content
        echo nl2br($content); // This will preserve line breaks in the content
    } else {
        echo "Failed to open the file.";
    }
} else {
    echo "File not found.";
}

