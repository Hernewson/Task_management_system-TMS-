@extends('vendor/main')
@section('title')
<title>Todo management system |Task #{{$todo->id}}|</title>
@endsection

@section('content')
<!-- start page container -->
<div class="page-container">
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Task No. {{$todo->id}}</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=" / ">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Todo</li>
                    </ol>
                </div>
            </div>
            <div class="card card-default">
                <div class="card-header ">
                    <b>{{ $todo->title }}</b>
                    <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm float-right">Delete</a>
                    <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info btn-sm float-right">Edit</a>
                </div>
                <div class="card-body">
                    {{$todo->description}}

                </div>

            </div>




        </div>
    </div>
    <!-- end page content -->

</div>
<!-- end page container -->
@endsection
