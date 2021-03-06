<?php

namespace Blankqwq\StatusRoute\Route;
/**
 * Route::event('');
 * Route::command('');
 * Route::status('');
 */
class Route
{
    private $type;
    private $matcher;
    private $action;

    private const ACTION_TYPE = [
        'command', 'status', 'event',
    ];
    private $router;
    private $container;

    public function __construct($type, $matcher, $action)
    {
        $this->matcher = $matcher;
        $this->type = $type;
        $this->action = $action;
    }

    public function status(...$status): Route
    {
        return $this;
    }

    public function group(...$groups): Route
    {
        return $this;
    }

    public function run()
    {
        //获取action
    }


}