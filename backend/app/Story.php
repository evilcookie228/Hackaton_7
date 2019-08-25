<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = ['id', 'message', 'show','url_photo'];

    protected $hidden = ['created_at', 'updated_at'];
}
