start: 
	composer install
	npm install
	php artisan optimize:clear
	php artisan ziggy:generate
	php artisan migrate
	npm run build

update:
	composer update
	npm update
