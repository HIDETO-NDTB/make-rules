<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule_user extends Model
{
    protected $fillable = ['rule_id','user_id','opinion','comment','comment_date','vote','voting_date'];
}
