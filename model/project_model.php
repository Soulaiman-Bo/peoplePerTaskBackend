<?php

// function dbConnect()
// {
//     return new PDO('mysql:dbname=peoplepertask;host=localhost', 'root', '');
// }


// CREATE TABLE category (
//     ID INT AUTO_INCREMENT PRIMARY KEY,
//     title varchar(250),
//     description varchar(500),
//     minprice int,
//     maxprice int,
//     hours int,
//     duration int,
//     experince varchar(15),
//     country varchar(15),
//     category_id int,
//     created_At datetime default now(),
//     modified_At datetime default now(),
//     FOREIGN KEY (category_id) REFERENCES category(ID) ON DELETE CASCADE ON UPDATE CASCADE
// );

require_once "config/dbConnect.php";


function createPR()
{
    extract($_POST);
    $conn = dbConnect();

    $parentCategoryId;

    if ($category_name == 'null') {
        $parentCategoryId = null;
    } else {
        $sql = "SELECT ID FROM category WHERE category_name = '$category_name'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $parentCategoryId = $row['ID'];
    }



    $sql = "INSERT INTO project (title, description, minprice, maxprice, hours, duration, experince, country, category_id) 
    VALUES ('$title', '$description', '$minprice', '$maxprice', '$hours', '$duration', '$experince', '$country', '$parentCategoryId')";

    $result = $conn->query($sql);
    $conn->close();
    return  $result;
};

function getAllPR()
{
    $conn = dbConnect();
    $sql = "SELECT * FROM project ORDER BY ID ASC";
    $result = $conn->query($sql);
    $conn->close();
    return  $result;
};

function getOnePR($id)
{
    $conn = dbConnect();
    $sql = "SELECT * FROM project WHERE ID = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $conn->close();
    return  $row;
}

function deletePR($ID)
{
    $conn = dbConnect();
    $sql = "DELETE FROM project WHERE ID = $ID";
    $result = $conn->query($sql);
    $conn->close();
    return $result;

};

function updatePR($ID, $title, $description, $minprice, $maxprice, $hours, $duration, $experince, $country, $category)
{
    $conn = dbConnect();

    if ($category == 'null') {
        $parentCategoryId = null;
    } else {
        $sql = "SELECT ID FROM category WHERE category_name = '$category'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $parentCategoryId = $row['ID'];
    }

    
    $sql = " UPDATE project SET 
            title = '$title',
            description = '$description',
            minprice = '$minprice',
            maxprice = '$maxprice',
            hours = '$hours',
            duration = '$duration',
            experince = '$experince',
            country = '$country',
            category_id = '$parentCategoryId'
            WHERE ID = '$ID'";

    $result = $conn->query($sql);
    $conn->close();
    return  $result;
};
