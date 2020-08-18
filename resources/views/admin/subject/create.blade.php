@extends('admin.layouts.layout')
@section('title','انشاء مواد')
@section('content')
<main class="col-sm-9" role="main">
    <br>
    <h3 class="text-center">انشاء المواد المراد عمل استطلاع راى عليها</h3>
    <div class="col-md-6">
        <div class="panel-body">
            <form action="{{route('subject.store')}}" method="post" role="form" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group{{$errors->has('title')?'has-error':''}}">
                    <label for="title">اسم الماده</label>
                    <input type="text" class="form-control" name="title" placeholder="ادخل هنا اسم الماده">
                    <span class="text-danger">{{$errors->first('title')}}</span>
                </div>
                <div class="form-group{{$errors->has('title')?'has-error':''}}">
                    <label for="class_id"> الفرقه الدراسيه التى يتم دراسه هذه الماده لطلابها</label>
                    <select class="form-control" name="class_id" placeholder="ادخل الفرقه الدراسيه التى تنتمى اليها هذه الماده">
                        @foreach(\App\Class_Student::all() as $class)
                        <option value="{{$class->id}}">{{$class->name}}</option>
                        @endforeach
                    </select>

                </div>

                <button type="submit" class="btn btn-primary">حفظ االبيانات</button>

            </form>
        </div>
    </div>
</main>
@endsection