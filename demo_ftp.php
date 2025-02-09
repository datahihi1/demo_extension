<?php

// All examples use the FTP extension
// Documentation at http://www.php.net/manual/en/book.ftp.php

/* Deprecation Warning: 
The PHP FTP extension is being deprecated in favor of modern alternatives. 
Consider using SFTP (via phpseclib) for secure file transfer when possible.
Demo on PHP: 8.1.10
*/

# Check if the extension is loaded or version extension if exists
if (extension_loaded('ftp')) {
    echo 'FTP extension is loaded'."\n";
    echo 'FTP extension version: ' . phpversion('ftp')."\n";
} else {
    echo 'FTP extension is not loaded';
    die;
}

# Set up (replace with your website)
$ftpServer = 'demoxxx.xxx';
$ftpUser = 'xxx';
$ftpPass = 'xxx';
$ftpDir = '/public_html';

$localFile = 'demo/ftp_test/file1.txt';
$remoteFile = 'file2.txt';

# Connect to an FTP server
// $ftp = ftp_connect($ftpServer);
// if ($ftp) {
//     echo "Connected to $ftpServer"."\n";
//     ftp_close($ftp);
// } else {
//     echo "Failed to connect to $ftpServer"."\n";
// }

# Log in to an FTP server
// $ftp = ftp_connect($ftpServer);
// if ($ftp) {
//     $login = ftp_login($ftp, $ftpUser, $ftpPass);
//     if ($login) {
//         echo "Logged in to $ftpServer"."\n";
//     } else {
//         echo "Failed to log in to $ftpServer"."\n";
//     }
//     ftp_close($ftp);
// } else {
//     echo "Failed to connect to $ftpServer"."\n";
// }

# Change the current directory on an FTP server
// $ftp = ftp_connect($ftpServer);
// if ($ftp) {
//     $login = ftp_login($ftp, $ftpUser, $ftpPass);
//     if ($login) {
//         $dir = ftp_chdir($ftp, $ftpDir);
//         if ($dir) {
//             echo "Changed directory to $ftpDir"."\n";
//         } else {
//             echo "Failed to change directory to $ftpDir"."\n";
//         }
//     } else {
//         echo "Failed to log in to $ftpServer"."\n";
//     }
//     ftp_close($ftp);
// } else {
//     echo "Failed to connect to $ftpServer"."\n";
// }

# Get the root directory on an FTP server
// $ftp = ftp_connect($ftpServer);
// if ($ftp) {
//     $login = ftp_login($ftp, $ftpUser, $ftpPass);
//     if ($login) {
//         $dir = ftp_pwd($ftp);
//         if ($dir) {
//             echo "Root directory: $dir"."\n";
//         } else {
//             echo "Failed to get root directory"."\n";
//         }
//     } else {
//         echo "Failed to log in to $ftpServer"."\n";
//     }
//     ftp_close($ftp);
// } else {
//     echo "Failed to connect to $ftpServer"."\n";
// }

# List files in the current directory on an FTP server
// $ftp = ftp_connect($ftpServer);
// if ($ftp) {
//     $login = ftp_login($ftp, $ftpUser, $ftpPass);
//     if ($login) {
//         $files = ftp_nlist($ftp, $ftpDir);
//         if ($files) {
//             echo "Files in $ftpDir:"."\n";
//             foreach ($files as $file) {
//                 echo $file."\n";
//             }
//         } else {
//             echo "Failed to list files in $ftpDir"."\n";
//         }
//     } else {
//         echo "Failed to log in to $ftpServer"."\n";
//     }
//     ftp_close($ftp);
// } else {
//     echo "Failed to connect to $ftpServer"."\n";
// }

# Upload a file to an FTP server
// $ftp = ftp_connect($ftpServer);
// if ($ftp) {
//     $login = ftp_login($ftp, $ftpUser, $ftpPass);
//     if ($login) {

//         $upload = ftp_put(ftp: $ftp, remote_filename: "/public_html/$remoteFile", local_filename: $localFile, mode: FTP_ASCII);
//         if ($upload) {
//             echo "Uploaded $localFile to $ftpServer"."\n";
//         } else {
//             echo "Failed to upload $localFile to $ftpServer"."\n";
//         }
//     } else {
//         echo "Failed to log in to $ftpServer"."\n";
//     }
//     ftp_close($ftp);
// } else {
//     echo "Failed to connect to $ftpServer"."\n";
// }

# Download a file from an FTP server
// $ftp = ftp_connect($ftpServer);
// if ($ftp) {
//     $login = ftp_login($ftp, $ftpUser, $ftpPass);
//     if ($login) {

//         $download = ftp_get(ftp: $ftp, local_filename: "demo/ftp_test/downloaded.php", remote_filename: "/public_html/$remoteFile", mode: FTP_BINARY);
//         if ($download) {
//             echo "Downloaded $remoteFile successfully"."\n";
//         } else {
//             echo "Failed to downloaded $remoteFile "."\n";
//         }
//     } else {
//         echo "Failed to log in to $ftpServer"."\n";
//     }
//     ftp_close($ftp);
// } else {
//     echo "Failed to connect to $ftpServer"."\n";
// }