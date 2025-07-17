USE Jobiz;

CREATE TABLE Country(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (255) NOT NULL
	,CONSTRAINT Country_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

INSERT INTO `Country` (`id`, `name`) VALUES
(1, 'France'),
(2, 'Espagne');

CREATE TABLE Company(
        id         Int  Auto_increment  NOT NULL ,
        name       Varchar (255) NOT NULL ,
        id_Country Int NOT NULL
	,CONSTRAINT Company_PK PRIMARY KEY (id)

	,CONSTRAINT Company_Country_FK FOREIGN KEY (id_Country) REFERENCES Country(id)
)ENGINE=InnoDB;

INSERT INTO `Company` (`id`, `name`, `id_Country`) VALUES
(1, 'DELL', 1),
(2, 'OVH', 1);

CREATE TABLE Job(
        id          Int  Auto_increment  NOT NULL ,
        title       Varchar (255) NOT NULL ,
        description Text NOT NULL ,
        salary      Int NOT NULL ,
        createdAt   Datetime NOT NULL ,
        id_Country  Int NOT NULL ,
        id_Company  Int NOT NULL
	,CONSTRAINT Job_PK PRIMARY KEY (id)

	,CONSTRAINT Job_Country_FK FOREIGN KEY (id_Country) REFERENCES Country(id)
	,CONSTRAINT Job_Company0_FK FOREIGN KEY (id_Company) REFERENCES Company(id)
)ENGINE=InnoDB;

INSERT INTO `Job` (`id`, `title`, `description`, `salary`, `id_Country`, `id_Company`, `createdAt`) VALUES
(8, 'Développeur Fullstack JavaScript', 'Nous recherchons un développeur fullstack expérimenté pour concevoir, développer et maintenir des applications web performantes. Vous travaillerez en étroite collaboration avec les équipes produit et design. Une excellente maîtrise de React, Node.js et des outils de versioning est attendue.', 45000, 1, 1, '2025-07-02 18:17:39'),
(9, 'Ingénieur DevOps', 'Vous rejoindrez notre équipe DevOps pour automatiser l’infrastructure, assurer la continuité de service et améliorer les processus de déploiement. Connaissance de Docker, Kubernetes, GitLab CI/CD et cloud (AWS ou GCP) requise. Vous êtes rigoureux, autonome et force de proposition.', 55000, 1, 2, '2025-07-02 18:17:43'),
(10, 'Administrateur Systèmes Linux', 'En tant qu’administrateur systèmes, vous assurerez la gestion quotidienne, le monitoring et la sécurisation de nos serveurs sous Linux. Vous serez également en charge de la mise en place de scripts d’automatisation avec Bash, Ansible ou Python. Connaissance en réseau fortement appréciée.', 42000, 1, 1, '2025-07-01 18:17:52'),
(11, 'Développeur Backend PHP Symfony', 'Vous participerez au développement d’APIs robustes en PHP à l’aide du framework Symfony. Le poste nécessite une bonne maîtrise des concepts MVC, des tests automatisés et des bases de données relationnelles. Une expérience en RESTful API est un plus pour ce poste à responsabilité croissante.', 48000, 1, 2, '2025-07-04 18:17:49'),
(12, 'Développeur Mobile React Native', 'Intégré à l’équipe mobile, vous développerez des applications cross-platform en React Native. Vous serez impliqué dans la conception technique, l’intégration d’API et l’optimisation des performances. Une connaissance de l’écosystème mobile et des bonnes pratiques UX/UI est indispensable.', 46000, 1, 1, '2025-06-04 18:17:57'),
(13, 'Ingénieur SRE (Site Reliability Engineer)', 'Vous participerez à la construction d’une infrastructure résiliente et scalable. Vos missions incluent le monitoring, la gestion des incidents, la rédaction de post-mortem et l’amélioration continue. Expertise en cloud, scripting et culture DevOps fortement recommandée pour ce rôle stratégique.', 60000, 1, 2, '2025-07-11 18:18:01');

CREATE TABLE Category(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (255) NOT NULL
	,CONSTRAINT Category_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

INSERT INTO `Category` (`id`, `name`) VALUES
(1, 'Développeur fullstack'),
(2, 'Devops'),
(3, 'Administrateur système'),
(4, 'Technicien informatique');

CREATE TABLE User(
        id        Int  Auto_increment  NOT NULL ,
        firstName Varchar (255) NOT NULL ,
        lastName  Varchar (255) NOT NULL ,
        email     Varchar (255) NOT NULL ,
        password  Varchar (255) NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE job_application(
        id          Int  Auto_increment  NOT NULL ,
        coverLetter Text NOT NULL ,
        createdAt   Datetime NOT NULL ,
        id_Job      Int NOT NULL ,
        id_User     Int NOT NULL
	,CONSTRAINT job_application_PK PRIMARY KEY (id)

	,CONSTRAINT job_application_Job_FK FOREIGN KEY (id_Job) REFERENCES Job(id)
	,CONSTRAINT job_application_User0_FK FOREIGN KEY (id_User) REFERENCES User(id)
)ENGINE=InnoDB;

CREATE TABLE Job_Category(
        id     Int NOT NULL ,
        id_Job Int NOT NULL
	,CONSTRAINT Job_Category_PK PRIMARY KEY (id,id_Job)

	,CONSTRAINT Job_Category_Category_FK FOREIGN KEY (id) REFERENCES Category(id)
	,CONSTRAINT Job_Category_Job0_FK FOREIGN KEY (id_Job) REFERENCES Job(id)
)ENGINE=InnoDB;


INSERT INTO `Job_Category` (`id_Job`, `id`) VALUES
(1, 1);


