<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProfileDetails extends Model
{
    use Notifiable;

    protected $fillable = [
        'profile_id','images_video','before_images','after_images','youtube_link','render_link',
    ];
}
