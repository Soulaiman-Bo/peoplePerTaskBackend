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



function create()
{
    extract($_POST);
    $conn = dbConnect();
    $sql = "INSERT INTO users (firstname, lastname, email, number, region, city, gender)
    VALUES ('$firstname', '$lastname', '$email', '$number', '$region', '$city', '$gender')";
    
    $result = $conn->query($sql);

    $conn->close();
    return $result;

};

function getAll()
{
    $conn = dbConnect();
    $sql = "SELECT F.ID, F.firstname, F.lastname, F.email, F.gender, R.region, V.ville
            FROM `users` F
            JOIN `region` R ON F.region = R.id
            INNER JOIN `ville` V ON F.city = V.id;
    ";


    $result = $conn->query($sql);
    $conn->close();
    return $result;
};

function getOne($id)
{
    $conn = dbConnect();
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function delete($ID)
{
    // $pdo = dbConnect();
    // $sqlState = $pdo->prepare("DELETE FROM users WHERE ID = ?");
    // return $sqlState->execute([$ID]);

    $conn = dbConnect();
    $sql = "DELETE FROM users WHERE ID = $ID";
    $result = $conn->query($sql);
    $conn->close();
    return $result;

};

function update($ID, $firstname, $lastname, $email, $number, $region, $city, $gender)
{
    $pdo = dbConnect();
    $sqlState = $pdo->prepare("UPDATE users
    SET firstname = ? ,
        lastname = ? , 
        email = ? , 
        number = ? , 
        region= ?,
        city = ?,
        gender = ?
    WHERE ID = ?");
    return $sqlState->execute([$firstname, $lastname, $email, $number, $region, $city, $gender, $ID]);
};
