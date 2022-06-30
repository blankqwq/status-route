<?php

namespace Blankqwq\StatusRoute\Contract;

abstract class StatusHandler
{

    /**
     * @var RouterContract
     */
    private $status;

    public function __construct($status)
    {
        $this->status = $status;
    }

    // 处理器
    public abstract function handle();


}