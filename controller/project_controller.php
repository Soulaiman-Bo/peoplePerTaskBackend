<?php 

require_once 'model/project_model.php';


// ============ Views =========
function getAllProjects(){
    $allProject = getAllPR();
    require_once 'views/projects/getAllProjects.php';
};

function createProject(){
    $allCategories =  getAllCat();
    require_once 'views/projects/createProject.php';
};

function updateProject(){
    $id = $_GET['project'];

    $project = getOnePR($id);

    $allCategories =  getAllCat();
    require_once 'views/projects/editProject.php';
};

function deleteProject(){
    $id = $_GET['project'];
    require_once 'views/projects/deleteProject.php';
};




// ======= Actions ===========
function storeProject(){
    createPR();
    header('location:?viewofproject=getAllProjects');
}

function actionUpdateProject(){
    extract($_POST);
    updatePR($ID, $title, $description, $minprice, $maxprice, $hours, $duration, $experince, $country, $category_name);
    header('location:?viewofproject=getAllProjects');
}

function actionDeleteProject(){
    $id = $_GET['project'];
    deletePR($id);
    header('location:?viewofproject=getAllProjects');
}
