@extends('layouts.app')
@section('header')
<style>
   .body {
    
        min-height: 100%;
        width: 100%;
        -webkit-background-size: 100%;
        -moz-background-size: 100%;
        -o-background-size: 100%;
        background-size: 100%;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        text-align: center;
        padding: 80px 0px;

    }
   
  
</style>
@endsection
@section('content')

<div class="body">
            <a class="" href="#"><img style="width:600px;height:350px;border-radius:15px;" src="{{asset('images/survey.jpg')}}"></a>
   <div class="welcome">
    
     <a class="btn btn-primary" style="width:600px;"href="{{url('survey/create')}}">لعمل استبيان اضغط هنا</a>
    </div>
</div>
@endsection
