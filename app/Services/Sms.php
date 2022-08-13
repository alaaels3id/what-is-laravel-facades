<?php

namespace App\Services;

use Illuminate\Support\Facades\Facade;

/**
 * @method static send(string $phone, string $message)
 */
class Sms extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'SendSms';
    }

//    public static function __callStatic($method, $arguments)
//    {
//        return self::resolve('SendSms')->$method(...$arguments);
//    }
//
//    public static function resolve($name)
//    {
//        return app()->make($name);
//    }
}
