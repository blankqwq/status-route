<?php

namespace Blankqwq\StatusRoute\Route;

use Blankqwq\StatusRoute\Contract\RouterContract;
use Blankqwq\StatusRoute\Rule\Status;

class Router implements RouterContract
{
    protected $routes;

    public function __construct()
    {
        $this->routes = new RouteCollection();
    }

    public function command($command, $action): Route
    {
        return $this->addRoute('command', $command, $action);
    }

    public function event($eventType, $action): Route
    {
        return $this->addRoute('event', $eventType, $action);
    }

    public function status($status, $action): Route
    {
        return $this->addRoute('status', $status, $action);
    }

    private function addRoute($type, $matcher, $action): Route
    {
        return $this->routes->add($this->createRoute($type, $matcher, $action));
    }

    private function createRoute($type, $matcher, $action): Route
    {
        return new Route($type, $matcher, $action);
    }

    public function match($request, $currentQQ)
    {

    }


    protected function getEventActions($obj, $status): array
    {
        // 路由选择
        return [];
    }

    protected function getCommandActions($obj, $status): array
    {
        // 路由选择
        return [];
    }
}