## esqueleto

- set .env variables
- composer require twbs/bootstrap
- composer require components/jquery
```
        "post-update-cmd": [
            "php -r \"copy('vendor/twbs/bootstrap/dist/css/*.min.css', 'public/css/');\""
            "cp -R vendor/twbs/bootstrap/dist/css/*.min.css public/css/",
            "cp -R vendor/twbs/bootstrap/dist/js/*.min.js public/js/",
            "cp -R vendor/components/jquery/*.min.js public/js/"
        ]
```

- php artisan make:auth
- update layout\app.blade.php: 
```
<!-- Styles Top of the page -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


<!-- jQuery first, then Popper.js, then Bootstrap JS Botton -->
<script src="{{ asset('js/jquery.slim.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('js/popper.min.js') }}" defer></script>
```

- composer require spatie/laravel-permission
- php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="migrations"
- php artisan migrate
- php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" --tag="config"

- -First, add the Spatie\Permission\Traits\HasRoles trait to your User model(s):

```
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;

    // ...
}
```
- add alias to Role and Permissions in config/app.php
```
/*Add permission and role alias*/
        'Role' => Spatie\Permission\Models\Role::class,
        'Permission' => Spatie\Permission\Models\Permission::class,
```
