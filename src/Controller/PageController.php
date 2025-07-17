<?php

namespace App\Controller;

use App\Repository\CategoryRepository;

class PageController extends Controller
{
    public function home(): void
    {
        $categoryRepository = new CategoryRepository();

        $categories = $categoryRepository->findAll();

        $this->render("pages/home", [
            // "grettings" => $gretting,
            // "name" => $name,
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
