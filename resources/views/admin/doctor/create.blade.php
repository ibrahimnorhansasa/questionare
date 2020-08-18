@extends('admin.layouts.layout')
@section('title','Category Page')
@section('content')
<main class="col-sm-9" role="main">
    <br>
    <h3 class="text-center">صفحه ادخال اسماء الدكاتره </h3>
    <div class="col-md-6">
        <div class="panel-body">
            <form action="{{route('doctor.store')}}" method="post" role="form" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group{{$errors->has('name')?'has-error':''}}">
                    <label for="name">اسم الدكتور</label>
                    <input type="text" class="form-control" name="name" placeholder="ادخل هنا اسم الماده">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
             

                <button type="submit" class="btn btn-primary">حفظ االبيانات</button>

            </form>
        </div>
    </div>
</main>
@endsection