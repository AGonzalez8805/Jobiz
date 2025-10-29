USE Jobiz;

-- Creation de la table Country
CREATE TABLE Country(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        name VARCHAR (255) NOT NULL,
)

-- Insertion de pays
INSERT INTO `Country` (`id`, `name`) VALUES
(1, 'France'),
(2, 'Espagne');

-- Creation de la table Company
CREATE TABLE Compagny(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        name VARCHAR (255) NOT NULL,
        FOREIGN KEY (id_country) REFERENCES country(id)
)

-- Insertion de compagnies
INSERT INTO company (name, id_country) VALUES
('DELL', 1),
('OVH', 1);

-- Création de la table Job
CREATE TABLE job (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    salary INT NOT NULL,
    created_at DATETIME NOT NULL,
    FOREIGN KEY (id_country) REFERENCES country(id)
    FOREIGN KEY (id_company) REFERENCES company(id)
)

-- Insertion d’offres d’emploi
INSERT INTO job (title, description, salary, id_country, id_company, created_at) VALUES
('Développeur Fullstack JavaScript', 'Nous recherchons un développeur fullstack expérimenté pour concevoir, développer et maintenir des applications web performantes. Vous travaillerez en étroite collaboration avec les équipes produit et design. Une excellente maîtrise de React, Node.js et des outils de versioning est attendue.', 45000, 1, 1, '2025-07-02 18:17:39'),
('Ingénieur DevOps', 'Vous rejoindrez notre équipe DevOps pour automatiser l’infrastructure, assurer la continuité de service et améliorer les processus de déploiement. Connaissance de Docker, Kubernetes, GitLab CI/CD et cloud (AWS ou GCP) requise. Vous êtes rigoureux, autonome et force de proposition.', 55000, 1, 2, '2025-07-02 18:17:43'),
('Administrateur Systèmes Linux', 'En tant qu’administrateur systèmes, vous assurerez la gestion quotidienne, le monitoring et la sécurisation de nos serveurs sous Linux. Vous serez également en charge de la mise en place de scripts d’automatisation avec Bash, Ansible ou Python. Connaissance en réseau fortement appréciée.', 42000, 1, 1, '2025-07-01 18:17:52'),
('Développeur Backend PHP Symfony', 'Vous participerez au développement d’APIs robustes en PHP à l’aide du framework Symfony. Le poste nécessite une bonne maîtrise des concepts MVC, des tests automatisés et des bases de données relationnelles. Une expérience en RESTful API est un plus pour ce poste à responsabilité croissante.', 48000, 1, 2, '2025-07-04 18:17:49'),
('Développeur Mobile React Native', 'Intégré à l’équipe mobile, vous développerez des applications cross-platform en React Native. Vous serez impliqué dans la conception technique, l’intégration d’API et l’optimisation des performances. Une connaissance de l’écosystème mobile et des bonnes pratiques UX/UI est indispensable.', 46000, 1, 1, '2025-06-04 18:17:57'),
('Ingénieur SRE (Site Reliability Engineer)', 'Vous participerez à la construction d’une infrastructure résiliente et scalable. Vos missions incluent le monitoring, la gestion des incidents, la rédaction de post-mortem et l’amélioration continue. Expertise en cloud, scripting et culture DevOps fortement recommandée pour ce rôle stratégique.', 60000, 1, 2, '2025-07-11 18:18:01');

-- Création de la table Category
CREATE TABLE category (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
)

-- Insertion des catégories
INSERT INTO category (name) VALUES
('Développeur fullstack'),
('Devops'),
('Administrateur système'),
('Technicien informatique');

-- Création de la table User
CREATE TABLE user (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        first_name VARCHAR(255) NOT NULL,
        last_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
)

-- Création de la table Job Application
CREATE TABLE job_application (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        cover_letter TEXT NOT NULL,
        created_at DATETIME NOT NULL,
        FOREIGN KEY (id_job) REFERENCES job(id)
        FOREIGN KEY (id_user) REFERENCES user(id)
)

-- Table de liaison Job-Category (relation many-to-many)
CREATE TABLE job_category (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        id_job INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        PRIMARY KEY (id_category, id_job),
        FOREIGN KEY (id_category) REFERENCES category(id)
        FOREIGN KEY (id_job) REFERENCES job(id)
)

-- Insertion de relation Job / Category
INSERT INTO job_category (id_job, id_category) VALUES
(8, 1);
