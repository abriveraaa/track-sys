# Tracking System | Laravel 7

DESCRIPTION HERE

---

System requirements:

-   [Laravel 7+](https://laravel.com/docs/7.x/releases)
-   [PHP V7.3](https://www.apachefriends.org/download.html)

System is mostly generated with [AdminLTE](https://github.com/jeroennoten/Laravel-AdminLTE).

Other assets used:

-   [CoreUI Free theme](https://coreui.io/demo/#main.html) (Bootstrap 4)
-   [DOMPDF V0.9](https://github.com/dompdf/dompdf)
-   [ID Generator V1](https://github.com/haruncpi/laravel-id-generator)
-   [DataTables V9](https://yajrabox.com/docs/laravel-datatables/master/installation)

---

## How to use

### Preparation

-   Clone the repository with **git clone** or download the file
-   Copy **.env.example** file to **.env** and edit database credentials
-   Run **composer install**
-   Run **php artisan key:generate**
-   Run **php artisan migrate --seed** [has a default data(admin and assistant)to access the system]
-   Run **php artisan serve**

### Deployment

Run the following command or read the official documentation for [deployment](https://laravel.com/docs/7.x/deployment)

-   Run **composer install --optimize-autoloader --no-dev**
-   Run **php artisan config:cache**
-   Run **php artisan route:cache**
-   Run **php artisan view:cache**

### Default credentials

You can login to adminpanel with the following credentials:

#### Administrator:

-   username - __administrator@tems.com__

-   password - **password**

#### Assistant:

-   username - __assistant@tems.com__

-   password - **password**

## License

Basically, feel free to use any way you want.

---

## Connect with me

-   [Facebook](http://facebook.com/abriveraaa)
