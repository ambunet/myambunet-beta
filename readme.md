Installation for new App
extract the zip file
cd projectname
composer install
If you get the error that says: Base table or view not found: 1146 Table 'myambunet-beta.categories' - Comment out all your routes and all the custom service providers in (config/app.php)! You can uncomment later.
php artisan key:generate
Create a database and inform .env
php artisan migrate --seed to create and populate tables
Inform config/mail.php for email sends
php artisan vendor:publish to publish filemanager
For users with Homestead: Map your site in homestead.yaml file and add the url to your host file - The steps are similar to what is shown in the first section of this course
Run vagrant provision command to reprovision your machine - if you are using Homestead
php artisan serve to start the app on http://localhost:8000/
Make the necessary changes:
Add maigun domain and mailgun secret-key for mail function in .env

