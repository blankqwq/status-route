<?php

use Action\TestGetAction;
use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase
{
    public function testRoute()
    {

    }

    public function testRouter()
    {
        /**
         * 用户： 数据
         *      数据打开,标记已打开设置
         * 用户： 翻页
         *       翻页数据
         * 用户： 详细 1 | 1
         *      返回1的数据 否则再打印
         */
        $router = new \Blankqwq\StatusRoute\Route\Router();
        // 群组状态
        $router->group(['type' => 'status', 'prefix' => 'get'], function ($router) {
            // run_get ..
            $router->status('/', [TestGetAction::class,'default']);
            $router->status('/1', TestGetAction::class);
            $router->status('/2', TestGetAction::class);
            $router->status('/3', function ($status){
                // 改变状态
                $status->clear();
                //改变
                $status->change('get/2');
                // 修改到上一状态
                $status->last();
                //
                $status->children();
                $status->times();
                //
                $status->run();
            });

        });

        // diy方式运行
        $router->command('哈哈哈', TestGetAction::class);
    }

    public function testPipeline()
    {

    }

}