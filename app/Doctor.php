<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
     protected $table='doctors';
    protected $fillable = [
       'name'
    ];
     public function classes(){
        return $this->belongsToMany('App\Class_Student','doctor_classes','doctor_id','class_id');
    }
}
