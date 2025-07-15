# Étape 1 : Base PHP avec extensions
FROM php:8.2-fpm

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    git unzip libicu-dev libzip-dev zip \
    && docker-php-ext-install intl pdo zip

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier le projet Symfony
WORKDIR /var/www
COPY . .

# Autoriser Symfony Flex sans plugins
RUN composer config --no-plugins allow-plugins.symfony/flex true

# Installer les dépendances PHP sans exécuter les scripts
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Nettoyer et réchauffer le cache manuellement
RUN php bin/console cache:clear --env=prod \
    && php bin/console cache:warmup --env=prod

# Droits
RUN chown -R www-data:www-data /var/www

# Port exposé
EXPOSE 8000

# Commande de démarrage
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
