<?php
ob_start();
?>


<div class="relative overflow-x-auto  sm:rounded-lg">


    <!-- Modal toggle -->
    <a href="./index.php?view=createFreelancer" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block mb-7 font-inter text-white w-fit bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        + Add User
    </a>





    <table id="myTable" class="hover display w-full shadow-md text-sm text-left text-gray-500 dark:text-gray-400">

        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Full Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Position
                </th>
                <th scope="col" class="px-6 py-3">
                    Region
                </th>
                <th scope="col" class="px-6 py-3">
                    City
                </th>
                <th scope="col" class="px-6 py-3">
                    Gender
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
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-10 h-10 rounded-full" src="../images/f1.jpg" alt="Jese image">
                        <div class="pl-3">
                            <div class="text-base font-semibold"><?= $row["firstname"] ?>  <?=  $row["lastname"]  ?></div>
                            <div class="font-normal text-gray-500"><?= $row["email"] ?></div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
                        Developer
                    </td>
                    <td class="px-6 py-4">
                        <?= $row["region"] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $row["city"] ?>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> Online
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <a href="index.php?view=updateFreelancer&user=<?= $row["ID"] ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                            user</a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="index.php?view=deleteFreelancer&user=<?= $row["ID"] ?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete
                            user</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

        <foot class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Full Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Position
                </th>
                <th scope="col" class="px-6 py-3">
                    Region
                </th>
                <th scope="col" class="px-6 py-3">
                    City
                </th>
                <th scope="col" class="px-6 py-3">
                    Gender
                </th>
                <th scope="col" class="px-6 py-3">
                    Edit
                </th>
                <th scope="col" class="px-6 py-3">
                    Delete
                </th>
            </tr>
        </foot>

    </table>

    <!-- <table id="myTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011-01-25</td>
                <td>$112,000</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table> -->
</div> 


    <?php
    $content = ob_get_clean();
    include_once 'views/layout.php';
    ?>