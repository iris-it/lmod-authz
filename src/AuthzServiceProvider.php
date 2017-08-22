<?php

namespace Irisit\Authz;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Irisit\Authz\Console\Commands\ParsePermissions;
use Irisit\Authz\Http\Validators\HashValidator;

class AuthzServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * Internal Stuff
         */
        $this->bootValidator();

        /*
         * Package Loading Stuff
         */
        $this->publishes([__DIR__ . '/../config/authz.php' => config_path('irisit_authz.php')], 'config');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'authz');

        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/authz.php', 'irisit_authz');

        $this->app->register('Irisit\Authz\Providers\PermissionsServiceProvider');

        $this->app->register('Collective\Html\HtmlServiceProvider');

        $this->app->alias('Form', 'Collective\Html\FormFacade');

        $this->app->alias('Html', 'Collective\Html\HtmlFacade');

        $this->commands([ParsePermissions::class]);
    }

    private function bootValidator()
    {
        // to use 'hash:' . $user->password
        Validator::resolver(function ($translator, $data, $rules, $messages) {
            return new HashValidator($translator, $data, $rules, $messages);
        });

        Validator::replacer('hash', function ($message, $attribute, $rule, $parameters) {
            return __('The password doesn\'t match our records');
        });
    }
}