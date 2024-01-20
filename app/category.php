<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\sellmodel;

class category extends Model
{
   protected $guarded = ['id'];

   public function products(){
      return $this->hasMany(sellmodel::class,'category_id', 'id');
  }
}

