<!-- 
CREATE TABLE freelancers (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(40),
    lastname varchar(40),
    email varchar(40),
    number varchar(20),
    competences varchar(200),
    region varchar(20),
    city varchar(20),
    gender varchar(5),
    created_At datetime default now(),
    modified_At datetime default now(),
    modified_By int
); 
-->

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


function getOne($id) {
    $pdo = dbConnect();
    $sqlState = $pdo->prepare("SELECT * FROM freelancers WHERE id = ?");
    $sqlState->execute([$id]);
    return $sqlState->fetch(PDO::FETCH_OBJ);
}

function delete()
{
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
