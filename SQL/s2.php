<?php
// Database connection details
$servername = 'p:localhost'; // 'p:' prefix for persistent connection
$username = 'root';
$password = '';

// Establish the connection
$conn = mysqli_connect($servername, $username, $password);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create the database if it doesn’t already exist
$dbname = "kushagra";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname"; // Prevents error if it already exists

if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Note: Persistent connections don’t need to be closed manually
?>
