@extends('admin.layouts.layout')
@section('title','عرض المواد')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header ">
                    <h3 class="box-title">المواد التى يتم عمل استطلاع راى عليها</h3>
                </div>

                <div class="box-body">
                    <table class="table table-bordered table-stripped table-hover">
                        <thead>
                            <th>#</th>
                            <th>اسم الماده</th>
                            <th>الفرقه الدراسيه </th>
                            <th>زمن انشائها</th>
                            <th>التحكم</th>

                        </thead>
                        <tbody>
                            @if(count($subjects)>0)
                            @foreach($subjects as $subject)
                            <tr>
                                <td>{{$subject->id}}</td>
                                <td>{{$subject->title}}</td>
                                <td>{{$subject->class->name}}</td>
                                <td>{{date('M j, Y',strtotime($subject->created_at))}}</td>
                                <td><a href="{{route('subject.edit',$subject->id)}}" class="btn btn-xs btn-primary"><span class="fa fa-edit"></span></a>

                                    <!----delete model---->
                                    <button type="button" class="btn btn-danger btn-xs" ; data-toggle="modal" data-target="#del_subject{{$subject->id}}"><span class="fa fa-trash"></span></button>


                                    <!-- Modal -->
                                    <div id="del_subject{{$subject->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                {!!Form::open(['route'=>['subject.destroy',$subject->id],'method'=>'delete'])!!}
                                                <div class="modal-body">
                                                    <h4>هل تريد تاكيد الحذف ؟ </h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                                    {!!Form::submit('Yes',['class'=>'btn btn-danger'])!!}
                                                </div>
                                                {!!Form::close()!!}
                                            </div>
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