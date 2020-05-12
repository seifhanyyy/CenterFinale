<?php

namespace App\Http\Controllers;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class MailNotifactionController extends Controller
{
public function create()
{
    return view('welcome');
}
public function store()
{
}
}
