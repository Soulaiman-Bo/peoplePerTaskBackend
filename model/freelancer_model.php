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

// function connectDb()
// {

  



//     // Check if the query was successful
//     if ($result === false) {
//         die("Error executing the query: " . $conn->error);
//     }

//     // Check if there are rows returned
//     if ($result->num_rows > 0) {
//         // Output data for each row
//         while ($row = $result->fetch_assoc()) {
//             echo "Column1: " . $row["column1"] . " - Column2: " . $row["column2"] . " - Column3: " . $row["column3"] . "<br>";
//         }
//     } else {
//         echo "No results found";
//     }

//     // Close the database connection
//     $conn->close();
// }

function create()
{
    extract($_POST);
    $conn = dbConnect();
    $sql = "INSERT INTO freelancers (firstname, lastname, email, number, competences, region, city, gender)
    VALUES ('$firstname', '$lastname', '$email', '$number', '$competences', '$region', '$city', '$gender')";
    
    $result = $conn->query($sql);

    $conn->close();
    return $result;

};

function getAll()
{
    $conn = dbConnect();
    $sql = "SELECT * FROM freelancers ORDER BY id ASC";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
};

function getOne($id)
{
    $conn = dbConnect();
    $sql = "SELECT * FROM freelancers WHERE id = $id";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function delete($ID)
{
    // $pdo = dbConnect();
    // $sqlState = $pdo->prepare("DELETE FROM freelancers WHERE ID = ?");
    // return $sqlState->execute([$ID]);

    $conn = dbConnect();
    $sql = "DELETE FROM freelancers WHERE ID = $ID";
    $result = $conn->query($sql);
    $conn->close();
    return $result;

};

function update($ID, $firstname, $lastname, $email, $number, $competences, $region, $city, $gender)
{
    $pdo = dbConnect();
    $sqlState = $pdo->prepare("UPDATE freelancers
    SET firstname = ? ,
        lastname = ? , 
        email = ? , 
        number = ? , 
        competences = ?,
        region= ?,
        city = ?,
        gender = ?
    WHERE ID = ?");
    return $sqlState->execute([$firstname, $lastname, $email, $number, $competences, $region, $city, $gender, $ID]);
};
