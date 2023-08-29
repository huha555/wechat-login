<?php

namespace Tests\Unit;

use Tests\TestCase;
use Vendor\wzb\WechatLoginService;

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
        $res =  new WechatLoginService();
        dd($res);
    }

    public function testUpdate()
    {
        $data = [
            'permission_id' => 32,
            'name' => 'el.b',
        ];
        $result = $this->postJson('/permission/update', $data)->json();
        dd($result);
    }

    public function testDelete()
    {
        $data = [
            'name' => 'el.b',
        ];
        $result = $this->postJson('/permission/delete', $data)->json();
        dd($result);
    }

    public function testTranslate()
    {
        $data = [
            'name' => 'el.a',
            'lang' => 'en',
            'content' => 'aa'
        ];
        $result = $this->postJson('/permission/translate', $data)->json();
        dd($result);
    }
}
