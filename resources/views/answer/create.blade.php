@extends('layouts.app')
@section('title','Category Page')
@section('content')
<main class="col-sm-9 create_answer" role="main">
    <form action="{{route('answer.store')}}" method="post" role="form" style="width:70%;">
        {{csrf_field()}}
        <input type="hidden" name="subject_id" value="{{$subject->id}}">
        <div class="accordion" id="accordionExample">
            @if(count($type_one)>0)
            <div class="card">
                <div class="card-header topic-name-preview" id="headingOne">
                    <div class="row">
                        <a class="btn btn-collapse" type="button" data-toggle="collapse" data-target="#oneorder" aria-expanded="true" aria-controls="collapseOne" style="outline:0;">
                            <i class="fa fa-angle-down "></i> المقرر
                        </a>
                    </div>
                </div>
                <div id="oneorder" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            @foreach($type_one as $q_one)
                            <div class="form-group{{$errors->has('rate')?'has-error':''}}">
                                <label for="question_id" name="" value="{{$q_one->id}}">{{$q_one->name}}</label>
                                <br>
                                <input type="radio" name="{{$q_one->id}}" value="اوافق ">اوافق  <br>
                                <input type="radio" name="{{$q_one->id}}" value="اوافق تماما">اوافق تماما <br>
                                <input type="radio" name="{{$q_one->id}}" value="لا اعرف">لا اعرف<br>
                                <input type="radio" name="{{$q_one->id}}" value="لا اوافق">لا اوافق <br>
                                 <input type="radio" name="{{$q_one->id}}" value="لا اوافق مطلقا">لا اوافق مطلقا<br> 
                                
                                <span class="text-danger">{{$errors->first('rate')}}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <br>

            @if(count($type_two)>0)
            <div class="card">
                <div class="card-header topic-name-preview" id="headingOne">
                    <div class="row">
                        <a class="btn btn-collapse" type="button" data-toggle="collapse" data-target="#twoorder" aria-expanded="true" aria-controls="collapseOne" style="outline:0;">
                            <i class="fa fa-angle-down "></i> مذكره كتاب المقرر
                        </a>
                    </div>
                </div>
                <div id="twoorder" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            @foreach($type_two as $q_two)
                            <div class="form-group{{$errors->has('rate')?'has-error':''}}">
                                <label for="question_id" name="" value="{{$q_two->id}}">{{$q_two->name}}</label>
                                <br>
                               <input type="radio" name="{{$q_two->id}}" value="اوافق ">اوافق<br>
                                <input type="radio" name="{{$q_two->id}}" value="اوافق تماما">اوافق تماما <br>
                                <input type="radio" name="{{$q_two->id}}" value="لا اعرف">لا اعرف<br>
                                <input type="radio" name="{{$q_two->id}}" value="لا اوافق">لا اوفق<br> 
                                 <input type="radio" name="{{$q_two->id}}" value="لا اوافق مطلقا">لا اوافق مطلقا<br> 
                                <span class="text-danger">{{$errors->first('rate')}}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <br>

            @if(count($type_three)>0)
            <div class="card">
                <div class="card-header topic-name-preview" id="headingOne">
                    <div class="row">
                        <a class="btn btn-collapse" type="button" data-toggle="collapse" data-target="#threeorder" aria-expanded="true" aria-controls="collapseOne" style="outline:0;">
                            <i class="fa fa-angle-down "></i> اداره العمليه التعليميه بالقسم
                        </a>
                    </div>
                </div>
                <div id="threeorder" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            @foreach($type_three as $q_three)
                            <div class="form-group{{$errors->has('rate')?'has-error':''}}">
                                <label for="question_id" name="" value="{{$q_three->id}}">{{$q_three->name}}</label>
                                <br>
                               <input type="radio" name="{{$q_three->id}}" value="اوافق ">اوافق<br>
                                <input type="radio" name="{{$q_three->id}}" value="اوافق تماما">اوافق تماما <br>
                                <input type="radio" name="{{$q_three->id}}" value="لا اعرف">لا اعرف<br>
                                <input type="radio" name="{{$q_three->id}}" value="لا اوافق">لا اوفق<br> 
                                 <input type="radio" name="{{$q_three->id}}" value="لا اوافق مطلقا">لا اوافق مطلقا<br> 
                                <span class="text-danger">{{$errors->first('rate')}}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <br>

            @if(count($type_four)>0)
            <div class="card">
                <div class="card-header topic-name-preview" id="headingOne">
                    <div class="row">
                        <a class="btn btn-collapse" type="button" data-toggle="collapse" data-target="#fiveorder" aria-expanded="true" aria-controls="collapseOne" style="outline:0;">
                            <i class="fa fa-angle-down "></i> دكتور الماده
                        </a>
                    </div>
                </div>
                <div id="fiveorder" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="container">
                            @foreach($type_four as $q_four)
                            <div class="form-group{{$errors->has('rate')?'has-error':''}}">
                                <label for="question_id" name="" value="{{$q_four->id}}">{{$q_four->name}}</label>
                                <br>
                               <input type="radio" name="{{$q_four->id}}" value="اوافق ">اوافق<br>
                                <input type="radio" name="{{$q_four->id}}" value="اوافق تماما">اوافق تماما <br>
                                <input type="radio" name="{{$q_four->id}}" value="لا اعرف">لا اعرف<br>
                                <input type="radio" name="{{$q_four->id}}" value="لا اوافق">لا اوفق<br> 
                                 <input type="radio" name="{{$q_four->id}}" value="لا اوافق مطلقا">لا اوافق مطلقا<br> 
                                <span class="text-danger">{{$errors->first('rate')}}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <br>


        </div>


        <button type="submit" class="btn btn-primary" style="margin-right:757px;border-radius:15px;width:130px;">حفظ البيانات</button>

    </form>

</main>
@endsection