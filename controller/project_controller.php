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
    
};

function deleteProject(){
   
};




// ======= Actions ===========
function storeProject(){
    createPR();
    header('location:?viewofproject=getAllProjects');
}

function actionUpdateProject(){
  
}

function actionDeleteProject(){
   
}
