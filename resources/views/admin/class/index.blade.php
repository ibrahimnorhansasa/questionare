@extends('admin.layouts.layout')
@section('title','عرض الفرق ')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header ">
                    <h3 class="box-title">عرض اسماء الفرق الدراسيه التى تم تسجيلها </h3>
                </div>

                <div class="box-body">
                    <table class="table table-bordered table-stripped table-hover">
                        <thead>
                            <th>#</th>
                            <th>اسم الفرقه</th>
                            <th>زمن انشائها</th>
                           

                        </thead>
                        <tbody>
                            @if(count($classes)>0)
                            @foreach($classes as $class)
                            <tr>
                                <td>{{$class->id}}</td>
                                <td>الفرقه {{$class->name}}</td>
                                <td>{{date('M j, Y',strtotime($class->created_at))}}</td>
                                

                            </tr>
                            @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</section>

@endsection