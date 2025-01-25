<?php

// Database credentials
$db_name = 'mysql:host=localhost;dbname=home_db';  // Database name and host
$db_user_name = 'root';                            // Database username
$db_user_pass = '';                                // Database password (empty here)

// Establish the PDO connection
try {
    $conn = new PDO($db_name, $db_user_name, $db_user_pass);
    // Set PDO error mode to exception for better error handling
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If the connection fails, output the error message
    echo "Connection failed: " . $e->getMessage();
    exit;  // Stop the script if the connection fails
}

// Function to create a unique ID
function create_unique_id(){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';  // All possible characters for the unique ID
    $charactersLength = strlen($characters);
    $randomString = '';
    
    // Generate a random string of 20 characters
    for ($i = 0; $i < 20; $i++) {
        $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
    }
    
    return $randomString;  // Return the generated unique ID
}

?>
