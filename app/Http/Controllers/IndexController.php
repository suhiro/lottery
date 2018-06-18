<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lottery;
use App\Prize;

class IndexController extends Controller
{
    public function index()
    {
    	$lottery = Lottery::first();
    	if($lottery->finished)
    	{
    		$prizes = Prize::where('lottery_id',$lottery->id)->get();
    		return view('finished',compact('prizes'));
    	} else {
    		return view('welcome');
    	}
    	
    }
}
