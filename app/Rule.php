<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{

    protected $fillable = ['title','content','initiative_date','vote_date','finish_date','result_date','category_id','user_id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function users(){
        return $this->belongsToMany('App\User')
        ->withPivot('opinion','comment','comment_date');
    }

    public function vote(){
        return $this->belongsTo('App\Vote');
    }

}
