<?php
ob_start();
?>



<div class="relative overflow-x-auto  sm:rounded-lg">


    <!-- Modal toggle -->
    <a href="./index.php?view=createUser" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block mb-7 font-inter text-white w-fit bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        + <?= __('add user', $lang) ?>
    </a>

    <table class="w-full shadow-md text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                <?= __('fullname', $lang) ?>
                </th>
                <th scope="col" class="px-6 py-3">
                <?= __('Region', $lang) ?>
                </th>
                <th scope="col" class="px-6 py-3">
                <?= __('City', $lang) ?>
                </th>
                <th scope="col" class="px-6 py-3">
                <?= __('Gender', $lang) ?>
                </th>
                <th scope="col" class="px-6 py-3">
                <?= __('Edit', $lang) ?>
                </th>
                <th scope="col" class="px-6 py-3">
                <?= __('Delete', $lang) ?>
                </th>
            </tr>
        </thead>

        <tbody>
          
            <?php foreach ($result as $row) : ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <div class="pl-3">
                            <div class="text-base font-semibold"><?= $row["firstname"] ?> <?= $row["lastname"]  ?></div>
                            <div class="font-normal text-gray-500"><?= $row["email"] ?></div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        <?= $row["region"] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $row["ville"] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $row["gender"] ?>
                    </td>
                    <td class="px-6 py-4">
                        <a href="index.php?view=updateUser&user=<?= $row["ID"] ?>" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900
                            "><?= __('Edit user', $lang) ?></a>
                    </td>

                    <td class="px-6 py-4">
                        <a href="index.php?view=deleteUser&user=<?= $row["ID"] ?>" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900
                            "> <?= __('Delete user', $lang) ?></a>
                    </td>
                </tr>
            <?php endforeach; ?>



        </tbody>
    </table>

   

   
</div>


<?php

$content = ob_get_clean();

include_once 'views/layout.php';
?>