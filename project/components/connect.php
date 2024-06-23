<?php

// Database configuration
$db_host = 'localhost'; // Hostname
$db_name = 'course_db'; // Database name
$user_name = 'root'; // Username
$user_password = ''; // Password
$db_port = '3307'; // Port number

// Construct the database connection string
$db_connection_string = "mysql:host=$db_host;port=$db_port;dbname=$db_name";

try {
    // Establishing a database connection using PDO
    $conn = new PDO($db_connection_string, $user_name, $user_password);

    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// This function generates a unique ID
function unique_id() {
    $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $rand = array();
    $length = strlen($str) - 1;
    for ($i = 0; $i < 20; $i++) {
        $n = mt_rand(0, $length);
        $rand[] = $str[$n];
    }
    return implode($rand);
}

// Your database connection ($conn) is now available for use anywhere in this file
// You can use the unique_id() function to generate unique IDs

?>
