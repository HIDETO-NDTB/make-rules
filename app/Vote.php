<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = ['rule_id','user_id','vote','vote_check','voting_date'];
}
