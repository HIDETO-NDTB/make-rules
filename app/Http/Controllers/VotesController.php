<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class VotesController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $this->validate($request,[
            'rule_id' => 'required',
            'vote' => 'required',
            'vote_check' => 'required',
        ]);

        // Mass Assignment
        $vote = Vote::create([
            'rule_id' => $request->rule_id,
            'user_id' => Auth::user()->id,
            'vote' => $request->vote,
            'vote_check' => 'true',
            'voting_date' => date("Y-m-d"),
        ]);

        $vote->save();

        Session::flash('success','投票ありがとうございます');
        return redirect()->back();
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
