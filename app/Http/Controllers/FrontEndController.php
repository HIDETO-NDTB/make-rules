<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rule;
use App\Category;
use App\Comment;
use App\User;
use App\Vote;
use Carbon\Carbon;


class FrontEndController extends Controller
{
    public function index(){

        $first_now_vote = Rule::orderBy('vote_date','asc')->where('vote_date','<',today())->where('finish_date','>',today())->first();
        $second_now_vote = Rule::orderBy('vote_date','asc')->where('vote_date','<',today())->where('finish_date','>',today())->take(1)->skip(1)->get()->first();
        $third_now_vote = Rule::orderBy('vote_date','asc')->where('vote_date','<',today())->where('finish_date','>',today())->take(1)->skip(2)->get()->first();
        $first_vote = Rule::orderBy('vote_date','asc')->where('vote_date','>',today())->first();
        $second_vote = Rule::orderBy('vote_date','asc')->where('vote_date','>',today())->take(1)->skip(1)->get()->first();
        $third_vote = Rule::orderBy('vote_date','asc')->where('vote_date','>',today())->take(1)->skip(2)->get()->first();
        $first_initiative = Rule::orderBy('initiative_date','desc')->where('vote_date','>',today())->first();
        $second_initiative = Rule::orderBy('initiative_date','desc')->where('vote_date','>',today())->take(1)->skip(1)->get()->first();
        $third_initiative = Rule::orderBy('initiative_date','desc')->where('vote_date','>',today())->take(1)->skip(2)->get()->first();
        $first_result = Rule::orderBy('vote_date','desc')->where('status',1)->first();
        $second_result = Rule::orderBy('vote_date','desc')->where('status',1)->take(1)->skip(1)->get()->first();
        $third_result = Rule::orderBy('vote_date','desc')->where('status',1)->take(1)->skip(2)->get()->first();
        $categories = Category::all();
        $first_disagree_comment = Comment::orderByRaw('CHAR_LENGTH(comment) desc')->where('opinion','反対')->first();
        $second_disagree_comment = Comment::orderByRaw('CHAR_LENGTH(comment) desc')->where('opinion','反対')->take(1)->skip(1)->get()->first();
        $third_disagree_comment = Comment::orderByRaw('CHAR_LENGTH(comment) desc')->where('opinion','反対')->take(1)->skip(2)->get()->first();
        $fourth_disagree_comment = Comment::orderByRaw('CHAR_LENGTH(comment) desc')->where('opinion','反対')->take(1)->skip(3)->get()->first();
        $fifth_disagree_comment = Comment::orderByRaw('CHAR_LENGTH(comment) desc')->where('opinion','反対')->take(1)->skip(4)->get()->first();
        $first_agree_comment = Comment::orderByRaw('CHAR_LENGTH(comment) desc')->where('rule_id',$first_disagree_comment->rule_id)->where('opinion','賛成')->first();
        $second_agree_comment = Comment::orderByRaw('CHAR_LENGTH(comment) desc')->where('rule_id',$second_disagree_comment->rule_id)->where('opinion','賛成')->first();
        $third_agree_comment = Comment::orderByRaw('CHAR_LENGTH(comment) desc')->where('rule_id',$third_disagree_comment->rule_id)->where('opinion','賛成')->first();
        $fourth_agree_comment = Comment::orderByRaw('CHAR_LENGTH(comment) desc')->where('rule_id',$fourth_disagree_comment->rule_id)->where('opinion','賛成')->first();
        $fifth_agree_comment = Comment::orderByRaw('CHAR_LENGTH(comment) desc')->where('rule_id',$fifth_disagree_comment->rule_id)->where('opinion','賛成')->first();
        $rules = Rule::all();

        return view('index')->with('first_now_vote',$first_now_vote)
                            ->with('second_now_vote',$second_now_vote)
                            ->with('third_now_vote',$third_now_vote)
                            ->with('first_vote',$first_vote)
                            ->with('second_vote',$second_vote)
                            ->with('third_vote',$third_vote)
                            ->with('first_initiative',$first_initiative)
                            ->with('second_initiative',$second_initiative)
                            ->with('third_initiative',$third_initiative)
                            ->with('first_result',$first_result)
                            ->with('second_result',$second_result)
                            ->with('third_result',$third_result)
                            ->with('categories',$categories)
                            ->with('first_disagree_comment',$first_disagree_comment)
                            ->with('second_disagree_comment',$second_disagree_comment)
                            ->with('third_disagree_comment',$third_disagree_comment)
                            ->with('fourth_disagree_comment',$fourth_disagree_comment)
                            ->with('fifth_disagree_comment',$fifth_disagree_comment)
                            ->with('first_agree_comment',$first_agree_comment)
                            ->with('second_agree_comment',$second_agree_comment)
                            ->with('third_agree_comment',$third_agree_comment)
                            ->with('fourth_agree_comment',$fourth_agree_comment)
                            ->with('fifth_agree_comment',$fifth_agree_comment)
                            ->with('rules',$rules);
    }


    public function category_single(Category $category){

        $rules = Category::find($category->id)->rules->sortBy('initiative_date');
        $just_vote  = Rule::where('category_id',$category)->count();

        return view('category')->with('category',$category)
                                ->with('rules',$rules)
                               ->with('categories',Category::all())
                               ->with('just_vote',$just_vote);


    }

    public function rule_single($id){

        $rule = Rule::where('id',$id)->first();
        $comments = Comment::orderBy('comment_date','desc')->get();
        $users = User::all();

        return view('rule-single')->with('rule',$rule)
                                  ->with('categories',Category::all())
                                  ->with('comments',$comments)
                                  ->with('users',User::all());

    }

    public function vote($id){

        $rule = Rule::where('id',$id)->first();
        $comments = Comment::orderBy('comment_date','desc')->get();
        $users = User::all();
        $votes = Vote::where('vote','!=',"")->get();

        return view('vote')->with('rule',$rule)
                           ->with('categories',Category::all())
                           ->with('comments',$comments)
                           ->with('users',User::all())
                           ->with('votes',$votes);

    }

    public function result($id){

        $rule = Rule::where('id',$id)->first();
        $total_vote = Vote::where('rule_id',$id)->where('opinion',"")->count();
        $total_agree = Vote::where('rule_id',$id)->where('vote','agree')->count();
        $total_disagree = Vote::where('rule_id',$id)->where('vote','disagree')->count();
        $comments = Comment::orderBy('comment_date','desc')->get();

        return view('result')->with('rule',$rule)
                             ->with('categories',Category::all())
                             ->with('total_vote',$total_vote)
                             ->with('total_agree',$total_agree)
                             ->with('total_disagree',$total_disagree)
                             ->with('comments',$comments);
    }

    public function initiative(){

        return view('initiative')->with('categories',Category::all());
    }

    public function contact(){

        return view('contact')->with('categories',Category::all());
    }
}
