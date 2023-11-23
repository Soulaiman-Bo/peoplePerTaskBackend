<?php 

require_once 'model/category_model.php';


// ============ Views =========
function getAllcategories(){
    $allCategories =  getAllCat();
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
   
};




// ======= Actions ===========
function storecategory(){
    createCat();
    header('location:?viewofCategory=getAllcategories');
}

function actionUpdateCategory(){
  
}

function actionDeleteCategory(){
   
}
