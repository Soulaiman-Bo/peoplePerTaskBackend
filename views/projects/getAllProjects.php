<?php
ob_start();
?>

<a href="./index.php?viewofproject=createProject" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block mb-7 font-inter text-white w-fit bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        + Add New Project
</a>

<div class="flex flex-col justify-center items-center">

        <div class="flex flex-col max-w-3xl gap-5 p-5 border rounded-xl bg-white">
          <p class="text-2xl mb-3 text-orange-600">HTML and CSS Developer</p>
          <p class="text-orange-900">
            Hourly: <strong>$15 - $30</strong> - Posted 4 hours ago
          </p>
          <div class="flex gap-11 flex-wrap">
            <p class="flex flex-col font-semibold text-primary-950">
              Less than 30 hrs/week
              <span class="font-medium text-gray-500">Hours Needed</span>
            </p>
            <p class="flex flex-col font-semibold text-primary-950">
              Less than 1 month
              <span class="font-medium text-gray-500">Duration</span>
            </p>
            <p class="flex flex-col font-semibold text-primary-950">
                Intermediat
                <span class="font-medium text-gray-500">Experince Level</span>
              </p>
          </div>
          
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id cum
            dignissimos quas iste nulla quisquam tempore, voluptas sed odit
            ullam pariatur atque quaerat ipsam commodi placeat labore tenetur
            dolor maxime. Quod, debitis? Corporis rem ipsum architecto quisquam
            qui dicta iusto!
          </p>
          <p class="flex gap-3">
            <span class="bg-orange-200 py-2 px-3 rounded-2xl">HTML</span>
            <span class="bg-orange-200 py-2 px-3 rounded-2xl">HTMl5</span>
            <span class="bg-orange-200 py-2 px-3 rounded-2xl">CSS</span>
            <span class="bg-orange-200 py-2 px-3 rounded-2xl">tailwindCSS</span>
            <span class="bg-orange-200 py-2 px-3 rounded-2xl">PHP</span>
          </p>
          <p class="font-medium text-gray-500">
            Proposals:<span class="font-semibold text-primary-950"> 50+</span>
          </p>
          <p class="font-semibold text-primary-950">France</p>
        </div>
</div>

<?php
$content = ob_get_clean();
include_once 'views/layout.php';
?>