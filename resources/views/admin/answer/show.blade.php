@extends('admin.layouts.layout')
@section('title','Category Page')
@section('content')
<main class="col-sm-9" role="main">

    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header text-center">
                    <p class="box-title h3 "> كل الطلاب الذين قاموا بعمل استبيان </p>
                    <br>
                    </div>
                    </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                      <thead>
                          <tr>
                                <th>رقم التسلسل</th>
                                <th>اسم الطالب</th>
                                <th>الايميل</th>
                              <th>تاريخ التسجيل</th>
                              <th>التحكم</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($users)>0)
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{date('M j, Y',strtotime($user->created_at))}}</td>
                                <td><a href="{{route('survey.showuser',$user->id)}}" class="btn btn-primary">عرض الاستبيان</a></td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>

                      
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    
</main>
@endsection