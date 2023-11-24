# Étape 1: Construire l'environnement PHP avec les extensions nécessaires
FROM php:8.2-fpm AS php

# Installer les dépendances système pour PHP et les extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# Installer les extensions PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Étape 2: Installer Node.js pour Inertia et Vue.js
FROM node:18 AS node

# Étape 3: Construire l'application
FROM php AS build

# Définir le répertoire de travail
WORKDIR /var/www

# Copier le code source de l'application dans le conteneur
COPY . /var/www

# Installer les dépendances Composer
RUN composer install

# Installer les dépendances Node.js
COPY --from=node /usr/local/bin/node /usr/local/bin/
COPY --from=node /usr/local/lib/node_modules /usr/local/lib/node_modules
RUN ln -s /usr/local/lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm

RUN npm install

# Copier le fichier .env.example et le renommer en .env
COPY .env.example .env

# Générer les clés de l'application
RUN php artisan key:generate

# Migrer la base de données (assurez-vous que la base de données est accessible)
# RUN php artisan migrate:fresh --seed

# Générer le fichier de routage
RUN php artisan ziggy:generate

# Compiler les assets
RUN npm run build

# Étape 4: Configurer le serveur web (ici, on utilise Nginx)
FROM nginx:alpine AS server

# Copier la configuration Nginx
COPY .docker/nginx/default.conf /etc/nginx/conf.d/

# Copier le code source et les assets dans le dossier du serveur web
COPY --from=build /var/www /var/www

# Exposer le port 80
EXPOSE 80

# Lancer Nginx
CMD ["nginx", "-g", "daemon off;"]
