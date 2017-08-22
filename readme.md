# Authz Module

Documentation du module d'authentification et d'authorisation

## Fonctionnalités

#### Guest
- Sign up ✓
- Sign in ✓
- Forgot password ✓
- Reset password ✓

#### User
- Edit account information ✓
- Edit account password ✓

#### Admin
- List of users
-- Create user ✓
-- Edit user ✓
-- Enable / Disable user
-- Send password on new user ✓
-- Assign role to user ✓

- List of permissions 
-- Parse from source file ✓
-- Edit descriptions

- List of roles
-- Create role
-- Edit role 
--- Assign permissions to role

## Install

Begin by installing this package through Composer. Edit your project's composer.json file to require laravelcollective/html.

composer require `"laravelcollective/html":"^5.4.0"`

Next, add your new provider to the providers array of config/app.php:

```php
  'providers' => [
    // ...
    Collective\Html\HtmlServiceProvider::class,
    Irisit\Authz\AuthzServiceProvider::class,
    // ...
  ],
```

Finally, add two class aliases to the aliases array of config/app.php:

```php
  'aliases' => [
    // ...
      'Form' => Collective\Html\FormFacade::class,
      'Html' => Collective\Html\HtmlFacade::class,
    // ...
  ],
```

Replace all the in the `App\User::class`
```
<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Irisit\Authz\Models\BaseUser as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
```


Replace in migrations the `name` attribute by 
```
$table->string('firstname');
$table->string('lastname'); 
```

Replace the line in `App\Http\Kernel.php`

`'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,`

by

`'guest' => \Irisit\Authz\Http\Middleware\RedirectIfAuthenticated::class,`


Run 

`php artisan db:seed --class=Irisit\Authz\Database\Seeds\DatabaseSeeder`

Add to config/filesystem.php

```
        'base' => [
            'driver' => 'local',
            'root' => base_path() . DIRECTORY_SEPARATOR,
        ],
```