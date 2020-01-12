<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{

    protected $fillable = ['title','content','status','initiative_date','vote_date','category_id','user_id'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments(){
        return $this->belongsToMany('App\Comment');
    }

}
