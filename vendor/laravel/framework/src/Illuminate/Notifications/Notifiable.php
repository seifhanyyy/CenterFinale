<?php

namespace Illuminate\Notifications;
use App\Notifications\InvoicePaid;


trait Notifiable
{
 
    use HasDatabaseNotifications, RoutesNotifications;
    
}
