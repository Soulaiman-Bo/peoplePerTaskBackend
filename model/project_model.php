<?php

// function dbConnect()
// {
//     return new PDO('mysql:dbname=peoplepertask;host=localhost', 'root', '');
// }

function createPR()
{
    $pdo = dbConnect();
    extract($_POST);

    $sqlState = $pdo->prepare(
        "INSERT INTO projects (firstname, lastname, email, number, competences, region, city, gender)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
    );
};
function getAllPR()
{

};

function getOnePR($id) 
{

}

function deletePR($ID)
{

};

function updatePR($ID, $firstname, $lastname, $email, $number, $competences, $region, $city, $gender)
{

};
