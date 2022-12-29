<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PageInformation extends Model
{
    use Notifiable;

    protected $fillable = [
        'tag_id', 'page_title', 'title_slug','meta_description',
    ];

    public function pageTags()
    {
        return $this->belongsToMany('App\Model\Tag', 'tag_id', 'id');
    }
}
