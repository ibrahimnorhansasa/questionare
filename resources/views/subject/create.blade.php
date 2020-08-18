@extends('layouts.app')
@section('title','Category Page')
@section('content')
<main class="col-sm-9 subject" role="main">
    <br>
    <h3 class="text-center"> قم بانشاء الاستبيان</h3>


    <form action="{{route('survey.store')}}" method="post" class="form-subject">
        {{csrf_field()}}

        <div class="form-group{{$errors->has('title')?'has-error':''}}">
            <label for="title">اسم الماه</label>
            <select class="form-control" name="subject_id">
                @foreach($subjects as $subject)
                <option value="{{$subject->id}}">{{$subject->title}}</option>
                @endforeach
            </select>
            <span class="text-danger">{{$errors->first('subject_id')}}</span>
        </div>

        <div class="form-group{{$errors->has('title')?'has-error':''}}">
            <label for="title">اسم الدكتور</label>
            <select class="form-control" name="doctor_id">
                @foreach($doctors as $doctor)
                <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                @endforeach
            </select>
            <span class="text-danger">{{$errors->first('doctor_id')}}</span>
        </div>






        <div class="submit" style="margin-right:474px;">

            <button type="submit" class="btn btn-primary" style="border-radius:15px;">حفظ االبيانات</button>
        </div>
    </form>

</main>
@endsection