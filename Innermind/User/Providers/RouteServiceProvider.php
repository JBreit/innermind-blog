<?php

namespace Innermind\User\Providers;

use Innermind\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Innermind\User\Apis';

    protected $pathToRoutes = 'Innermind\User\Routes';
}