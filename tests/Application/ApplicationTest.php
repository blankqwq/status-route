<?php

namespace Application;

use Application\Status\TestStatus;
use Blankqwq\StatusRoute\StatusRoute;

class ApplicationTest extends \UnitTest
{

    public function testNext(){
        $app = new StatusRoute([]);

        $route = $app->getRoute();

        // test1->[test2,test3]->
        $route->status(TestStatus::class)->next(TestStatus::class,TestStatus::class);

        $route->status(function ($route){
            $route->setStatus('asd');

            $route->setHandle(function ($r){
                if (true){
                    $r->cancel();
                }else{
                    $r->next();
                }
            });

        });

    }
}