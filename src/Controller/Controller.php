<?php

namespace App\Controller;

class Controller
{
    // Rend une vue en incluant le fichier PHP correspondant et en lui passant des données.
    // Le chemin est relatif au dossier 'view'.
    protected function render(string $path, array $params = []): void
    {
        // Construit le chemin complet du fichier de la vue.
        $filePath = APP_ROOT . "/view/$path.php";

        // Vérifie si le fichier de la vue existe avant de tenter de l'inclure.
        if (!file_exists($filePath)) {
            echo "Le fichier $filePath n'existe pas";
        } else {
            // Extrait les clés du tableau $params en variables distinctes,
            // les rendant directement accessibles dans le fichier de la vue.
            extract($params);
            // Inclut le fichier de la vue pour afficher son contenu.
            require_once $filePath;
        }
    }
}
