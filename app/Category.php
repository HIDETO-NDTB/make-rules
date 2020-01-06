<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function rules(){
        return $this->hasMany('App\Rule');
    }
}
