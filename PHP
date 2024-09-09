<?php
// Group6_ulnaganrosemarie_ex3.php

// Define the file path
$filePath = 'example.txt';

// Check if the file exists
if (file_exists($filePath)) {
    // Read the entire file content into a string
    $fileContent = file_get_contents($filePath);

    // Display the file content
    echo "Content of the file '$filePath' before modification:\n";
    echo nl2br(htmlspecialchars($fileContent)); // Convert newlines to <br> and escape HTML

    // Append new content to the file
    $additionalContent = "\nAppended content at " . date('Y-m-d H:i:s');
    file_put_contents($filePath, $fileContent . $additionalContent);

    // Read the updated content
    $updatedContent = file_get_contents($filePath);
    echo "\n\nContent of the file '$filePath' after modification:\n";
    echo nl2br(htmlspecialchars($updatedContent)); // Convert newlines to <br> and escape HTML

    // Read the file into an array (each line as an array element)
    echo "\n\nFile contents as an array:\n";
    $fileArray = file($filePath);
    foreach ($fileArray as $line) {
        echo htmlspecialchars($line) . "<br>";
    }
} else {
    // File does not exist, create it with initial content
    echo "The file '$filePath' does not exist. Creating the file...\n";

    $initialContent = "This is the initial content of the file.";
    file_put_contents($filePath, $initialContent);

    // Read the newly created file content
    $newFileContent = file_get_contents($filePath);
    echo "Content of the newly created file:\n";
    echo nl2br(htmlspecialchars($newFileContent)); // Convert newlines to <br> and escape HTML
}
?>
