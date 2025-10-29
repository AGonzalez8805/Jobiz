<?php

namespace App\Controller;

class ErrorController extends Controller
{
    //  Affiche une page d'erreur avec un message spécifique.
    public function show(string $errorMessage): void
    {
        // Rend la vue d'erreur par défaut, en lui passant le message d'erreur à afficher.
        $this->render("errors/default", [
            "errorMessage" => $errorMessage
        ]);
    }
}
