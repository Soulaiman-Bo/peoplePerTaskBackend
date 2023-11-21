<?php

require_once 'model/freelancer_model.php';


function getAllFreelancer(){
    $allFreelancers =  getAll();
    require_once 'views/Freelancers/getAllFreelancers.php';
};
function createFreelancer(){
    require_once 'views/Freelancers/createFreelancer.php';
   
};
function deleteFreelancer(){};
function updateFreelancer(){};

function storeFreelancer(){
    create();

    header('location:?view=getAllFreelancers');
}
