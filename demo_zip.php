<?php

// All examples use the Zip extension
// Download extension at http://pecl.php.net/package/zip
// Documentation at http://www.php.net/manual/en/book.zip.php

# Check if the extension is loaded or version extension if exists
if (extension_loaded('zip')) {
    echo 'Zip extension is loaded'."\n";
    echo 'Zip extension version: ' . phpversion('zip')."\n";
} else {
    echo 'Zip extension is not loaded';
    die;
}

# Set up
$dirContent = 'demo/zip_test';

# Create a new ZipArchive 
// $zip = new ZipArchive();
// if ($zip->open("$dirContent/example.zip", ZipArchive::CREATE) === TRUE) {
//     $zip->addFile("$dirContent/file1.txt");
//     $zip->addFile("$dirContent/file2.txt");
//     $zip->close();
//     echo "ZIP archive created successfully."."\n";
// } else {
//     echo "Failed to create ZIP archive."."\n";
// }

# Extract a ZIP archive
// $zip = new ZipArchive();
// if ($zip->open("$dirContent/example.zip") === TRUE) {
//     $zip->extractTo('extracted_files/');
//     $zip->close();
//     echo "Extraction completed.";
// } else {
//     echo "Failed to extract ZIP archive.";
// }

# List files in a ZIP archive
// $zip = new ZipArchive();
// if ($zip->open("$dirContent/example.zip") === TRUE) {
//     for ($i = 0; $i < $zip->numFiles; $i++) {
//         echo "File #" . ($i + 1) . ": " . $zip->getNameIndex($i) . "\n";
//     }
//     $zip->close();
// } else {
//     echo "Failed to read ZIP archive.";
// }

# Delete a file from a ZIP archive
// $zip = new ZipArchive();
// if ($zip->open("$dirContent/example.zip") === TRUE) {
//     $zip->deleteName('file1.txt');
//     $zip->close();
//     echo "File deleted from ZIP archive.";
// } else {
//     echo "Failed to modify ZIP archive.";
// }

# Update a file in a ZIP archive
// $zip = new ZipArchive();
// if ($zip->open("$dirContent/example.zip") === TRUE) {
//     $zip->addFile("$dirContent/file1.txt");
//     $zip->close();
//     echo "ZIP archive updated.";
// } else {
//     echo "Failed to update ZIP archive.";
// }

# Check integrity of a ZIP archive
// $zip = new ZipArchive();
// if ($zip->open("$dirContent/example.zip") === TRUE) {
//     if ($zip->status === ZipArchive::ER_OK) {
//         echo "ZIP archive is valid.";
//     } else {
//         echo "ZIP archive is invalid.";
//     }
//     $zip->close();
// } else {
//     echo "Failed to read ZIP archive.";
// }

# Setting password for a ZIP archive
// $zip = new ZipArchive();
// if ($zip->open("$dirContent/example.zip", ZipArchive::CREATE) === TRUE) {
//     $zip->setPassword('secret');
//     $zip->addFile("$dirContent/protected.txt");
//     $zip->setEncryptionName('protected.txt', ZipArchive::EM_AES_256);
//     $zip->close();
//     echo "Password-protected ZIP created.";
// } else {
//     echo "Failed to create secure ZIP.";
// }

# Create in-memory ZIP archive
// $zip = new ZipArchive();
// $filename = "$dirContent/example.zip";

// if ($zip->open($filename, ZipArchive::CREATE) === TRUE) {
//     $zip->addFromString("file1.txt", "This is a test file hehe.");
//     $zip->close();
    
//     echo "In-memory ZIP archive created.";
// } else {
//     echo "Failed to create in-memory ZIP archive.";
// }