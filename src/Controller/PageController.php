<?php

namespace App\Controller;

class PageController extends Controller
{
    public function home(): void
    {

        $this->render("pages/home");
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
