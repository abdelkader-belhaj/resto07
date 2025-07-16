# Étape 1 : Build avec toutes les dépendances
FROM php:8.2-fpm as build

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    git unzip libicu-dev libzip-dev zip \
    && docker-php-ext-install intl pdo zip

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier le projet Symfony
WORKDIR /app
COPY . .

# Autoriser Symfony Flex sans plugins
RUN composer config --no-plugins allow-plugins.symfony/flex true

# Installer avec toutes les dépendances
RUN composer install --no-scripts

# Nettoyer et réchauffer le cache
RUN php bin/console cache:clear --env=prod \
    && php bin/console cache:warmup --env=prod

# Optimiser pour la production
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Étape 2 : Image finale
FROM php:8.2-fpm

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    libicu-dev libzip-dev \
    && docker-php-ext-install intl pdo zip

# Copier l'application depuis l'étape de build
WORKDIR /app
COPY --from=build /app .

# Droits
RUN chown -R www-data:www-data /app

# Copier le script d'entrée
COPY docker-entrypoint.sh /docker-entrypoint.sh
RUN chmod +x /docker-entrypoint.sh

# Exposer un port
EXPOSE 8000

# Utiliser le script d'entrée comme point d'entrée
CMD ["/docker-entrypoint.sh"]