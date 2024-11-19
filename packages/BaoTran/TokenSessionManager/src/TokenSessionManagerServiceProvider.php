<?php

namespace BaoTran\TokenSessionManager;

use Illuminate\Support\ServiceProvider;
use BaoTran\TokenSessionManager\Services\TokenService;
use BaoTran\TokenSessionManager\Services\SessionService;

class TokenSessionManagerServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Bind các service vào container
        $this->app->singleton(TokenService::class, function () {
            return new TokenService();
        });

        $this->app->singleton(SessionService::class, function () {
            return new SessionService();
        });
    }

    public function boot()
    {
        // Load file config
        $this->publishes([
            __DIR__ . '/../config/token_session_manager.php' => config_path('token_session_manager.php'),
        ], 'config');
    }
}
