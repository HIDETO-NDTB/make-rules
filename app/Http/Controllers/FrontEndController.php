<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rule;
use App\Category;
use App\Comment;
use App\User;
use App\Vote;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class FrontEndController extends Controller
{
    public function index(){

        $first_now_vote = Rule::orderBy('vote_date','asc')->whereDate('vote_date','<=',today())->whereDate('finish_date','>=',today())->first();
        $second_now_vote = Rule::orderBy('vote_date','asc')->whereDate('vote_date','<=',today())->whereDate('finish_date','>=',today())->take(1)->skip(1)->get()->first();
        $third_now_vote = Rule::orderBy('vote_date','asc')->whereDate('vote_date','<=',today())->whereDate('finish_date','>=',today())->take(1)->skip(2)->get()->first();
        $first_vote = Rule::orderBy('vote_date','asc')->whereDate('vote_date','>',today())->first();
        $second_vote = Rule::orderBy('vote_date','asc')->whereDate('vote_date','>',today())->take(1)->skip(1)->get()->first();
        $third_vote = Rule::orderBy('vote_date','asc')->whereDate('vote_date','>',today())->take(1)->skip(2)->get()->first();
        $first_initiative = Rule::orderBy('created_at','desc')->whereDate('vote_date','>',today())->first();
        $second_initiative = Rule::orderBy('created_at','desc')->whereDate('vote_date','>',today())->take(1)->skip(1)->get()->first();
        $third_initiative = Rule::orderBy('created_at','desc')->whereDate('vote_date','>',today())->take(1)->skip(2)->get()->first();
        $first_result = Rule::orderBy('vote_date','desc')->whereDate('finish_date','<',today())->first();
        $second_result = Rule::orderBy('vote_date','desc')->whereDate('finish_date','<',today())->take(1)->skip(1)->get()->first();
        $third_result = Rule::orderBy('vote_date','desc')->whereDate('finish_date','<',today())->take(1)->skip(2)->get()->first();
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
        $first_agree = Vote::where('rule_id',$first_result->id)->where('vote','agree')->count();
        $first_disagree = Vote::where('rule_id',$first_result->id)->where('vote','disagree')->count();
        $second_agree = Vote::where('rule_id',$second_result->id)->where('vote','agree')->count();
        $second_disagree = Vote::where('rule_id',$second_result->id)->where('vote','disagree')->count();
        $third_agree = Vote::where('rule_id',$third_result->id)->where('vote','agree')->count();
        $third_disagree = Vote::where('rule_id',$third_result->id)->where('vote','disagree')->count();
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
                            ->with('first_agree',$first_agree)
                            ->with('first_disagree',$first_disagree)
                            ->with('second_agree',$second_agree)
                            ->with('second_disagree',$second_disagree)
                            ->with('third_agree',$third_agree)
                            ->with('third_disagree',$third_disagree)
                            ->with('rules',$rules);

    }


    public function category_single(Category $category){

        $rules = Rule::orderBy('initiative_date')->where('category_id',$category->id)->get();
        $just_vote  = Rule::where('category_id',$category->id)->whereDate('vote_date','<=',today())->whereDate('finish_date','>=',today())->count();
        $total_rule  = Rule::where('category_id',$category->id)->count();
        $comment_rule = Rule::where('category_id',$category->id)->whereDate('vote_date','>',today())->count();
        $finish_vote = Rule::where('category_id',$category->id)->whereDate('finish_date','<',today())->count();
        $users = User::all();

        return view('category')->with('category',$category)
                                ->with('rules',$rules)
                               ->with('categories',Category::all())
                               ->with('just_vote',$just_vote)
                               ->with('total_rule',$total_rule)
                               ->with('comment_rule',$comment_rule)
                               ->with('finish_vote',$finish_vote)
                               ->with('users',User::all());


    }

    public function rule_single($id){

        $rule = Rule::where('id',$id)->first();
        $comments = Comment::orderBy('created_at','desc')->get();
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
        //$votecheck = Vote::where('user_id',Auth::user()->id)->where('rule_id',$rule->id)->where('vote_check',"1")->count();

        return view('vote')->with('rule',$rule)
                           ->with('categories',Category::all())
                           ->with('comments',$comments)
                           ->with('users',User::all());
                           //->with('votecheck',$votecheck);

    }

    public function result($id){

        $rule = Rule::where('id',$id)->first();
        $total_vote = Vote::where('rule_id',$id)->where('opinion',"")->count();
        $total_agree = Vote::where('rule_id',$id)->where('vote','agree')->count();
        $total_disagree = Vote::where('rule_id',$id)->where('vote','disagree')->count();
        $comments = Comment::orderBy('created_at','desc')->get();
        $users = User::all();

        return view('result')->with('rule',$rule)
                             ->with('categories',Category::all())
                             ->with('total_vote',$total_vote)
                             ->with('total_agree',$total_agree)
                             ->with('total_disagree',$total_disagree)
                             ->with('comments',$comments)
                             ->with('users',User::all());
    }

    public function initiative(){

        return view('initiative')->with('categories',Category::all());
    }

    public function contact(){

        $user = Auth::user();

        return view('contact')->with('categories',Category::all())
                              ->with('user',$user);
    }

    public function howtouse(){

        return view('how_to_use')->with('categories',Category::all());
    }

    public function result_total(){

        $rules = Rule::orderBy('created_at','desc')->whereDate('finish_date','<',today())->limit(30)->get();
        $users = User::all();

        return view('result_total')->with('categories',Category::all())
                                   ->with('rules',$rules)
                                   ->with('users',$users);
    }

    public function vote_total(){

        $rules = Rule::orderBy('created_at','desc')->whereDate('vote_date','<=',today())->whereDate('finish_date','>=',today())->get();
        $users = User::all();
        $vote_total = Rule::whereDate('vote_date','<=',today())->whereDate('finish_date','>=',today())->count();

        return view('vote_total')->with('categories',Category::all())
                                 ->with('rules',$rules)
                                 ->with('users',$users)
                                 ->with('vote_total',$vote_total);
    }

    public function comment_total(){

        $rules = Rule::orderBy('created_at','desc')->whereDate('vote_date','>',today())->get();
        $users = User::all();
        $comment_total = Rule::whereDate('vote_date','>',today())->count();

        return view('comment_total')->with('categories',Category::all())
                                    ->with('rules',$rules)
                                    ->with('users',$users)
                                    ->with('comment_total',$comment_total);
    }

}
