# Jobiz 
Jobiz est une plateforme d'emploi spécialisée en informatique

Jobiz est une application web dédiée à la mise en relation des chercheurs d'emploi et des employeurs dans le secteur informatique. La plateforme permet aux utilisateurs de consulter des offres d'emploi, de filtrer les annonces selon plusieurs critères, et de postuler directement via une interface simple et moderne.

📌Fonctionnalités
    🔍Parcourir les offres d'emploi
    📁Filtrer par:
        Catégorie
        Fourchette de salaire
        Pays
    📄Détail complet d'une offre
    📝Formulaire de candidature avec lettre de motivation
    🔐Authentification des utilisateurs (connexion, inscription)

🧑‍💻Utilisateurs
    Chercheurs d'emploi:
        Naviguer parmi les offres
        Utiliser les filtres pour affiner la recherche
        Postuler directement avec une lettre de motivation

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