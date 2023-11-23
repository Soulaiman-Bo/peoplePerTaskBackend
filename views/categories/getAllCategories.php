<?php
ob_start();
?>


<div class="flex flex-col justify-center items-center">

   

  <div class="relative overflow-x-auto">
     <!-- Modal toggle -->
     <a href="./index.php?viewofCategory=createcategory" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block mb-7 font-inter text-white w-fit bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        + Add Category
    </a>

    <table class="w-full text-sm border border-orange-300 text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            Category name
          </th>
          <th scope="col" class="px-6 py-3">
            Parent Category
          </th>
          <th scope="col" class="px-6 py-3">
            Edit 
          </th>
          <th scope="col" class="px-6 py-3">
            Delete 
          </th>
        </tr>
      </thead>

      <tbody>
       

        <?php foreach ($result as $row) : ?>
          <tr class="bg-white dark:bg-gray-800">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
          <?= $row["category_name"] ?>
          </th>
          <td class="px-6 py-4">
            Black
          </td>
          <td class="px-6 py-4">
            <a href="index.php?viewofCategory=updatecategory&category=<?=  $row["ID"] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
            Edit
          </a>
          </td>
          <td class="px-6 py-4">
            <a href="index.php?viewofCategory=deletecategory&category=<?= $row["ID"] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
            Delete
          </a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>


    </table>
  </div>

</div>

<?php
$content = ob_get_clean();
include_once 'views/layout.php';
?>