<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patent extends Model
{
protected $fillable = ['id', 'buro_id', 'patent_type','patent_num','date_from','author'
,'pname','status'];

protected $hidden = ['created_at', 'updated_at'];
}
