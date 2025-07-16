<?php

namespace App\Controller;

class Controller
{

    protected function render(string $path): void
    {
        $filePath = APP_ROOT . "/view/$path.php";
        if (!file_exists($filePath)) {
            echo "Le fichhier $filePath n'existe pas";
        } else {
            require_once $filePath;
        }
    }
}
