<!--  Inclusion de l'en-tête HTML (structure commune du site) -->
<?php require_once APP_ROOT . "/view/header.php"; ?>
<main class="flex-grow text-gray-600 body-font">
    <!-- Section d'accroche principale -->
    <section class="bg-white">
        <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
            <!-- Titre principal -->
            <h1 class="title-font sm:text-5xl text-3xl mb-4 font-bold text-gray-900 text-center">
                Trouvez l’emploi fait pour vous
            </h1>
            <!-- Texte descriptif -->
            <p class="mb-8 leading-relaxed text-center max-w-xl text-gray-700">
                Jobiz connecte les talents et les entreprises avec une approche humaine, moderne et intelligente du marché du travail.
            </p>
            <!-- Boutons d'action -->
            <div class="flex justify-center">
                <!-- Lien vers les offres d'emploi -->
                <a href="/jobs/" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                    Voir les offres
                </a>
                <!-- Lien vers la page "À propos" -->
                <a href="/about/" class="ml-4 inline-flex text-indigo-500 border border-indigo-500 py-2 px-6 hover:bg-indigo-50 rounded text-lg">
                    En savoir plus
                </a>
            </div>
        </div>
    </section>
    <!-- Section présentant les services -->
    <section>
        <div class="container px-5 py-24 mx-auto">
            <!-- Titre de section -->
            <div class="flex flex-col text-center w-full mb-20">
                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">Nos services</h2>
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Accompagnement & Opportunités</h1>
            </div>
            <!-- Cartes de services -->
            <div class="flex flex-wrap -m-4">
                <!-- Service 1 : Recrutement intelligent -->
                <div class="p-4 md:w-1/2 lg:w-1/4">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg p-6">
                        <h2 class="text-lg font-medium text-gray-900 mb-2">Recrutement intelligent</h2>
                        <p class="leading-relaxed text-base mb-4">Des algorithmes qui vous connectent aux meilleures offres selon vos compétences et valeurs.</p>
                        <a href="/jobs/" class="text-indigo-500 inline-flex items-center">Explorer
                            <!-- Icône flèche -->
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M5 12h14M12 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Service 2 : Coaching personnalisé -->
                <div class="p-4 md:w-1/2 lg:w-1/4">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg p-6">
                        <h2 class="text-lg font-medium text-gray-900 mb-2">Coaching personnalisé</h2>
                        <p class="leading-relaxed text-base mb-4">Préparez vos entretiens, optimisez vos candidatures et trouvez votre voie.</p>
                        <a href="/about/" class="text-indigo-500 inline-flex items-center">Découvrir
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M5 12h14M12 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Service 3 : Suivi de carrière -->
                <div class="p-4 md:w-1/2 lg:w-1/4">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg p-6">
                        <h2 class="text-lg font-medium text-gray-900 mb-2">Suivi de carrière</h2>
                        <p class="leading-relaxed text-base mb-4">Un tableau de bord pour suivre vos candidatures et évoluer professionnellement.</p>
                        <a href="/dashboard/" class="text-indigo-500 inline-flex items-center">Accéder
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M5 12h14M12 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Service 4 : Entreprises partenaires -->
                <div class="p-4 md:w-1/2 lg:w-1/4">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg p-6">
                        <h2 class="text-lg font-medium text-gray-900 mb-2">Entreprises partenaires</h2>
                        <p class="leading-relaxed text-base mb-4">Nous travaillons avec des recruteurs engagés et transparents.</p>
                        <a href="/about/" class="text-indigo-500 inline-flex items-center">Voir plus
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M5 12h14M12 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section des catégories d'emploi -->
    <section class="bg-gray-50">
        <div class="container px-5 py-24 mx-auto">
            <h2 class="text-2xl font-bold text-gray-900 mb-12 text-center">Catégories d'emploi</h2>
            <div class="flex flex-wrap -m-4 justify-center">
                <!-- Bloc 1 : Métiers techniques -->
                <div class="p-4 md:w-1/2 lg:w-1/3">
                    <div class="h-full">
                        <h3 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Métiers techniques</h3>
                        <nav class="list-none mb-10">
                            <!-- Boucle sur les catégories techniques -->
                            <?php foreach ($categories as $category): ?>
                                <li><a class="text-gray-600 hover:text-gray-800"><?= $category->getName() ?></a></li>
                            <?php endforeach; ?>
                        </nav>
                    </div>
                </div>
                <!-- Bloc 2 : Métiers du tertiaire -->
                <div class="p-4 md:w-1/2 lg:w-1/3">
                    <div class="h-full">
                        <h3 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Métiers du tertiaire</h3>
                        <nav class="list-none mb-10">
                            <!-- Même boucle ici (à adapter si besoin par filtre métier) -->
                            <?php foreach ($categories as $category): ?>
                                <li><a class="text-gray-600 hover:text-gray-800"><?= $category->getName() ?></a></li>
                            <?php endforeach; ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Inclusion du pied de page -->
<?php require_once APP_ROOT . "/view/footer.php"; ?>