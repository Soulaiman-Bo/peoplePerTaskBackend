<?php


// CREATE TABLE `peoplepertask`.`testimonial` (
//     `ID` INT NOT NULL AUTO_INCREMENT , 
//     `testimonial` VARCHAR(600) NULL DEFAULT NULL , 
//     `user_id` INT NOT NULL , 
//     PRIMARY KEY (`ID`),
//     FOREIGN KEY (user_id) REFERENCES users(ID) ON DELETE CASCADE ON UPDATE CASCADE
// ) ENGINE = InnoDB;

require_once "config/dbConnect.php";



function createTes()
{
    extract($_POST);
    $conn = dbConnect();
    $sql = "INSERT INTO testimonial (testimonial, user_id)
    VALUES ('$testimonial', '$user')";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
};


function getAllTes()
{
    $conn = dbConnect();
    $sql = "SELECT C1.ID AS ID, C1.testimonial AS testimonial, C2.firstname AS firstname, C2.lastname AS lastname
            FROM `testimonial` C1
            LEFT JOIN  `users` C2
            ON C1.user_id = C2.ID";
            
    $result = $conn->query($sql);
    $conn->close();
    return $result;
};



