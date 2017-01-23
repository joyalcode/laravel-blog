# Laravel blog application. 

This is a blog app based on laravel 5.3. It has minimum features (like categories, comments, user registration, searching, side bar etc..) required to setup a blog and features will be extended on request. 

Installation

git clone https://github.com/icodeweb/laravel-blog
cd laravel-blog
composer install 
cp .env.example .env 
update your .env file with database information
php artisan key:generate 
php artisan migrate
php artisan db:seed
Open the application in browser
