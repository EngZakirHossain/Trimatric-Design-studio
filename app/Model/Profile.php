<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Profile extends Model
{
    use Notifiable;

    protected $fillable = [
        'serviceName','name','details','featureImage',
    ];
}

