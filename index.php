<?php 

require_once './controller/freelancer_controller.php';

if (isset($_GET['view'])) {
    $view = $_GET['view'];
    switch($view){
        case 'createFreelancer':
            createFreelancer();
            break;
        default:
            echo '404';
            break;
    }
}