@extends('admin.layouts.layout')
@section('title','Category Page')
@section('css')
<style>
    b{
        color: #666;
    }
    th{
        color: #666;
    }
</style>
@endsection
@section('content')
<main class="col-sm-9" role="main">
   
   
    <br>
    @foreach($surveys as $survey)
    <div class="card">
        <div class="card-header">
            <h5 class="text-center"> استماره استبيان للمقررات الدراسية لسنه({{$survey->user->study_year}})</h5>
            <p class="text-center" style="color:#666;"> كليه الهندسه قسم {{$survey->user->department}}</p>
            <br>
            <div class="row">
            <div class="col">
                <p><b>اسم الماده:</b>{{$survey->subject->title}}</p>
            </div>
                <div class="col">
                <p><b>اسم الطالب:</b>{{$survey->user->name}}</p>
            </div>
                <div class="col">
                <p><b>الفرقه الدراسيه:</b>{{$survey->user->class->name}}</p>
            </div>
                <div class="col">
                    <p><b>دكتور الماده:</b>{{$survey->doctor->name}}</p>
            </div>
           
        </div>
        </div>
        <div class="card-body">
           @if(count($survey->answers)>0)
             <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                      <thead>
                          <tr>
                                <th>نوع السؤال </th>
                                <th>السؤال</th>
                                 <th>الاجابه</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                @foreach($survey->answers as $ans)
                            <tr>
                                <td>{{$ans->question->type}}</td>
                                <td>{{$ans->question->name}}</td>
                                <td>{{$ans->rate}}</td>
                            </tr>
                            @endforeach
                         
                        </tbody>

                      
                    </table>
                </div>
            @endif
           
        </div>
    </div>
    <br>
    @endforeach

</main>
@endsection