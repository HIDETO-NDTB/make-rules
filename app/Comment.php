<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'rule_user';

    protected $fillable = ['rule_id','user_id','opinion','comment','comment_id','vote','voting_id'];

    public function users(){
        return $this->belongsToMany(User::class)
           ->withPivot('opinion', 'comment','comment_date','vote','voting_date');
    }


}
