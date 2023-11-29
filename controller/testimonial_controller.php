<?php

require_once 'model/user_model.php';
require_once "model/testimonial_model.php";


function createtestimonial(){
    $allUsers = getAll();
    require_once "views/testimonial/createTestimonial.php";
}