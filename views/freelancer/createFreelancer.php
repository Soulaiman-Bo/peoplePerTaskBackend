<?php
ob_start();
?>

<?php
// $ID, $firstname, $lastname, $email, $number, $competences, $region, $city, $gender;
$firstname = $lastname = $email = $number  = $region = $city = $gender = "";
$firstnameErr = $lastnameErr = $emailErr = $numberErr  = $regionErr = $cityErr = $genderErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate Competences
    if (empty($_POST["competences"])) {
        $competencesErr = "Competences are required";
    } else {
        $competences = test_input($_POST["competences"]);
        // Check if competences contain only letters and are within the specified length
        if (!preg_match("/^[a-zA-Z ,]{2,200}$/", $competences)) {
            $competencesErr = "Only letters allowed, not more than 200 characters, not less than 2 characters";
        }
    }


    if (
          empty($competencesErr)
    ) {
        createFR();
        header('location:?viewofFreelancer=getAllFreelancers');
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<div class="h-fit">
    <form action="index.php?viewofFreelancer=createFreelancer" method="POST" class="max-w-xl mx-auto bg-white border p-8 rounded-2xl ">

        <div class="mb-5">
            <label for="user" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select The User</label>
            <select name="user" id="user" class="  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                
                <?php foreach ($allUsers as $user) : ?>
                   <option value="<?= $user['ID'] ?>"> <?= $user['firstname'] ?> <?= $user['lastname'] ?> </option>
                <?php endforeach; ?>

            </select>
            <span class="mt-4 block ml-4 text-xs text-red-600 dark:text-red-400 "> <?php echo $cityErr; ?></span>
        </div>



        <div class="mb-5">
            <label for="competences" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">competences</label>
            <input type="tel" name="competences" value="<?php //echo $competences; ?>" id="competences" placeholder="ex: web design, java, writing" required class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
            <span class="mt-4 block ml-4 text-xs text-red-600 dark:text-red-400 "> <?php //echo $competencesErr; ?></span>
        </div>

        <Button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Freelancer</Button>
    </form>
</div>



<?php
$content = ob_get_clean();
include_once 'views/layout.php';
?>