<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendSMSController extends Controller
{
    public function sendSMS()
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('14f9b871', 'Jj8ucryx5wZXepc2');
        $client = new \Nexmo\Client($basic);
        
        $message = $client->message()->send([
            'to' => '201115127717',
            'from' => 'Al-Mishkah',
            'text' => 'Please visit our website to verify your number'
        ]);

        dd('message send successfully');
    }
}
