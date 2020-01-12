<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['opinion','comment','comment_date','user_id'];

    public function rules(){
        return $this->belongsToMany('App\Rule');
    }
}
