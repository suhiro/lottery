<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
    public static function winner($lottery_id,$prize,$participants)
    {
    	$participant = $participants->random();
    	$participant->winner = true;
    	$participant->valid = false;
    	$participant->save();

    	$prize->code = $participant->code;
    	$prize->participant_id = $participant->id;
    	$prize->save();

    	return [
    		'winner' => $participant,
    		'prize' => $prize,
    	];
    }

    public function prize()
    {
        return $this->hasMany('App\Prize');
    }
    public function participant()
    {
        return $this->hasMany('App\Participant');
    }
}
