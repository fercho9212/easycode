<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table='tags';
    protected $filltable=['name'];

    public function Articles(){
      return $this->belongsToMany('App\Models\Article');
    }
}
