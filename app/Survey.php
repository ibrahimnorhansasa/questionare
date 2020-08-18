<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table='surveys';
    protected $fillable = [
        'subject_id','doctor_id','user_id'
    ];
       
      public function user(){
        return $this->belongsTo('App\User');
    }
       public function answers(){
        return $this->hasMany('App\Answer','subject_id','subject_id');
    }
     public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
      public function subject(){
        return $this->belongsTo('App\Subject');
    }
   
}
