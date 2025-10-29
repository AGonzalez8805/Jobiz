<?php
require_once APP_ROOT . "/view/header.php";
/** @var App\Entity\Job $job*/
?>
<section class="flex-grow text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap justify-center">
        <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
            <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-4xl mb-2 text-gray-900"><?= $job->getTitle() ?></h1>
                <div class="leading-relaxed text-lg"><?= $job->getDescription() ?></div>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                <h2 class="title-font font-medium text-5xl text-gray-900"><?= $job->getSalary() ?></h2>
                <p class="leading-relaxed">€</p>
            </div>
            <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                <h2 class="title-font font-medium text-xl text-gray-900"><?= $job->getCreatedAt()->format('Y-m-d H:i:s') ?></h2>
                <p class="leading-relaxed">Date</p>
            </div>
        </div>
    </div>
</section>
<?php
require_once APP_ROOT . "/view/footer.php";
?>