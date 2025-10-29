<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;

// Gère les pages statiques de l'application.
class PageController extends Controller
{
    // Affiche la page d'accueil avec la liste des catégories.
    public function home(): void
    {
        // Instancie le dépôt de catégories pour interagir avec les données des catégories.
        $categoryRepository = new CategoryRepository();

        // Récupère toutes les catégories disponibles.
        $categories = $categoryRepository->findAll();

        //Exemple de création de catégorie (faudra créer un formulaire)
        /*
        $category = new Category();
        $category->setName("Test ABC");
        $res = $categoryRepository->persist($category);
        echo '<pre>';
        var_dump($res);
        echo '<pre>';
*/
        // Rend la vue 'home' en lui passant les catégories.
        $this->render("pages/home", [
            "categories" => $categories,

        ]);
    }
    // Affiche la page "À propos".
    public function about(): void
    {
        // Rend simplement la vue 'about'.
        $this->render("pages/about");
    }

    // public function test(): void
    // {
    //     $this->render("pages/test");
    // }
}
