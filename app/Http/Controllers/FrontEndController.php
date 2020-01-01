<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){

        return view('index');
    }

    public function category(){

        return view('category');
    }

    public function rule_single(){

        return view('rule-single');
    }
}
