<?php
// File name
$filename = "hello.doc";

// Open or create the file
$file = fopen($filename, "w");

if ($file) {
    // Write text to the Word file
    fwrite($file, "Hello World\nThis is a simple Word document.");

    // Close the file
    fclose($file);

    echo "Word document created successfully!<br>";

    
    if (file_exists($filename)) {
        $text = file_get_contents($filename); // Read file content
        echo "<h3>Text inside the file:</h3>";
        echo nl2br($text); // Display text with line breaks
    } else {
        echo "File not found!";
    }

} else {
    echo "Failed to create the file.";
}
?>
