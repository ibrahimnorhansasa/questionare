<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class_Student extends Model
{
    protected $table='classes';
    protected $fillable = [
       'name',
    ];
      public function users(){
        return $this->hasMany('App\User');
    } 
    public function subjects(){
        return $this->hasMay('App\Class_Student');
    }
   public function doctors(){
        return $this->belongsToMany('App\Doctor','doctor_classes','doctor_id','class_id');
    }
}
