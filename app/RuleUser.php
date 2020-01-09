<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RuleUser extends Model
{
    protected $fillable = ['opinion','comment','comment_date','vote','voting_date'];
}
