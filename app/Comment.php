<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'rule_user';

    protected $fillable = ['rule_id','user_id','opinion','comment','comment_id','vote','voting_id'];


}
