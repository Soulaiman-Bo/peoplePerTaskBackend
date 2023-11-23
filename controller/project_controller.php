<?php 

require_once 'model/project_model.php';


// ============ Views =========
function getAllProjects(){
    require_once 'views/projects/getAllProjects.php';
};

function createProject(){
    require_once 'views/projects/createProject.php';
};

function updateProject(){
    
};

function deleteProject(){
   
};




// ======= Actions ===========
function storeProject(){
    createPR();
    header('location:?view=getAllProjects');
}

function actionUpdateProject(){
  
}

function actionDeleteProject(){
   
}
