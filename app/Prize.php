<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    protected $fillable = ['lottery_id','name','description','code','participant_id','redeemed'];
    public function lottery()
    {
    	return $this->belongsTo('App\Lottery');
    }
    public function participant()
    {
    	return $this->belongsTo('App\Participant');
    }
}
