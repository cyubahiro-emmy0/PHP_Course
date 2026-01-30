<?php
// File name
$filename = "hello.doc";

// -----------------------------
// 1. Create and write to the file
// -----------------------------
$file = fopen($filename, "w"); // Open for writing

if ($file) {
    fwrite($file, "Hello World\nThis is a simple Word document."); // Write text
    fclose($file); // Close the file

    echo "Word document created successfully!<br>";

    // -----------------------------
    // 2. Read and display the file content using fopen/fread/fclose
    // -----------------------------
    $file = fopen($filename, "r"); // Open for reading

    if ($file) {
        // Read the entire file content
        $filesize = filesize($filename); // Get size of file
        $content = fread($file, $filesize); // Read file content
        fclose($file); // Close file after reading

        echo "<h3>Text inside the file:</h3>";
        echo nl2br($content); // Show with line breaks
    } else {
        echo "Failed to open the file for reading.";
    }

} else {
    echo "Failed to create the file.";
}
?>
