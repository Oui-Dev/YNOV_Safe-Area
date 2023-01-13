start: 
	composer install
	npm install
	php artisan optimize:clear
	php artisan ziggy:generate
	npm run build

update:
	composer update
	npm update
