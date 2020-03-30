## Deployment Instructions

<ul>
    <li>Clone the repo</li>
    <li>Run `composer install`</li>
    <li>Rename file .env.example to .env</li>
    <li>Set up database from the file located at resources\sql.sql</li>
    <li>Run seeds for fake dummy data, `php artisan db:seed`</li>
    <li>Generate key, `php artisan key:generate`</li>
    <li>Run the app, `php artisan serve`</li>
</ul>
