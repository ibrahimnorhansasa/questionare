@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header"><h4>{{ __('عضويه جديده') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">الاسم</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">الايميل</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">الباسورد</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">تاكيد الباسورد</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">القسم</label>

                            <div class="col-md-6">
                                <select class="form-control" name="department">
                                    <option value="نظم وحاسبات"> نظم وحاسبات</option>
                                    <option value="كهرباء">كهرباء</option>
                                    <option value="مدنى">مدنى</option>
                                    <option value="عماره">عماره</option>
                                    <option value="تخطيط">تخطيط</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="study_year" class="col-md-4 col-form-label text-md-right">السنه الدراسيه</label>

                            <div class="col-md-6">
                                <select class="form-control" name="study_year">
                                    <option value="2020-2021"> 2020-2021 </option>
                                    <option value="2019-2020"> 2019-2020 </option>
                                    <option value="2018-2019">2018-2019</option>
                                    <option value="2017-2018">2017-2018</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="class_id" class="col-md-4 col-form-label text-md-right">الفرقه الدراسيه</label>

                            <div class="col-md-6">


                                <select class="form-control" name="class_id">
                                    @foreach(\App\Class_Student::all() as $class)
                                    <option value="{{$class->id}}">{{$class->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    تسجيل
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection