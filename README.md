## HaiyanUbills

How to install

1. You need to have LAMP/WAMP/MAMP stack installed in your system.
2. Install and run composer (https://getcomposer.org). `composer install` or `composer update`. This will load your Laravel package dependencies.
3. Install and run bower (https://bower.io). `bower install` or `bower update`. This will load your assets dependencies.
4. Create your database and configure the database settings accordingly.
5. Install the Laravel migration. `php artisan migrate:install`. This will create a table to your database for your migration.
6. Run the migrations. `php artisan migrate`. This will create your relations in your database.
7. Seed your database. `php artisan db:seed`. This will create predefined data to your database.