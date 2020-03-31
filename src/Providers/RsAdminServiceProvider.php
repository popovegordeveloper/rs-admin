<?php


namespace Rs\RsAdmin\Providers;


use Illuminate\Support\ServiceProvider;

class RsAdminServiceProvider extends ServiceProvider
{
    protected $commands = [
    ];

    protected $routeMiddleware = [
    ];

    protected $middlewareGroups = [
        'admin' => [
        ],
    ];

    public function register()
    {
        $this->registerRouteMiddleware();

        if ($this->app->runningInConsole())
            $this->commands($this->commands); //Регистрация комманд
    }

    public function boot()
    {
        $this->ensureHttps();

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../../config' => config_path()], 'rs-admin-config'); //Конфиг
            $this->publishes([__DIR__ . '/../../database/migrations' => database_path('migrations')], 'rs-admin-migrations'); //Миграции
            $this->publishes([__DIR__ . '/../../resources/assets' => public_path('vendor/rs-admin'),], 'rs-admin-assets'); //Публикуем CSS и JS
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
