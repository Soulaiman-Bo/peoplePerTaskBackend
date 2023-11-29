<?php


require_once "config/dbConnect.php";


  
  

function createFR()
{
    extract($_POST);
    $conn = dbConnect();
    $sql = "INSERT INTO freelances (Competences, user_id)
    VALUES ('$competences', '$user')";
    $result = $conn->query($sql);
    $conn->close();
    return $result;

};



function getAllFR()
{
    $conn = dbConnect();
    $sql = "SELECT F.ID, R.firstname, R.lastname, R.email, R.gender, F.Competences 
            FROM `freelances` F 
            JOIN `users` R 
            ON F.user_id = R.id;
    ";

    $result = $conn->query($sql);
    $conn->close();
    return $result;
};

function getOneFR($id)
{
    $conn = dbConnect();
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

function deleteFR($ID)
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

function updateFR($ID, $firstname, $lastname, $email, $number, $region, $city, $gender)
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
