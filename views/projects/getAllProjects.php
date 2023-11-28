<?php
ob_start();
?>

<a href="./index.php?viewofproject=createProject" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block mb-7 font-inter text-white w-fit bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  + Add New Project
</a>

<div class="flex flex-col justify-center items-center">

  <?php foreach ($allProject as $project) : ?>
    <div class="flex flex-col max-w-4xl gap-8 p-10 border rounded-xl mb-14 bg-white dark:bg-gray-800 dark:border-gray-700">


      <div class="flex justify-between">
        <p class="text-2xl mb-3 text-orange-600">HTML and CSS Developer</p>
        <p class="flex gap-6">
          <a href="./index.php?viewofproject=updateProject&project=<?= $project['ID'] ?>" class="font-medium font-inter text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
          <a href="./index.php?viewofproject=deleteProject&project=<?= $project['ID'] ?>" class="font-medium font-inter text-red-600 dark:text-red-500 hover:underline">Delete</a>
        </p>
      </div>
      <p class="text-orange-900 dark:text-orange-600">
        Hourly: <strong>$<?= $project['minprice'] ?> - $<?= $project['maxprice'] ?></strong> - Posted 4 hours ago
      </p>
      <div class="flex gap-14 flex-wrap">
        <p class="flex flex-col font-inter font-semibold text-primary-950 dark:text-primary-700">
          Less than <?= $project['hours'] ?> hrs/week
          <span class="font-medium font-inter text-gray-500 dark:text-gray-400">Hours Needed</span>
        </p>
        <p class="flex flex-col font-inter font-semibold text-primary-950 dark:text-primary-700">
          Less than <?= $project['duration'] ?> month
          <span class="font-medium font-inter text-gray-500 dark:text-gray-400">Duration</span>
        </p>
        <p class="flex flex-col font-inter font-semibold text-primary-950 dark:text-primary-700">
          <?= $project['experince'] ?>
          <span class="font-medium font-inter text-gray-500 dark:text-gray-400">Experince Level</span>
        </p>
      </div>

      <p class="dark:text-orange-50 font-inter">
        <?= $project['description'] ?>
      </p>
      <p class="flex gap-3">
        <span class="bg-orange-200 dark:bg-orange-300 font-inter py-2 px-3 rounded-2xl">HTML</span>
        <span class="bg-orange-200 dark:bg-orange-300 font-inter py-2 px-3 rounded-2xl">HTMl5</span>
        <span class="bg-orange-200 dark:bg-orange-300 font-inter py-2 px-3 rounded-2xl">CSS</span>
        <span class="bg-orange-200 dark:bg-orange-300 font-inter py-2 px-3 rounded-2xl">tailwindCSS</span>
        <span class="bg-orange-200 dark:bg-orange-300 font-inter py-2 px-3 rounded-2xl">PHP</span>
      </p>
      <p class="font-medium text-gray-500 dark:text-gray-400">
        Proposals:<span class="font-semibold text-primary-950 dark:text-primary-700">+50</span>
      </p>
      <p class="flex gap-16">
        <span class="font-medium text-gray-500 dark:text-gray-400">Posted By:
          <span class="font-semibold text-primary-950 dark:text-primary-700">Soulaiman Bouhlal</span> </span>
      </p>
      <p class="font-semibold text-primary-950 dark:text-primary-700"><?= $project['country'] ?></p>
    </div>
  <?php endforeach; ?>




</div>

<?php
$content = ob_get_clean();
include_once 'views/layout.php';
?>