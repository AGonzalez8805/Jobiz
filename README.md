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


Jobiz/<br>
├── .vscode </br>
│   └──settings.json <br>
├── config/<br>
│   └──routes.php <br>
├── public/<br>
│   ├── .htaccess<br>
│   └── index.php<br>
├── src/<br>
│   ├── Controller/<br>
|       ├── Controller.php<br>
|       ├── ErrorController.php<br>
|       ├── JobController.php<br>
│       └── PageController.php<br>
│   ├── Db/<br>
│       └── Mysql.php<br>
|   ├── Entity/<br>
|       ├── Category.php<br>
│       ├──Entity.php<br>
│       └── Job.php<br>
|   ├── Repository/<br>
|       ├──CategoryRepository.php<br>
|       ├──JobRepository.php<br>
│       └──Repository.php<br>
|   ├── Routing/<br>
│       └──Router.php<br>
├── vendor/<br>
|       ├──composer/<br>
│       └──autoload.php<br>
├── view/<br>
│    ├── errors/<br>
│       └── default.php<br>
│    ├── job/<br>
|       ├── list.php<br>
│       └── show.php<br>
│    ├── Pages/<br>
|       ├── about.php<br>
│       └── home.php<br>
│    ├── footer.php<br>
│    ├── header.php<br>
├── .env<br>
├── .env.example<br>
├── .gitignore<br>
├── composer.json<br>
├── 000-default.conf<br>
├── composer.json<br>
├── docker-compose.yml<br>
├── Dockerfile<br>
├── Jobiz.session.sql<br>
└── README.md<br>
