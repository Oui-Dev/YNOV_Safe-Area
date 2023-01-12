#!/bin/sh
set -e

echo "Deploying application ..."

# Enter maintenance mode
(php artisan down --message 'The app is being (quickly!) updated. Please try again in a minute.') || true
    # Update codebase
    git reset --hard
    git pull origin prod
    yarn install

    # Install dependencies based on lock file
    composer install --no-interaction --prefer-dist --optimize-autoloader

    # Migrate database
    php artisan migrate --force
    php artisan optimize

    php artisan ziggy:generate

    # Note: If you're using queue workers, this is the place to restart them.
    # ...

    # Clear cache
    php artisan optimize

    yarn run build

    # Reload PHP to update opcache
    echo "" | sudo -S service php8.1-fpm reload
# Exit maintenance mode
php artisan up

echo "Application deployed!"
