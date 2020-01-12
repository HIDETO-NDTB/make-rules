<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{

    protected $fillable = ['title','content','status','initiative_date','vote_date','category_id','user_id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }



    public function users(){
        return $this->belongsToMany('App\User')
        ->withPivot('opinion','comment','comment_date');
    }

}
