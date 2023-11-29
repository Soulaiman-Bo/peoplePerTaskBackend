<?php 

require_once "config/dbConnect.php";


function getAllRegions (){
    $conn = dbConnect();
    $sql = "SELECT * FROM `region` ORDER BY id ASC";
    $result = $conn->query($sql);
    $conn->close();
    return  $result;
}

function getAllCities (){
    $conn = dbConnect();
    $sql = "SELECT * FROM `ville` ORDER BY id ASC";
    $result = $conn->query($sql);
    $conn->close();
    return  $result;
}