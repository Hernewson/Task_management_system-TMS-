@extends('vendor/main')
@section('title')
<title>Department Management System |Add new Department|</title>
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
                        <div class="page-title">Add Department </div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=" /home ">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Add Department</li>
                    </ol>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-default">
                        <div class="card-header">
                            Basic information of Department
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

                            <form action=" {{route('departments.store')}} " method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Enter Department's name here" autofocus />
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" cols="30"
                                        rows="10" placeholder="Enter your department's description here"></textarea>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-success ">Create Department</button>
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
