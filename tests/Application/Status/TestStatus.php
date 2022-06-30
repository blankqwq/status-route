<?php

namespace Application\Status;

class TestStatus
{

    protected $cancel = '';

    public function handle(){
        if (true){
            $this->cancel();
        }

        // 取出内部数据,不走默认走下一步,这里相当于提前走
        $result = $this->next($status);

        return $result;
    }

}