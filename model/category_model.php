<?php

// function dbConnect()
// {
//     return new PDO('mysql:dbname=peoplepertask;host=localhost', 'root', '');
// }


// CREATE TABLE category (
//     ID INT AUTO_INCREMENT PRIMARY KEY,
//     category_name varchar(100),
//     parent_caregory int,
//     created_At datetime default now(),
//     modified_At datetime default now(),
//     FOREIGN KEY(parent_caregory) REFERENCES category(ID) ON DELETE SET NULL
// );



function createCat()
{
    $pdo = dbConnect();
    extract($_POST);

    $parentCategoryId;

    if ($parentcategory == 'null') {
        $parentCategoryId = null;
    } else {
        $getID = $pdo->prepare(
            "SELECT ID FROM category WHERE category_name = ?"
        );
        $parentCategoryId = $getID->execute([$parentcategory]);
        die($parentCategoryId);
    }


    $sqlState = $pdo->prepare(
        "INSERT INTO category (category_name, parent_caregory)
        VALUES (?, ?)"
    );

    return $sqlState->execute(
        [
            $name,
            $parentCategoryId
        ]
    );
};
function getAllCat()
{

    $pdo = dbConnect();
    return $pdo->query('SELECT * FROM category ORDER BY ID ASC')->fetchAll(PDO::FETCH_OBJ);
};

function getOneCat($id)
{
    $pdo = dbConnect();
    $sqlState = $pdo->prepare("SELECT * FROM category WHERE ID = ?");
    $sqlState->execute([$id]);
    return $sqlState->fetch(PDO::FETCH_OBJ);
}

function deleteCat($ID)
{
};

function updateCat($ID, $firstname, $lastname, $email, $number, $competences, $region, $city, $gender)
{
};
