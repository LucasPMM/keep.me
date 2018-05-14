<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "keepme";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS keepme";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();

    //Create table
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        user VARCHAR(30) NOT NULL,
        senha VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )";
        
    $conn->close();
?>