<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table='subjects';
    protected $fillable = [
        'title','class_id'
    ];
       
      public function class(){
        return $this->belongsTo('App\Class_Student');
    }
     public function surveys(){
        return $this->hasMany('App\Survey');
    }
     public function answers(){
        return $this->hasMany('App\Answer');
    }
  
}
