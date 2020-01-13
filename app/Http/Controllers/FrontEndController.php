<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rule;
use App\Category;
use App\Comment;
use App\User;


class FrontEndController extends Controller
{
    public function index(){

        $first_vote = Rule::orderBy('vote_date','asc')->where('status',0)->first();
        $second_vote = Rule::orderBy('vote_date','asc')->where('status',0)->take(1)->skip(1)->get()->first();
        $third_vote = Rule::orderBy('vote_date','asc')->where('status',0)->take(1)->skip(2)->get()->first();
        $first_initiative = Rule::orderBy('initiative_date','desc')->where('status',0)->first();
        $second_initiative = Rule::orderBy('initiative_date','desc')->where('status',0)->take(1)->skip(1)->get()->first();
        $third_initiative = Rule::orderBy('initiative_date','desc')->where('status',0)->take(1)->skip(2)->get()->first();
        $first_result = Rule::orderBy('vote_date','desc')->where('status',1)->first();
        $second_result = Rule::orderBy('vote_date','desc')->where('status',1)->take(1)->skip(1)->get()->first();
        $third_result = Rule::orderBy('vote_date','desc')->where('status',1)->take(1)->skip(2)->get()->first();
        $categories = Category::all();

        return view('index')->with('first_vote',$first_vote)
                            ->with('second_vote',$second_vote)
                            ->with('third_vote',$third_vote)
                            ->with('first_initiative',$first_initiative)
                            ->with('second_initiative',$second_initiative)
                            ->with('third_initiative',$third_initiative)
                            ->with('first_result',$first_result)
                            ->with('second_result',$second_result)
                            ->with('third_result',$third_result)
                            ->with('categories',$categories);
    }


    public function category_single(Category $category){

        return view('category')->with('category',$category)
                               ->with('categories',Category::all());

    }

    public function rule_single($id){

        $rule = Rule::where('id',$id)->first();
        $comments = Comment::orderBy('comment_date','desc')->take(30);
        $users = User::all();

        return view('rule-single')->with('rule',$rule)
                                  ->with('categories',Category::all())
                                  ->with('comments',$comments)
                                  ->with('users',User::all());

    }

    public function vote(){

        return view('vote')->with('categories',Category::all());
    }

    public function result($id){

        $rule = Rule::where('id',$id)->first();

        return view('result')->with('rule',$rule)
                             ->with('categories',Category::all());
    }

    public function initiative(){

        return view('initiative')->with('categories',Category::all());
    }

    public function contact(){

        return view('contact')->with('categories',Category::all());
    }
}
