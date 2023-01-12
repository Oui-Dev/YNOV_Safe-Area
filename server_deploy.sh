#!/bin/sh
set -e

echo "Deploying application ..."

# Enter maintenance mode
(php artisan down) || true
    # Update codebase
    git reset --hard
    git pull origin prod
    npm install

    # Install dependencies based on lock file
    composer install --no-interaction --prefer-dist --optimize-autoloader

    # Migrate database
    php artisan migrate --force
    php artisan optimize:clear

    php artisan ziggy:generate

    # Note: If you're using queue workers, this is the place to restart them.
    # ...

    # Clear cache
    php artisan optimize

    npm run build

    # Reload PHP to update opcache
    service php8.1-fpm reload
# Exit maintenance mode
php artisan up

echo "Application deployed!"
