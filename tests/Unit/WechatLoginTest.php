<?php

namespace Tests\Unit;

use Tests\TestCase;
use Wzb\WechatLogin\Services\WechatLoginService;

class WechatLoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testCreate()
    {
        $res =  (new WechatLoginService)->login('0b32Rq0w3Rilg13Vzi0w3L98Mr12Rq0E');
        dd($res);
    }

}
