<?php

require_once 'model/user_model.php';
require_once 'model/region_city_model.php';

// ============ Views =========
function getAllUser(){
    $result =  getAll();
    require_once 'views/includes/lang.php';
    require_once 'views/users/getAllUsers.php';
};

function createUser(){
    $allregions = getAllRegions();
    $allcities = getAllCities();
    require_once 'views/Users/createUser.php'; 
};

function updateUser(){
    $id = $_GET['user'];
    $result = getOne($id);
    $allregions = getAllRegions();
    $allcities = getAllCities();
    $row = $result->fetch_assoc();
    require_once 'views/Users/updateUser.php';
};


function deleteUser(){
    $id = $_GET['user'];
    require_once 'views/Users/deleteUser.php';

};


// ======= Actions ===========
function storeUser(){
    create();
    header('location:?view=getAllUsers');
}

function actionUpdateUser(){
    extract($_POST);
    update($ID, $firstname, $lastname, $email, $number, $competences, $region, $city, $gender);
    header('location:?view=getAllUsers');
}

function actionDeleteUser(){
    $id = $_GET['user'];
    delete($id);
    header('location:?view=getAllUsers');
}
