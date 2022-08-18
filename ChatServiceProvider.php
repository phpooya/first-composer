<?php

namespace Chat;

use Illuminate\Http\Response;
use Illuminate\Support\ServiceProvider;

class ChatServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot(Response $response)
    {
        app('router')->aliasMiddleware('add-chat', AddChatMiddleware::class);
        app('router')->pushMiddlewareToGroup('web', AddChatMiddleware::class);

        $this->loadRoutesFrom(__DIR__ . '/route.php');
        $this->loadViewsFrom(__DIR__, 'chat');
    }
}
