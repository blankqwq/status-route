<?php

namespace Blankqwq\StatusRoute\Facade;

use Illuminate\Support\Facades\Facade;

class StatusRoute extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'status-route';
    }
}