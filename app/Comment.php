<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['rule_id','user_id','opinion','comment','comment_id'];

    protected $table = 'rule_user';
    protected $primaryKey = 'rule_id';
}
