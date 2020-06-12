<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendSMSController extends Controller
{
    public function sendSMS()
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('39afc8c8', 'cgcw3GSJaBt3RnaV');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => '201282990119',
    'from' => 'Vonage APIs',
    'text' => 'Ya ramouzaaaaaaa <33333'
]);

        dd('message send successfully');
    }
}
