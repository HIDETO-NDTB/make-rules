<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rule;
use App\user;
use App\Vote;
use App\Category;
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

        // 投票済かcheck
        $votecheck = Vote::where('user_id',Auth::user()->id)->where('rule_id',$request->rule_id)->where('vote_check',"1")->count();
        if($votecheck > 0){

            Session::flash('warning','投票は法案に対し１回のみです');
            return redirect()->back();
        }

        // Mass Assignment
        $vote = Vote::create([
            'rule_id' => $request->rule_id,
            'user_id' => Auth::user()->id,
            'vote' => $request->vote,
            'vote_check' => $request->vote_check,
            'voting_date' => date("Y-m-d"),
        ]);

        $vote->save();

        Session::flash('success','投票ありがとうございます');
        return redirect()->route('index');
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
