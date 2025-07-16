FROM php:8.2-apache


RUN apt-get update && apt-get install -y \
    git unzip zip libicu-dev libzip-dev libpq-dev libonig-dev \
    && docker-php-ext-install intl pdo pdo_mysql zip


RUN a2enmod rewrite


COPY default.conf /etc/apache2/sites-available/000-default.conf


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


RUN chown -R www-data:www-data /var/www/html


COPY . /var/www/html

EXPOSE 80