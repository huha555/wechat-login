<?php

namespace Wzb\WechatLogin;

use Illuminate\Support\ServiceProvider;

class WechatLoginServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/login.php' => config_path('login.php'),
        ], 'config');
    }

    public function register()
    {

    }

}
