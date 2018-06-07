<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use App\Prize;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$participants = Participant::get();
    	$prizes = Prize::get();
        return view('home',compact('participants','prizes'));
    }
}
