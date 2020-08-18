@extends('admin.layouts.layout')
@section('title','Category Page')
@section('content')

<section class="content">
    <div class="row">

        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <p class="box-title h3">اسئله الاستبيان</p>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-cat mb-3" data-toggle="modal" data-target="#exampleModal">
                        اضف سؤال جديد
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="{{route('category.store')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">انشاء اسئله الاستبيان</h5>
                                        <button type="button" class="close" style="margin-right:253px;" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">تصنيف السؤال</label>
                                            <select name="type" class="form-control">
                                                <option value="المقرر">المقرر</option>
                                                <option value="مذكره كتاب المقرر">مذكره كتاب المقرر</option>
                                                <option value="اداره العمليه التعليميه بالقسم"> اداره العمليه التعليميه بالقسم</option>
                                                <option value=" معيد الماده"> معيد الماده</option>
                                                <option value="استاذ الماده">استاذ الماده</option>
                                            </select>
                                            <label for="exampleInputEmail1">السؤال</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ادخل هنا نص سؤال الاستبيان ">
                                            <br>

                                        </div>



                                    </div>
                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-primary">حفظ</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-bordered table-hover ">
                        @if(count($question)>0)
                        <thead class="">
                            <tr>
                                <th>رقم التسلسل</th>
                                <th>تصنيف السؤال</th>
                                <th>السؤال</th>
                             
                                

                            </tr>
                        </thead>
                        <tbody>

                            @foreach($question as $q)
                            <tr>
                                <td>{{$q->id}}</td>
                                 <td>{{$q->type}}</td>
                                <td>{{$q->name}}</td>
                 
                               
                            </tr>
                            @endforeach

                        </tbody>
                        @endif

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</section>
@endsection