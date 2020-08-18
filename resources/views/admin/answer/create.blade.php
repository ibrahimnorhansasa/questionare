@extends('admin.layout')
@section('title','Category Page')
@section('content')
<main class="col-sm-9" role="main">
    <br>
    <h3 class="text-center"></h3>
    <div class="col-md-6">
        <div class="panel-body">
            <form action="{{route('answer.store')}}" method="post" role="form">
                {{csrf_field()}}
                <input type="hidden" name="subject_id" value="{{$subject->id}}">
                @if(count($type_one)>0)
                <h1>المقرر</h1>
                <br>
                @foreach($type_one as $q_one)
                <div class="form-group{{$errors->has('rate')?'has-error':''}}">
                    <label for="question_id" name="" value="{{$q_one->id}}">{{$q_one->name}}</label>
                    <select name="{{$q_one->id}}"  value="{{$q_one->id}}"class="form-control">
                        <option value="اوافق تماما">اوافق تماما</option>
                        <option value="اوافق">اوافق</option>
                        <option value="لا اعرف">لا اعرف</option>
                        <option value="لا اوافق">لا اوافق</option>
                        <option value="ا اوافق مطلقا">لا اوافق مطلقا</option>
                    </select>
                    <span class="text-danger">{{$errors->first('rate')}}</span>
                </div>
                @endforeach
                @endif

                @if(count($type_two)>0)
                <h1>مذكره كتاب المقرر</h1>
                <br>
                
                @foreach($type_two as $q_two)

                <div class="form-group{{$errors->has('rate')?'has-error':''}}">
                    <label for="question_id" name="" >{{$q_two->name}}</label>
                    <select name="{{$q_two->id}}"  value="{{$q_two->id}}" class="form-control">
                          <option value="اوافق تماما">اوافق تماما</option>
                          <option value="اوافق">اوافق</option>
                          <option value="لا اعرف">لا اعرف</option>
                          <option value="لا اوافق">لا اوافق</option>
                          <option value="ا اوافق مطلقا">لا اوافق مطلقا</option>
                    </select>
                    <span class="text-danger">{{$errors->first('rate')}}</span>
                </div>
                @endforeach
                @endif

                @if(count($type_three)>0)
                <h1>اداره العمليه التعليميه بالفسم</h1>
                <br>
                @foreach($type_three as $q_three)

                <div class="form-group{{$errors->has('rate')?'has-error':''}}">
                    <label for="question_id" name="" value="{{$q_three->id}}">{{$q_three->name}}</label>
                    <select name="{{$q_three->id}}" value="{{$q_three->id}}" class="form-control">
                        <option value="اوافق تماما">اوافق تماما</option>
                        <option value="اوافق">اوافق</option>
                        <option value="لا اعرف">لا اعرف</option>
                        <option value="لا اوافق">لا اوافق</option>
                        <option value="ا اوافق مطلقا">لا اوافق مطلقا</option>
                    </select>
                    <span class="text-danger">{{$errors->first('rate')}}</span>
                </div>
                @endforeach
                @endif

                @if(count($type_four)>0)
                <h1>دكتور الماده</h1>
                <br>
                @foreach($type_four as $q_four)

                <div class="form-group{{$errors->has('rate')?'has-error':''}}">
                    <label for="{{$q_four->id}} name="" value="{{$q_four->id}}">{{$q_four->name}}</label>
  
  
                    <select name="question_id[]" value="{{$q_four->id}}"class="form-control">
                        <option value="اوافق تماما">اوافق تماما</option>
                        <option value="اوافق">اوافق</option>
                        <option value="لا اعرف">لا اعرف</option>
                        <option value="لا اوافق">لا اوافق</option>
                        <option value="ا اوافق مطلقا">لا اوافق مطلقا</option>
                    </select>
                    <span class="text-danger">{{$errors->first('rate')}}</span>
                </div>
                @endforeach
                @endif

                <button type="submit" class="btn btn-primary">حفظ البيانات</button>

            </form>
        </div>
    </div>
</main>
@endsection