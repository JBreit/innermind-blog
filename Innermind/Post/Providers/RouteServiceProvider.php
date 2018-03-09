<?php

namespace Innermind\Post\Providers;

use Innermind\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Innermind\Post\Apis';

    protected $pathToRoutes = 'Innermind\Post\Routes';
}