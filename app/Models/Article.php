<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   protected $table="articles";
   protected $fillable=['title','content','category_id','user_id'];


   public function category(){
     return $this->belongsTo('App\Models\Category');
   }
   public function user(){
     return $this->belongsTo('App\Models\User');
   }
   public function tags(){
     return $this->belongsToMany('App\Models\Tag');
   }
}
