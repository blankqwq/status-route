<?php

namespace Blankqwq\StatusRoute\Route;

class RouteCollection
{
    protected array $routes = [];
    private array $allRoutes = [];

    public function add(Route $route): Route
    {
        $this->addToCollection($route);
        return $route;
    }

    public function addToCollection(Route $route)
    {


    }
}
