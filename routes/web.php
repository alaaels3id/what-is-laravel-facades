<?php

use App\Services\SendSms;
use App\Services\Sms;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/send-sms', function (){
    $send_sms = new SendSms('username','123','sender');

    $send_sms->send('123456789','this is message');
});

Route::get('/facade-send-sms', function (){
    return Sms::send('123456789','this is message');
});
