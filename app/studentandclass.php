<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Notifications\InvoicePaid;
use Illuminate\Notifications\Notifiable;

class studentandclass extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'studentId','classId'
    ];

}
