<?php

namespace Blankqwq\StatusRoute;

use Blankqwq\StatusRoute\Contract\RouterContract;
use Blankqwq\StatusRoute\Route\Router;
use Illuminate\Support\ServiceProvider;

class StatusRouteServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(RouterContract::class, function () {
            return new Router();
        });
    }
}