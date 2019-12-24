@extends('vendor/main')
@section('title')
<title>Todo management system |homepage|</title>
@endsection

@section('content')
<!-- start page container -->
<div class="page-container">

    <!-- start page content -->
    <div class="page-content-wrapper">

        <div class="page-content">
            <div class="page-bar">


                {{-- session message starts --}}
                @if (session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
                @endif
                @if (session()->has('complete'))
                <div class="alert alert-success">
                    {{session()->get('complete')}}
                </div>
                @endif

                @if (session()->has('delete'))
                <div class="alert alert-danger">
                    {{session()->get('delete')}}
                </div>
                @endif

                @if (session()->has('update'))
                <div class="alert alert-info">
                    {{session()->get('update')}}
                </div>
                @endif
                {{-- session message ends --}}


                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Todo</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=" / ">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">All tasks</li>
                    </ol>
                </div>
            </div>

            <ul class="list-group">

                @foreach ($todos as $todo)
                @if (!$todo->completed)

                <li class="list-group-item">
                    <a href="/todos/{{ $todo->id }}">{{ $todo -> title }}</a>

                    <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm float-right">Delete</a>
                     <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info btn-sm float-right">Edit</a>

                   
                    {{-- Completed checking point starts here --}}

                    <a href="/todos/{{ $todo->id }}/complete" class="btn btn-warning btn-sm float-left"
                        style="padding:5px;" title="Tick this task?"><i class="fa fa-check" aria-hidden="true"></i>
                    </a>
                    {{-- Completed checking point ends here --}}



                    {{-- <a href="/todos/{{ $todo->id }}" class="btn button-primary btn-sm float-right">View</a> --}}

                </li>
                @endif

                {{-- <li>
                    {{ $todo -> description }}
                </li> --}}

                @endforeach
            </ul>

            <div class="text-center">

                {{ $todos-> links() }}

            </div>

        </div>
    </div>
    <!-- end page content -->

</div>
<!-- end page container -->
@endsection
