<?php

namespace Wzb\WechatLogin\Services;


use App\Http\Constants\CodeMessageConstants;

class WechatLoginService
{
    public function login($code)
    {
        // 小程序的 appid 和 secret
        $appId = env('WECHAT_LOGIN_APP_ID');
        $secret = env('WECHAT_LOGIN_SECRET');

        // 通过小程序传递过来的 code 获取 session_key 和 openid
        $url = "https://api.weixin.qq.com/sns/jscode2session?appid=$appId&secret=$secret&js_code=$code&grant_type=authorization_code";

        $response = file_get_contents($url);
        $data = json_decode($response, true);

        if (!isset($data['openid']) || !isset($data['session_key'])) {
            throw \ExceptionFactory::business(['code' => $data['errcode'], 'message' => $data['errmsg']]);
        }

        $sessionKey = $data['session_key'];
        $openId = $data['openid'];

        // 生成自定义登录态 token
        $token = md5($sessionKey . $openId);

        // 将 token 保存到数据库或其他存储方式中，以便后续验证登录态

        // 返回 token 给小程序
        return $token;
    }
}
