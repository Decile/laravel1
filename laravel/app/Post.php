<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'description'];

    public function setTitleAttribute($value){
        $this->attributes['title'] = strtolower($value);
    }
    public function getTitleAttribute($value){
        return strtoupper($value);
    }
}
