<?php
ob_start();
?>

<?php 
// $ID, $firstname, $lastname, $email, $number, $competences, $region, $city, $gender;
$firstname = $lastname = $email = $number = $competences = $region = $city = $gender = "";
$firstnameErr = $lastnameErr = $emailErr = $numberErr = $competencesErr = $regionErr = $cityErr = $genderErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Firstname
    if (empty($_POST["firstname"])) {
        $firstnameErr = "Firstname is required";
    } else {
        $firstname = test_input($_POST["firstname"]);
        // Check if firstname contains only letters and is within the specified length
        if (!preg_match("/^[a-zA-Z]{2,20}$/", $firstname)) {
            $firstnameErr = "Only letters allowed, not more than 20 characters, not less than 2 characters";
        }
    }

    // Validate Lastname
    if (empty($_POST["lastname"])) {
        $lastnameErr = "Lastname is required";
    } else {
        $lastname = test_input($_POST["lastname"]);
        // Check if lastname contains only letters and is within the specified length
        if (!preg_match("/^[a-zA-Z]{2,20}$/", $lastname)) {
            $lastnameErr = "Only letters allowed, not more than 20 characters, not less than 2 characters";
        }
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate Phone
    if (empty($_POST["number"])) {
        $numberErr = "Phone number is required";
    } else {
        $number = test_input($_POST["number"]);
        // Check if phone is a valid number
        if (!preg_match("/^[0-9]{10}$/", $number)) {
            $numberErr = "Invalid phone number";
        }
    }

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

    // Validate Region
    if (empty($_POST["region"])) {
        $regionErr = "Region is required";
    } else {
        $region = test_input($_POST["region"]);
        // Check if region is a number between 1 and 12
        if (!filter_var($region, FILTER_VALIDATE_INT, array("options" => array("min_range" => 1, "max_range" => 12)))) {
            $regionErr = "Invalid region number";
        }
    }

    // Validate City
    if (empty($_POST["city"])) {
        $cityErr = "City is required";
    } else {
        $city = test_input($_POST["city"]);
        // Check if city is a number between 1 and 404
        if (!filter_var($city, FILTER_VALIDATE_INT, array("options" => array("min_range" => 1, "max_range" => 404)))) {
            $cityErr = "Invalid city number";
        }
    }

    // Validate Gender
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
        // Check if gender is either 'Male' or 'Female'
        if ($gender != 'Male' && $gender != 'Female') {
            $genderErr = "Invalid gender";
        }
    }


    if (empty($firstnameErr) && empty($lastnameErr) && empty($emailErr) && empty($numberErr) &&
        empty($competencesErr) && empty($regionErr) && empty($cityErr) && empty($genderErr)) {
            create();
            header('location:?view=getAllFreelancers');
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<div class="h-fit">
    <form action="index.php?view=createFreelancer" method="POST" class="max-w-xl mx-auto bg-white border p-8 rounded-2xl ">

        <div class="mb-5">
            <label for="firstname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Firstname</label>
            <input type="text" name="firstname" value="<?php echo $firstname; ?>" id="firstname" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Jhon doe" required>
            <span class="error"> <?php echo $firstnameErr; ?></span>
        </div>

        <div class="mb-5">
            <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lastname</label>
            <input type="text" name="lastname" value="<?php echo $lastname; ?>" id="lastname" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Jhon doe" required>
            <span class="error"> <?php echo $lastnameErr; ?></span>
        </div>

        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email"  name="email" value="<?php echo $email; ?>" id="email" placeholder="Jhon_doe@gmail.com" required class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
            <span class="error"> <?php echo $emailErr; ?></span>
        </div>

        <div class="mb-5">
            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
            <input type="tel"  name="number" value="<?php echo $number; ?>" id="number" placeholder="0615301530" required class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
            <span class="error"> <?php echo $numberErr; ?></span>
        </div>

        <div class="mb-5">
            <label for="competences" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">competences</label>
            <input type="tel"  name="competences" value="<?php echo $competences; ?>" id="competences" placeholder="0615301530" required class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
            <span class="error"> <?php echo $competencesErr; ?></span>
        </div>


        <div class="mb-5">
            <label for="region" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your region</label>
            <select name="region" value="<?php echo $region; ?>" id="region" class="  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>United States</option>
                <option value="1">Canada</option>
                <option value="2">France</option>
                <option value="3">Germany</option>
            </select>
            <span class="error"> <?php echo $regionErr; ?></span>
        </div>

        <div class="mb-5">
            <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your city</label>
            <select name="city" value="<?php echo $city; ?>" id="city" class="  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="1">United States</option>
                <option value="2">Canada</option>
                <option value="3">France</option>
                <option value="4">Germany</option>
            </select>
            <span class="error"> <?php echo $cityErr; ?></span>
        </div>

        <div class="mb-5">
            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
            <select id="gender" value="<?php echo $gender; ?>" name="gender" class="  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Male</option>
                <option>Female</option> 
            </select>
            <span class="error"> <?php echo $genderErr; ?></span>
        </div>


        <Button type="submit"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create User</Button>
    </form>
</div>



<?php
$content = ob_get_clean();
include_once 'views/layout.php';
?>