<?php 

function dbConnect()
{
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "peoplepertask";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error
    ) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}