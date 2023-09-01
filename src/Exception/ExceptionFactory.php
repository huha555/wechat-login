<?php
/**
 * Created by PhpStorm.
 * User: lishu
 * Date: 2018/10/11
 * Time: 15:39
 */
namespace Wzb\WechatLogin\Exception;


use Wzb\WechatLogin\Exception\Exceptions\BusinessException;

class ExceptionFactory
{
    public function business(array $mixed, array $data = []){
        return new BusinessException($mixed['message'] ?? 'business_error', $mixed['code'] ?? 400, $data);
    }

}
