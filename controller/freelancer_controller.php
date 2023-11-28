<?php

require_once 'model/freelancer_model.php';
require_once 'model/user_model.php';
require_once 'model/region_city_model.php';

// ============ Views =========
function getAllFreelancers(){
    $result =  getAllFR();
    require_once 'views/includes/lang.php';
    require_once 'views/freelancer/getAllFreelancers.php';
};

function createFreelancer(){
    $allUsers = getAll();
    require_once 'views/freelancer/createFreelancer.php'; 
};

function updateFreelancer(){
    $id = $_GET['frelancer'];
    $result = getOneFR($id);
    $allregions = getAllRegions();
    $allcities = getAllCities();
    $row = $result->fetch_assoc();
    require_once 'views/frelancer/updateFreelancer.php';
};


function deletefrelancer(){
    $id = $_GET['frelancer'];
    require_once 'views/frelancer/deletefrelancer.php';
};


// ======= Actions ===========
function storefrelancer(){
    createFR();
    header('location:?view=getAllFreelancers');
}

function actionUpdatefrelancer(){
    extract($_POST);
    updateFR($ID, $firstname, $lastname, $email, $number, $competences, $region, $city, $gender);
    header('location:?view=getAllfrelancers');
}

function actionDeletefrelancer(){
    $id = $_GET['frelancer'];
    deleteFR($id);
    header('location:?view=getAllFreelancers');
}
