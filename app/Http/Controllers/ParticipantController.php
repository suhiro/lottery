<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('participant.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required|max:32',
            'lastName' => 'required|max:32',
            'phone' => 'required|unique:participants|max:16',
            'email' => 'required|unique:participants|max:100'
        ]);
        $participant = Participant::create([
            'lottery_id' => 1,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'phone' => $request->phone,
            'email' => $request->email,
            'valid' => true,
            'winner' => false,
            'redeemed' => false,
            'ip_address' => $request->ip(),
            'location_id' => null,
            'code' => strtoupper(str_random(6))
        ]);
        $participants = Participant::where('lottery_id',1)->where('valid',true)->get();
        if($participant){
            return view('result.submitted',compact('participant','participants'));
        } else {
            return 'error';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
