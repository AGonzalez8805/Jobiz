# Utiliser l'image PHP avec Apache
FROM php:8.2-apache

# Installer les extensions PHP nécessaires à Symfony
RUN apt-get update && apt-get install -y \
    git unzip zip libicu-dev libzip-dev libpq-dev libonig-dev \
    && docker-php-ext-install intl pdo pdo_mysql zip

# Activer mod_rewrite pour Symfony
RUN a2enmod rewrite

# Copier la conf Apache personnalisée
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir les bons droits
RUN chown -R www-data:www-data /var/www/html

# Copier les fichiers de l'application Symfony dans le conteneur
COPY . /var/www/html

EXPOSE 80
