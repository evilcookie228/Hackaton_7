<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyPatent extends Model
{

public function user() {
        return $this->belongsTo(User::class,'user_id');
    }
public function mypatent() {
        return $this->belongsTo(MyPatent::class,'pat_id');
    }
protected $fillable = ['id', 'user_id', 'pat_id','sell_cost','rent_cost'];

protected $hidden = ['created_at', 'updated_at'];
}
