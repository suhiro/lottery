<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = ['lottery_id','firstName','lastName','phone','email','code','valid','winner','redeemed','ip_address','location_id'];
    public function lottery(){
    	return $this->belongsTo('App\Lottery');
    }
    public function prize()
    {
    	return $this->hasOne('App\Prize');
    }
}
