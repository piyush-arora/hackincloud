<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
    //

    protected $fillable=['name','type','code'];


    public function project()
    {
        return $this->belongsTo('App\Project');


    }
}
