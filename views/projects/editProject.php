<?php
ob_start();
?>


<?php
// Define variables and initialize with empty values
$ID = $title = $description = $minprice = $maxprice = $hours = $duration = $experince = $country = $category = "";
$titleErr = $descriptionErr = $minpriceErr = $maxpriceErr = $hoursErr = $durationErr = $experinceErr = $countryErr = $categoryErr = "";


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate ID
    $ID = test_input($_POST["ID"]);

    // Validate Title
    if (empty($_POST["title"])) {
        $titleErr = "Title is required";
    } else {
        $title = test_input($_POST["title"]);
        // Check if title is within the specified length
        if (strlen($title) < 10 || strlen($title) > 200) {
            $titleErr = "Title should be between 10 and 200 characters";
        }
    }

    // Validate Description
    if (empty($_POST["description"])) {
        $descriptionErr = "Description is required";
    } else {
        $description = test_input($_POST["description"]);
        // Check if description is within the specified length
        if (strlen($description) < 10 || strlen($description) > 600) {
            $descriptionErr = "Description should be between 10 and 600 characters";
        }
    }

    // Validate Min Price
    if (empty($_POST["minprice"])) {
        $minpriceErr = "Min Price is required";
    } else {
        $minprice = test_input($_POST["minprice"]);
        // Check if min price is a valid number
        if (!is_numeric($minprice)) {
            $minpriceErr = "Min Price should be a valid number";
        }
    }

    // Validate Max Price
    if (empty($_POST["maxprice"])) {
        $maxpriceErr = "Max Price is required";
    } else {
        $maxprice = test_input($_POST["maxprice"]);
        // Check if max price is a valid number and not less than min price
        if (!is_numeric($maxprice) || $maxprice < $minprice) {
            $maxpriceErr = "Max Price should be a valid number and not less than Min Price";
        }
    }

    // Validate Hours
    if (empty($_POST["hours"])) {
        $hoursErr = "Hours is required";
    } else {
        $hours = test_input($_POST["hours"]);
        // Check if hours is a valid number
        if (!is_numeric($hours)) {
            $hoursErr = "Hours should be a valid number";
        }
    }

    // Validate Duration
    if (empty($_POST["duration"])) {
        $durationErr = "Duration is required";
    } else {
        $duration = test_input($_POST["duration"]);
        // Check if duration is a valid number
        if (!is_numeric($duration)) {
            $durationErr = "Duration should be a valid number";
        }
    }

    // Validate Experience
    if (empty($_POST["experince"])) {
        $experinceErr = "Experience is required";
    } else {
        $experince = test_input($_POST["experince"]);
        // Check if experience is one of the specified values
        $validExperiences = array('beginner', 'intermediate', 'advanced');
        if (!in_array($experince, $validExperiences)) {
            $experienceErr = "Invalid experience level";
        }
    }

    // Validate Country
    if (empty($_POST["country"])) {
        $countryErr = "Country is required";
    } else {
        $country = test_input($_POST["country"]);
        // Check if country is within the specified length
        if (strlen($country) < 4 || strlen($country) > 20) {
            $countryErr = "Country should be between 4 and 20 characters";
        }
    }

    // Validate Category
    if (empty($_POST["category_name"])) {
        $categoryErr = "Category is required";
    } else {
        $category = test_input($_POST["category_name"]);
        // Add additional validation for category if needed
    }


    if (
        
    empty($titleErr) &&
    empty($descriptionErr) &&
    empty($minpriceErr) &&
    empty($maxpriceErr) &&
    empty($hoursErr) &&
    empty($durationErr) &&
    empty($experinceErr) &&
    empty($countryErr) &&
    empty($categoryErr) 

    ) {
        updatePR($ID, $title, $description, $minprice, $maxprice, $hours, $duration, $experince, $country, $category);
        header('location:?viewofCategory=getAllcategories');
    }

}

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $ID = $project['ID'];
    $title = $project['title'];
    $description = $project['description'];
    $minprice = $project['minprice'];
    $maxprice = $project['maxprice'];
    $hours = $project['hours'];
    $duration = $project['duration'];
    $experience = $project['experince'];
    $country = $project['country'];
    $category = $project['category_id'];
}


?>

<div class="h-fit ">
        <form action="index.php?viewofproject=updateProject&project=<?php echo $ID ?>" method="POST" class="max-w-xl mx-auto bg-white border p-8 rounded-2xl ">
    
            <div class="mb-5">
                <input type="hidden" value="<?php echo $ID ?>" name="ID" id="ID" required>
            </div>
        
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" name="title" value="<?php echo $title ?>" id="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Jhon doe" required>
                <span class="mt-4 block ml-4 text-xs text-red-600 dark:text-red-400 "> <?php echo $titleErr; ?></span>
            </div>
    
            <div class="mb-5">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <input type="text" name="description" value="<?php echo $description ?>" id="description" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Jhon doe" required>
                <span class="mt-4 block ml-4 text-xs text-red-600 dark:text-red-400 "> <?php echo $descriptionErr; ?></span>
            </div>


            <div class="mb-5">
                <label for="minprice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Minimum Hour Price</label>
                <input type="number"  name="minprice" value="<?php echo $minprice ?>" id="minprice" placeholder="30 hour" required class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                <span class="mt-4 block ml-4 text-xs text-red-600 dark:text-red-400 "> <?php echo $minpriceErr; ?></span>
            </div>

            <div class="mb-5">
                <label for="maxprice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Maximum Hour Price</label>
                <input type="number"  name="maxprice" value="<?php echo $maxprice ?>" id="maxprice" placeholder="30 hour" required class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                <span class="mt-4 block ml-4 text-xs text-red-600 dark:text-red-400 "> <?php echo $maxpriceErr; ?></span>
            </div>
            
        
    
            <div class="mb-5">
                <label for="hours" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hours Per Week</label>
                <input type="number"  name="hours" value="<?php echo $hours ?>"  id="hours" placeholder="30 hour" required class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                <span class="mt-4 block ml-4 text-xs text-red-600 dark:text-red-400 "> <?php echo $hoursErr; ?></span>
            </div>
    
            <div class="mb-5">
                <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duration</label>
                <input type="number"  name="duration" value="<?php echo $duration ?>"  id="duration" placeholder="30 days" required class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                <span class="mt-4 block ml-4 text-xs text-red-600 dark:text-red-400 "> <?php echo $durationErr; ?></span>
            </div>
    
    
            <div class="mb-5">
                <label for="experince" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your Experince</label>
                <select name="experince" value="<?php echo $experince ?>"  id="experince" class="  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                </select>
                <span class="mt-4 block ml-4 text-xs text-red-600 dark:text-red-400 "> <?php echo $experinceErr; ?></span>
            </div>
            

            <div class="mb-5">
                <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your Country</label>
                <select name="country" value="<?php echo $country ?>" id="country" class="  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>United States</option>
                    <option>Canada</option>
                    <option>France</option>
                    <option>Germany</option>
                </select>
                <span class="mt-4 block ml-4 text-xs text-red-600 dark:text-red-400 "> <?php echo $countryErr; ?></span>
            </div>


            <div class="mb-5">
                <label for="category_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your Category</label>
                <select name="category_name" id="category_name" value="<?php echo $category_name ?>" class="  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
               
                <?php foreach ($allCategories as $parent): ?>
                     <option><?= $parent['category_name'] ?></option>
                <?php endforeach; ?>

                </select>
                    <span class="mt-4 block ml-4 text-xs text-red-600 dark:text-red-400 "> <?php echo $categoryErr; ?></span>
            </div>
    
    
    
            <Button type="submit"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update User</Button>
        </form>
    </div>


<?php
$content = ob_get_clean();
include_once 'views/layout.php';
?>