@extends('admin.layouts.layout')
@section('title','عرض الدكاتره')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header ">
                    <h3 class="box-title">  اسماء دكاتره كليه الهندسه التى تم تسجيلها</h3>
                </div>

                <div class="box-body">
                    <table class="table table-bordered table-stripped table-hover">
                        <thead>
                            <th>#</th>
                            <th>اسم الدكتور</th>
                            <th>زمن انشائها</th>
                            <th>التحكم</th>

                        </thead>
                        <tbody>
                            @if(count($doctors)>0)
                            @foreach($doctors as $doctor)
                            <tr>
                                <td>{{$doctor->id}}</td>
                                <td>{{$doctor->name}}</td>
                                <td>{{date('M j, Y',strtotime($doctor->created_at))}}</td>
                                <td><a href="#" class="btn btn-xs btn-primary"><span class="fa fa-edit"></span></a>

                                    <!----delete model---->
                                    <button type="button" class="btn btn-danger btn-xs" ; data-toggle="modal" data-target="#del_subject"><span class="fa fa-trash"></span></button>


                                    <!-- Modal -->
                                    <div id="del_subject" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                      
                                        </div>
                                    </div>



                                </td>

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