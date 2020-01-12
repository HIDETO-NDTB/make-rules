<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['opinion','comment','comment_date','rule_id','user_id'];

    protected $table = 'rule_user';

}
