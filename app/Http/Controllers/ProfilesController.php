<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile')->with('user',Auth::user())
                              ->with('categories',Category::all());

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
        //
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
    public function update(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',

        ]);

        //update data into database
        $user = Auth::user();
        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;

            $avatar_new_name = time().$avatar->getClientOriginalName();
            $path = Storage::disk('s3'.$avatar_new_name)->putFile('/', $avatar, 'public');
            $user->profile->avatar = Storage::disk('s3')->url($path);


            $user->profile->save();
        }

        $user->name = $request->name;
        $user->age = $request->age;
        $user->gender = $request->gender;
        $user->email = $request->email;

        $user->save();


        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
            $user->save();
        }

        //return redirect back
        Session::flash('success', 'プロフィールを更新しました');
        return redirect()->back();

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
