<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class SendSms
{
    public $username;
    public $password;
    public $sender_name;

    public function __construct($username, $password, $sender_name)
    {
        $this->username = $username;
        $this->password = $password;
        $this->sender_name = $sender_name;
    }

    public function send($phone, $message)
    {
//        $res = Http::post('https://sms-provider.com', [
//            'username' => $this->username,
//            'password' => $this->password,
//            'sender_name' => $this->sender_name,
//        ]);

        Log::info($phone . ' => ' . $message);

        dd("SMS Sent Successfully");
    }
}
