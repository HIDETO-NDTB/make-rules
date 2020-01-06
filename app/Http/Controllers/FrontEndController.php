<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $first_initiative = Rule::orderBy('initiative_date','desc')->first();
        $second_initiative = Rule::orderBy('initiative_date','desc')->take(1)->skip(1)->get()->first();
        $third_initiative = Rule::orderBy('initiative_date','desc')->take(1)->skip(2)->get()->first();

        return view('index')->with('first_post',$first_post)
                            ->with('second_post',$second_post)
                            ->with('third_post',$third_post);
    }

    public function category(){

        return view('category');
    }

    public function rule_single(){

        return view('rule-single');
    }

    public function vote(){

        return view('vote');
    }

    public function result(){

        return view('result');
    }

    public function initiative(){

        return view('initiative');
    }

    public function contact(){

        return view('contact');
    }
}
