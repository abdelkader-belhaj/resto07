# Étape 1 : Base PHP avec extensions
FROM php:8.2-fpm

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

# Installer les dépendances PHP sans optimisation d'abord
RUN composer install --no-scripts

# Nettoyer et réchauffer le cache manuellement
RUN php bin/console cache:clear --env=prod \
    && php bin/console cache:warmup --env=prod

# Droits (optionnel sur Render mais bon à avoir)
RUN chown -R www-data:www-data /app

# Copier le script d'entrée
COPY docker-entrypoint.sh /docker-entrypoint.sh
RUN chmod +x /docker-entrypoint.sh

# Exposer un port (Render choisira une valeur réelle à l'exécution)
EXPOSE 8000

# Utiliser le script d'entrée comme point d'entrée
CMD ["/docker-entrypoint.sh"]