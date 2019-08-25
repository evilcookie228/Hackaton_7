<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
protected $fillable = ['id', 'message', 'show'];

protected $hidden = ['created_at', 'updated_at'];
}
