<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   protected $table="articles";
   protected $fillable=['title','content','category_id','user_id'];


   public function category(){
     return $this->belogsTo('App\Models\Category');
   }
   public function user(){
     return $this->belogsTo('App\Models\User');
   }
}
