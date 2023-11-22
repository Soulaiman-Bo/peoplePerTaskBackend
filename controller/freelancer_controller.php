<?php

require_once 'model/freelancer_model.php';

// ============ Views =========
function getAllFreelancer(){
    $allFreelancers =  getAll();
    require_once 'views/Freelancers/getAllFreelancers.php';
};

function createFreelancer(){
    require_once 'views/Freelancers/createFreelancer.php'; 
};

function updateFreelancer(){
    $id = $_GET['user'];
    $freelancer = getOne($id);
    require_once 'views/Freelancers/updateFreelancer.php';
};


function deleteFreelancer(){
    $id = $_GET['user'];
    require_once 'views/Freelancers/deleteFreelancer.php';

};


// ======= Actions ===========
function storeFreelancer(){
    create();
    header('location:?view=getAllFreelancers');
}

function actionUpdateFreelancer(){
    extract($_POST);
    update($ID, $firstname, $lastname, $email, $number, $competences, $region, $city, $gender);
    header('location:?view=getAllFreelancers');
}

function actionDeleteFreelancer(){
    $id = $_GET['user'];
    delete($id);
    header('location:?view=getAllFreelancers');
}
