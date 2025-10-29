<?php

namespace App\Routing;

use App\Controller\ErrorController;

//Gère le routage des requêtes web vers les contrôleurs appropriés.
class Router
{
    //Stocke l'ensemble des routes définies par l'application.
    private $routes;

    //Initialise le routeur en chargeant la configuration des routes.
    public function __construct()
    {
        $this->routes = require_once APP_ROOT . "/config/routes.php";
    }

    //Traite une requête URI entrante et exécute l'action correspondante.
    public function handleRequest(string $uri)
    {
        try {
            // Normalise le chemin de l'URI pour la correspondance des routes.
            $path = $this->normalizePath($uri);

            // Vérifie si la route existe dans la configuration.
            if (!isset($this->routes[$path])) {
                throw new \Exception("La route n'existe pas.");
            }

            // Récupère les informations du contrôleur et de l'action pour la route.
            $route = $this->routes[$path];
            $controllerPath = $route["controller"];
            $action = $route["action"];

            // Vérifie si la classe du contrôleur existe.
            if (!class_exists($controllerPath)) {
                throw new \Exception("La classe n'existe pas.");
            }

            // Crée une instance du contrôleur.
            $controller = new $controllerPath();
            // Vérifie si la méthode (action) existe dans le contrôleur.
            if (!method_exists($controller, $action)) {
                throw new \Exception("L'action n'existe pas.");
            }
            // Exécute l'action du contrôleur.
            $controller->$action();
        } catch (\Exception $e) {
            // En cas d'erreur, affiche la page d'erreur avec le message approprié.
            $errorController = new ErrorController();
            $errorController->show($e->getMessage());
        }
    }

    //Normalise un chemin URI en supprimant les slashes superflus et en ajoutant un slash final.
    public static function normalizePath(string $uri): string
    {
        $path = parse_url($uri, PHP_URL_PATH);
        $path = rtrim($path, "/") . "/";
        return $path;
    }

    //Vérifie si un chemin donné correspond à la route actuellement active dans l'URL.
    public static function isActiveRoute(string $path): bool
    {
        return self::normalizePath($_SERVER["REQUEST_URI"]) === $path;
    }
}
