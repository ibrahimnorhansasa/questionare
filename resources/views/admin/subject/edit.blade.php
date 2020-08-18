@extends('admin.layouts.layout')
@section('title','تعيل المواد')

@section('content')

<section class="content">
<div class="row">
 <div class="col-md-6">
       <div class="box">
          <div class="box-header with-border">
              <h3 class="box-title"> صفحه تعديل الماده</h3>
             
           </div>
           
    <div class="box-body">
    {!!Form::model($subject,['route'=>['subject.update',
     $subject->id],'method'=>'PATCH','files'=>true])!!}
        <div class=form-group>
        {{Form::label('title','اسم الماده:')}}
        {{Form::text('title',null,array('class'=>'form-control','style'=>'border-radius:10px;','placeholder'=>'Menu Title'))}}
        </div> 
        
        <div class=form-group>
        {{Form::label('class_id','الفرقه الدراسيه:')}}
         {{Form::select('class_id',$class_array,null,array('class'=> 'form-control','style'=>'border-radius:10px;'))}}
        </div>  
   
     <div class="form-group" >
       {{Form::submit('تعديل الماده',array('class'=>'btn btn-primary btn-lg','style'=>'border-radius:20px;font-family:cursive'))}}
        {!! Form::close() !!}
        </div> 
        </div>
    </div>
 </div>
    </div>
    
</section>
@endsection