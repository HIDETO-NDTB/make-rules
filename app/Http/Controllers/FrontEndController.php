<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rule;
use App\Category;

class FrontEndController extends Controller
{
    public function index(){
        $first_initiative = Rule::orderBy('initiative_date','desc')->first();
        $second_initiative = Rule::orderBy('initiative_date','desc')->take(1)->skip(1)->get()->first();
        $third_initiative = Rule::orderBy('initiative_date','desc')->take(1)->skip(2)->get()->first();
        $categories = Category::all();

        return view('index')->with('first_initiative',$first_initiative)
                            ->with('second_initiative',$second_initiative)
                            ->with('third_initiative',$third_initiative)
                            ->with('categories',$categories);
    }

    public function category_single(Category $category){

        return view('category')->with('category',$category)
                               ->with('categories',Category::all());
    }

    public function rule_single(){

        return view('rule-single')->with('rule',$rule)
                                  ->with('categories',Category::all());
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
