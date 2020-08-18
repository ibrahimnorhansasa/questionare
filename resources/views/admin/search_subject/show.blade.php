@extends('admin.layouts.layout')
@section('title','Category Page')
@section('content')

<div class="col-md-6">
<div class="form-group">
   
      <form action="{{url('show/survey')}}" method="post" role="form">
                {{csrf_field()}}
                  <label for="subject_id">اختر الماده المراد عرض نتيجه الاستبيان الخاصه بها </label>
                  <select class="form-control select2 select2-hidden-accessible" name="subject_id" style="width: 100%;" tabindex="-1" aria-hidden="true">
                     @foreach($subject as $sub )  
             <option value="{{$sub->id}}">{{$sub->title}}</option>
                       @endforeach
                  </select>
          <br>
                <button type="submit" class="btn btn-primary">عرض الاستبيان </button>
    </form>
   
                </div>
</div>
@endsection