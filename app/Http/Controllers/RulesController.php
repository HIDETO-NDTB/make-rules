<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Rule;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('rules.create')->with('categories',$categories);
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
            'title' => 'required|max:20',
            'content' => 'required|max:300',
        ]);

        // Mass Assignment
        $rule = Rule::create([
            'title' => $request->title,
            'content' => $request->content,
            'initiative_date' => date("Y-m-d"),
            'vote_date' => date("Y-m-d",strtotime("+7 day")),
            'finish_date' => date("Y-m-d",strtotime("+14 day")),
            'result_date' => date("Y-m-d",strtotime("+15 day")),
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id,
        ]);

        $rule->save();

        Session::flash('success','新法案が発議されました');
        return redirect()->route('initiative');
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
