<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Running the application

1. **Run the Application**: To run the application locally, use the following command:
    ```
    php artisan serve
    ```
   Then, navigate to [localhost:8000/tasks](http://localhost:8000/tasks) in your web browser.

2. **Tailwind CSS Styling**: To automatically compile Tailwind CSS styles as you add classes to HTML tags, run the following command:
    ```
    npx tailwindcss -i ./resources/css/app.css -o ./public/output.css --watch
    ```

3. **MySQL with Docker**: If you're using MySQL with Docker, you can run the following command to start the MySQL service:
    ```
    docker-compose up
    ```
