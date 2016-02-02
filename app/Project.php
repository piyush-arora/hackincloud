<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable=['name'];


    public function things()
    {
        return $this->hasMany('App\Thing');

    }
}
