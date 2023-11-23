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
  
    extract($_POST);
    $conn = dbConnect();

    $parentCategoryId;

    if ($parentcategory == 'null') {
        $parentCategoryId = null;
    } else {
        $sql = "SELECT ID FROM category WHERE category_name = '$parentcategory'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $parentCategoryId = $row['ID'];
    }


    
    $sql = "INSERT INTO category (category_name, parent_caregory) VALUES ('$name', '$parentCategoryId')";
    $result = $conn->query($sql);
    $conn->close();
    return  $result;

};


function getAllCat()
{
    $conn = dbConnect();
    $sql = "SELECT * FROM category ORDER BY ID ASC";
    $result = $conn->query($sql);
    $conn->close();
    return  $result;
};

function getOneCat($id)
{
    $conn = dbConnect();
    $sql = "SELECT * FROM category WHERE ID = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $conn->close();
    return  $row;
}

function deleteCat($ID)
{
    $conn = dbConnect();
    $sql = "DELETE FROM category WHERE ID = $ID";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
};

function updateCat($ID, $category_name, $parent_caregory)
{
    $conn = dbConnect();

    if ($parent_caregory == 'null') {
        $parentCategoryId = null;
    } else {
        $sql = "SELECT ID FROM category WHERE category_name = '$parent_caregory'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $parentCategoryId = $row['ID'];
    }

    
    $sql = " UPDATE category SET category_name = '$category_name', parent_caregory = '$parentCategoryId' WHERE ID = $ID";
    $result = $conn->query($sql);
    $conn->close();
    return  $result;
};
