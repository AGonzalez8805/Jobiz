<!--  Importation de la classe Router (pour déterminer la route active) -->
<?php

use App\Routing\Router; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Encodage et responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Import de Tailwind CSS via CDN pour styliser le site -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Titre de la page  -->
    <title>Jobiz</title>
</head>

<body class="flex flex-col min-h-screen">
    <!-- Début du header -->
    <header class="text-gray-600 body-font">
        <!-- Container principal du header -->
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <!-- Logo / Nom du site -->
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <span class="ml-3 text-xl">Jobiz</span> <!-- Nom du site -->
            </a>
            <!-- Barre de navigation principale -->
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <!-- Lien vers la page d'accueil -->
                <a href="/" class="mr-5 hover:text-gray-900 <?= Router::isActiveRoute("/") ? "text-indigo-500" : "" ?>">
                    Accueil
                </a>
                <!-- Lien vers la page "A propos" -->
                <a href="/about/" class="mr-5 hover:text-gray-900 <?= Router::isActiveRoute("/about/") ? "text-indigo-500" : "" ?>">
                    A propos
                </a>
                <!-- Lien vers la page des offres d'emploi -->
                <a href="/jobs/" class="mr-5 hover:text-gray-900 <?= Router::isActiveRoute("/jobs/") ? "text-indigo-500" : "" ?>">
                    Les offres
                </a>
            </nav>
        </div>
    </header>