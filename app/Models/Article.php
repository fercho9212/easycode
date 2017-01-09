<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
   use Sluggable;

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
   public function sluggable()
    {
        return [
            'slug' => [
                'build_from'=>'title',
                'save_to' => 'slug'
            ]
        ];
    }
}
