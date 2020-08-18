<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table='answers';
    protected $fillable = [
       'question_id','subject_id','rate'
    ];
 
    public function question(){
        return $this->belongsTo('App\Question');
    }
     public function subject(){
        return $this->belongsTo('App\Subject');
    }
    public function survey(){

        return $this->belongsTo('App\Survey');
    
    }
}
