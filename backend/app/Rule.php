<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
protected $fillable = ['id', 'user_id', 'admin'];

protected $hidden = ['created_at', 'updated_at'];
}
