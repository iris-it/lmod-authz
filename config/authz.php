<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Redirect Path
    |--------------------------------------------------------------------------
    |
    | This option controls the default redirect path after a
    | successful login or register
    |
    */

    'redirect_path' => 'authz.edit_account',

    /*
    |--------------------------------------------------------------------------
    | Redirect Unauthenticated
    |--------------------------------------------------------------------------
    |
    | This option controls the behavior of the exception ( App\Exceptions\Handler.php )
    | if not net 'login' route is used
    |
    */

    'redirect_unauthenticated' => 'authz.get_login',

];