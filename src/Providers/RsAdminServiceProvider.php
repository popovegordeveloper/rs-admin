<?php


namespace Rs\RsAdmin\Providers;


use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;
use Rs\RsAdmin\Console\InstallCommand;
use Rs\RsAdmin\Middleware\Authenticate;

class RsAdminServiceProvider extends ServiceProvider
{
    protected $commands = [
        InstallCommand::class
    ];

    protected $routeMiddleware = [
        'admin.auth'       => Authenticate::class,
    ];

    protected $middlewareGroups = [
        'admin' => [
            'admin.auth',
        ],
    ];

    public function register()
    {
        config(Arr::dot(config('rs_admin.auth', []), 'auth.'));

        $this->registerRouteMiddleware();

        if ($this->app->runningInConsole())
            $this->commands($this->commands); //Регистрация комманд

        $this->registerRouteMiddleware();
    }

    public function boot()
    {
        $this->ensureHttps();

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../../config' => config_path()], 'rs-admin-config'); //Конфиг
            $this->publishes([
                __DIR__ . '/../../database/migrations' => database_path('migrations'),
                __DIR__ . '/../../database/seeds' => database_path('seeds'),
            ], 'rs-admin-migrations'); //Миграции
            $this->publishes([
                __DIR__ . '/../../resources/assets' => public_path('vendor/rs-admin'),
                __DIR__ . '/../../resources/images' => public_path('vendor/rs-admin/images'),
                ], 'rs-admin-assets'); //Публикуем CSS и JS
        }

        //Загружаем вьюхи
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'rs-admin');
        //Загружаем роуты
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
    }

    /**
     * Для https
     */
    protected function ensureHttps()
    {
        if (config('admin.https') || config('admin.secure')) {
            url()->forceScheme('https');
            $this->app['request']->server->set('HTTPS', true);
        }
    }

    /**
     * Регистрация посредников
     */
    protected function registerRouteMiddleware()
    {
        // register route middleware.
        foreach ($this->routeMiddleware as $key => $middleware) {
            app('router')->aliasMiddleware($key, $middleware);
        }

        // register middleware group.
        foreach ($this->middlewareGroups as $key => $middleware) {
            app('router')->middlewareGroup($key, $middleware);
        }
    }
}
