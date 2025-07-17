<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;

class PageController extends Controller
{
    public function home(): void
    {
        $categoryRepository = new CategoryRepository();

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
        $this->render("pages/home", [
            "categories" => $categories,

        ]);
    }

    public function about(): void
    {
        $this->render("pages/about");
    }

    // public function test(): void
    // {
    //     $this->render("pages/test");
    // }
}
