@extends('admin.layouts.layout')
@section('title','انشا الفرق الدراسيه')
@section('content')
<main class="col-sm-9" role="main">
    <br>
    <h3 class="text-center" style="color:#666;"> صفحه انشاء الفرق الدراسيه التى نريد ان نفعل بها استطلاع راى </h3>
    <div class="col-md-6">
        <div class="panel-body">
            <form action="{{route('class.store')}}" method="post" role="form" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group{{$errors->has('name')?'has-error':''}}">
                    <label for="name">الفرقه</label>
                    <input type="text" class="form-control" name="name" placeholder="ادخل هنا اسم الفرقه">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
             

                <button type="submit" class="btn btn-primary">حفظ االبيانات</button>

            </form>
        </div>
    </div>
</main>
@endsection