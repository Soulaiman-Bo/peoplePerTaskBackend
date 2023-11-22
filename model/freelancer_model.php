<?php

function dbConnect()
{
    return new PDO('mysql:dbname=peoplepertask;host=localhost', 'root', '');
}

function create()
{
    $pdo = dbConnect();
    extract($_POST);
    $sqlState = $pdo->prepare(
        
       // "INSERT INTO freelancers VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?)";
        "INSERT INTO freelancers (firstname, lastname, email, number, competences, region, city, gender)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
    );
    return $sqlState->execute(
    [
        $firstname, 
        $lastname, 
        $email, 
        $number, 
        $competences, 
        $region, 
        $city, 
        $gender
    ]);
};
function getAll()
{
    $pdo = dbConnect();
    return $pdo->query('SELECT * FROM freelancers ORDER BY id ASC')->fetchAll(PDO::FETCH_OBJ);
};
function getOne($id) 
{
    $pdo = dbConnect();
    $sqlState = $pdo->prepare("SELECT * FROM freelancers WHERE id = ?");
    $sqlState->execute([$id]);
    return $sqlState->fetch(PDO::FETCH_OBJ);
}

function delete($ID)
{
    $pdo = dbConnect();
    $sqlState = $pdo->prepare("DELETE FROM freelancers WHERE ID = ?");
    return $sqlState->execute([$ID]);
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
