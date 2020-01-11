<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'rule_user';

    protected $fillable = ['user_id','opinion','comment','comment_id'];

}
