<?php

require_once './controller/freelancer_controller.php';
require_once './controller/project_controller.php';
require_once './controller/categoy_controller.php';

var_dump($_GET['view']);

if (isset($_GET['view'])) {
    $view = $_GET['view'];
    switch ($view) {

        case 'createFreelancer':
            createFreelancer();
            break;
        case 'getAllFreelancers':
            getAllFreelancer();
            break;
        case 'updateFreelancer':
            updateFreelancer();
            break;
        case 'deleteFreelancer':
             deleteFreelancer();
             break;
        default:
            echo '404';
            break;
    }
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'storeFreelancer':
             storeFreelancer();
            break;
        case 'updateFreelancer':
             actionUpdateFreelancer();
             break;
        case 'deleteFreelancer':
             actionDeleteFreelancer();
             break; 
    }
}

if (isset($_GET['viewofCategory'])) {
    $view = $_GET['viewofCategory'];
    switch ($view) {

        case 'createcategory':
            createcategory();
            break;
        case 'getAllcategories':
            getAllcategories();
            break;
        case 'updatecategory':
            updatecategory();
            break;
        case 'deletecategory':
            deletecategory();
             break;
        default:
            echo '404';
            break;
    }
}

if (isset($_GET['actioncategory'])) {
    $action = $_GET['actioncategory'];
    switch ($action) {
        case 'storeCategory':
            storeCategory();
            break;
        case 'updateCategory':
             actionUpdateCategory();
             break;
        case 'deleteCategory':
             actionDeleteCategory();
             break; 
    }
}


if (isset($_GET['viewofproject'])) {
    $view = $_GET['viewofproject'];
    switch ($view) {

        case 'createProject':
            createProject();
            break;
        case 'getAllProjects':
            getAllProjects();
            break;
        case 'updateProject':
            updateProject();
            break;
        case 'deleteProject':
            deleteProject();
             break;
        default:
            echo '404';
            break;
    }
}

if (isset($_GET['actionProject'])) {
    $action = $_GET['actionProject'];
    switch ($action) {
        case 'storeProject':
             storeProject();
            break;
        case 'updateProject':
             actionUpdateProject();
             break;
        case 'deleteProject':
             actionDeleteProject();
             break; 
    }
}


