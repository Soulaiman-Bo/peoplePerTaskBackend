<?php

require_once './controller/freelancer_controller.php';


if (isset($_GET['view'])) {
    $view = $_GET['view'];
    switch ($view) {
        case 'createFreelancer':
            createFreelancer();
            break;
        case 'getAllFreelancers':
            getAllFreelancer();
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
    }
}
