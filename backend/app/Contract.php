<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
	public function seller() {
        return $this->belongsTo(User::class,'seller_id');
    }
    public function buyer() {
        return $this->belongsTo(User::class,'buyer_id');
    }
    public function patent() {
        return $this->belongsTo(Patent::class,'patent_id');
    }

protected $fillable = ['id', 'seller_id', 'buyer_id','patent_id','type','status'];

protected $hidden = ['created_at', 'updated_at'];
   
}
