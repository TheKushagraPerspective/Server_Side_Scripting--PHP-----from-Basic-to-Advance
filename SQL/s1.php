<?php
// this code for non-persistent


    // database connection details
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    // establishing the connection
    $conn = mysqli_connect($servername, $username, $password);
    // $conn = new mysqli($servername, $username, $password);

    // check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // create the database
    $dbname = "kushagra";
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($conn , $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }

    // close the connection
    mysqli_close($conn);


?>