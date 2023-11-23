<?php
ob_start();
?>


<div class="h-fit ">
        <form action="index.php?actioncategory=storeCategory" method="POST" class="max-w-xl mx-auto bg-white border p-8 rounded-2xl ">
    
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category name</label>
                <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Jhon doe" required>
            </div>
    

            <div class="mb-5">
                <label for="parentcategory" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Parent Category</label>
                <select name="parentcategory" id="parentcategory" class="  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <?php foreach ($allCategories as $parent): ?>
                     <option><?= $parent->category_name ?></option>
                <?php endforeach; ?>
                </select>
            </div>
    
           
    
    
            <Button type="submit"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create User</Button>
        </form>
    </div>


<?php
$content = ob_get_clean();
include_once 'views/layout.php';
?>