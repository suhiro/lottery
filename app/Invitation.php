<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable = ['code','count'];
    public static function generate(){
    	$invitation = self::create([
    		'code' => str_random(16),
    		'count' => 10
    	]);
    	return $invitation;
    }
 
    public function use()
    {
    	if($this->count){
    		$this->count--;
    		$this->save();
    		return 'ok';
    	} else {
    		return 'expired';
    	}
    }
}
