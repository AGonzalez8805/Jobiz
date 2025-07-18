# Jobiz 
Jobiz est une plateforme d'emploi spécialisée en informatique

Jobiz est une application web dédiée à la mise en relation des chercheurs d'emploi et des employeurs dans le secteur informatique. La plateforme permet aux utilisateurs de consulter des offres d'emploi, de filtrer les annonces selon plusieurs critères, et de postuler directement via une interface simple et moderne.

* 📌Fonctionnalités<br>
* 🔍Parcourir les offres d'emploi<br>
* 📁Filtrer par:<br>
    * Catégorie<br>
    * Fourchette de salaire<br>
    * Pays<br>
* 📄Détail complet d'une offre<br>
* 📝Formulaire de candidature avec lettre de motivation<br>
* 🔐Authentification des utilisateurs (connexion, inscription)<br>

* 🧑‍💻Utilisateurs<br>
    * Chercheurs d'emploi:<br>
        * Naviguer parmi les offres<br>
        * Utiliser les filtres pour affiner la recherche<br>
        * Postuler directement avec une lettre de motivation<br>



Jobiz
├───.vscode
│       settings.json
│       
├───config
│       routes.php
│       
├───public
│       .htaccess
│       index.php
│       
├───src
│   ├───Controller
│   │       Controller.php
│   │       ErrorController.php
│   │       JobController.php
│   │       PageController.php
│   │       
│   ├───Db
│   │       Mysql.php
│   │       
│   ├───Entity
│   │       Category.php
│   │       Entity.php
│   │       Job.php
│   │
│   ├───Repository
│   │       CategoryRepository.php
│   │       JobRepository.php
│   │       Repository.php
│   │
│   └───Routing
│           Router.php
│
├───vendor
│   │   autoload.php
│   │
│   └───composer
│           autoload_classmap.php
│           autoload_namespaces.php
│           autoload_psr4.php
│           autoload_real.php
│           autoload_static.php
│           ClassLoader.php
│           LICENSE
│
└───view
│   │   footer.php
│   │   header.php
│   │
│   ├───errors
│   │       default.php
│   │
│   ├───job
│   │       list.php
│   │       show.php
│   │
│   └───pages
│            about.php
│            home.php
│            test.php
│   .env
│   .env.example
│   .gitignore
│   000-default.conf
│   composer.json
│   docker-compose.yml
│   Dockerfile
│   Jobiz.session.sql
│   README.md