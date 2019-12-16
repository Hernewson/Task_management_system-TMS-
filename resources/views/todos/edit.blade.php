@extends('vendor/main')
@section('title')
<title>Todo management system |Update task|</title>
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
                        <div class="page-title">Updating Task </div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=" / ">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">edit task</li>
                    </ol>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-default">
                        <div class="card-header">
                            Update your task #{{$todo->id}}
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-group">
                                    @foreach ($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{$error}}
                                    </li>

                                    @endforeach
                                </ul>
                            </div>

                            @endif

                            <form action="/todos/{{ $todo->id }}/update-todos" method="POST">
                                @csrf
                                <div class="form-group">
                                    {{-- <label for="title"> Task name: </label> --}}
                                    <input type="text" class="form-control" name="title"
                                        placeholder="Enter your task here" autofocus value="{{$todo->title}}">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="description" id="desciption" cols="30"
                                        rows="10"
                                        placeholder="Enter your task description here">{{$todo->description}}</textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-success ">Update task</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
    <!-- end page content -->

</div>
<!-- end page container -->
@endsection
