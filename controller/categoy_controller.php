<?php 

require_once 'model/category_model.php';


// ============ Views =========
function getAllcategories(){
    $result =  getAllCat();
    require_once 'views/categories/getAllcategories.php';
};

function createcategory(){
    $allCategories =  getAllCat();
    require_once 'views/categories/createCategory.php';
};

function updatecategory(){
    $id = $_GET['category'];
    $category = getOneCat($id);

    $allCategories =  getAllCat();
    require_once 'views/categories/editCategory.php';
};

function deletecategory(){
    $id = $_GET['category'];
    require_once 'views/categories/deleteCategory.php';
};


// ======= Actions ===========
function storecategory(){
    createCat();
    header('location:?viewofCategory=getAllcategories');
}

function actionUpdateCategory(){
    extract($_POST);
    updateCat($ID, $name, $parentcategory);
    header('location:?viewofCategory=getAllcategories');
}

function actionDeleteCategory(){
    $id = $_GET['category'];
    deleteCat($id);
    header('location:?viewofCategory=getAllcategories');
}
