<?php

return [
    "/job/" => ["controller" => "App\Controller\JobController", "action" => "show"],
    "/jobs/" => ["controller" => "App\Controller\JobController", "action" => "list"],
    "/about/" => ["controller" => "App\Controller\PageController", "action" => "about"],
    "/" => ["controller" => "App\Controller\PageController", "action" => "home"],
];
