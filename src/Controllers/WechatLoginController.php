<?php


class WechatLoginController
{

    public function login(WechatLoginService $service)
    {

        $service->login();

    }
}
