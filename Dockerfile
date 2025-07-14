# Base PHP avec Apache
FROM php:8.2-apache

# Installer dépendances PHP utiles pour Symfony et Firebase
RUN apt-get update && apt-get install -y \
    git unzip zip curl libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo mbstring zip xml intl \
    && a2enmod rewrite

# Copier le projet dans le container
COPY . /app

# Copier le fichier credentials Firebase dans /app/config/firebase/
COPY config/firebase/symfony07-firebase-adminsdk-fbsvc-7148aaa659.json /app/config/firebase/

WORKDIR /app

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Installer les dépendances PHP sans dev
RUN composer install --no-dev --optimize-autoloader

# Donner les droits nécessaires à www-data (Apache)
RUN chown -R www-data:www-data /app/var

# Copier script d'entrée et le rendre exécutable
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Exposer port 80
EXPOSE 80

# Utiliser le script d'entrée et lancer apache
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
