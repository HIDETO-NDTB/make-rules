<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $settings = Settings::first();

        return view('index')->with('settings',$settings);
    }
}
